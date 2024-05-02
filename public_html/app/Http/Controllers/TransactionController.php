<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Price;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\TransactionProduct;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function index()
    {
        $page = [
            'name' =>  'Transactions',
            'title' =>  'Transactions',
            'crumb' =>  array('Transactions' => '/transactions')
        ];

        $transactions = Transaction::leftJoin('tbl_customers', 'tbl_customers.id', 'tbl_transactions.customer_id')
        ->leftJoin('tbl_users', 'tbl_users.id', 'tbl_transactions.encoded_by')
        ->select(
            'tbl_transactions.id',
            'tbl_transactions.customer_id',
            'tbl_transactions.transaction_date',
            'tbl_transactions.status',
            'tbl_users.full_name as encoder',
            'tbl_customers.first_name',
            'tbl_customers.middle_name',
            'tbl_customers.last_name',
            'tbl_customers.suffix'
        )
        ->orderBy('tbl_transactions.created_at', 'DESC')
        ->get();

        return view('transactions.index', compact(
            'page',
            'transactions'
        ));
    }

    public function create()
    {
        $page = [
            'name' =>  'Transactions',
            'title' =>  'Create Transaction',
            'crumb' =>  array('Transactions' => '/transactions', 'Create' => '')
        ];

        $products = Product::leftJoin('tbl_prices', 'tbl_prices.product_id', 'tbl_products.id')
        ->select(
            'tbl_products.id',
            'tbl_products.name',
            'tbl_products.description',
            'tbl_products.category_id',
            'tbl_products.for_sale',
            'tbl_products.available_for_rent',
            'tbl_prices.sale_price',
            'tbl_prices.rent_price',
            'tbl_prices.damage_deposit'
        )
        ->where(function($q) {
            $q->where('tbl_products.for_sale', '>', 0)
            ->orwhere('tbl_products.available_for_rent', '>', 0);
        })
        ->where('tbl_products.is_archived', 0)
        ->where('tbl_prices.status', 1)
        ->orderby('tbl_products.name', 'ASC')
        ->orderby('tbl_products.description', 'ASC')
        ->get();

        $customers = Customer::orderBy('last_name', 'ASC')->get();

        return view('transactions.create', compact(
            'page',
            'products',
            'customers'
        ));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'customer' => 'required',
            'transaction_date' => 'required'
        ]);

        $rent = 0;
        $sale = 0;

        foreach($request->products as $key => $product) {
            if(isset($product['rent'])) {
                $rent += $product['rent'];
            }
            if(isset($product['sale'])) {
                $sale += $product['sale'];
            }
        }

        if($rent < 1 && $sale < 1) {
            return back()->withInput()->withErrors('Transaction failed! Please enter a valid quantity.');
        }

        if($rent > 0) {
            $this->validate($request, [
                'scheduled_return_date' => 'required'
            ]);
        }

        DB::beginTransaction();
        try {

            $transaction = new Transaction;
            $transaction->customer_id = $request->customer;
            $transaction->transaction_date = $request->transaction_date;
            if($rent > 0) {
                $transaction->scheduled_return_date = $request->scheduled_return_date;
            }
            $transaction->status = $rent < 1 ? Transaction::COMPLETED : Transaction::ONGOING;
            $transaction->encoded_by = Auth::user()->id;
            $transaction->save();

            foreach($request->products as $key => $product) {

                $product_info = Product::find($key);

                $price = Price::where('product_id', $key)->where('status', 1)->first();

                if( (isset($product['sale']) && $product['sale'] < 1) && (isset($product['rent']) && $product['rent'] < 1) ) {
                    continue;
                }

                if( isset($product['sale']) && $product['sale'] > 0 ) {
                    if($product_info->for_sale >= $product['sale']) {

                        $transaction_product = new TransactionProduct;
                        $transaction_product->transaction_id = $transaction->id;
                        $transaction_product->product_id = $key;
                        $transaction_product->price_id = $price->id;
                        $transaction_product->quantity = $product['sale'];
                        $transaction_product->type = TransactionProduct::SALE;
                        $transaction_product->status = TransactionProduct::PAID;
                        $transaction_product->save();
                    } else {
                        DB::rollBack();
                        return back()->withErrors('Invalid quantity - '.$product_info->name);
                    }
                }

                if(isset($product['rent']) && $product['rent'] > 0) {
                    if($product_info->available_for_rent >= $product['rent']) {
                        for($x = 0; $x < $product['rent']; $x++) {
                            $transaction_product = new TransactionProduct;
                            $transaction_product->transaction_id = $transaction->id;
                            $transaction_product->product_id = $key;
                            $transaction_product->price_id = $price->id;
                            $transaction_product->quantity = 1;
                            $transaction_product->type = TransactionProduct::RENT;
                            $transaction_product->status = TransactionProduct::ONGOING;
                            $transaction_product->save();
                        }
                    } else {
                        DB::rollBack();
                        return back()->withErrors('Invalid quantity - '.$product->name);
                    }
                }

                Product::where('id', $product_info->id)->update([
                    'for_sale' => isset($product['sale']) ? $product_info->for_sale - $product['sale'] : $product_info->for_sale,
                    'available_for_rent' => isset($product['rent']) ? $product_info->available_for_rent - $product['rent'] : $product_info->available_for_rent,
                ]);
            }

            DB::commit();
            return redirect('/transactions')->withSuccess('Transaction has been saved successfully');

        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withInput()->withErrors($e->getMessage());
        }
    }

    public function show($id)
    {
        $page = [
            'name' =>  'Transactions',
            'title' =>  'Transactions',
            'crumb' =>  array('Transactions' => '/transactions', 'Show' => '')
        ];

        $transaction = Transaction::leftJoin('tbl_customers', 'tbl_customers.id', 'tbl_transactions.customer_id')
        ->select(
            'tbl_transactions.id',
            'tbl_transactions.transaction_date',
            'tbl_transactions.scheduled_return_date',
            'tbl_transactions.status',

            'tbl_customers.first_name',
            'tbl_customers.middle_name',
            'tbl_customers.last_name',
            'tbl_customers.suffix'
        )
        ->where('tbl_transactions.id', $id)
        ->first();

        if(!$transaction) {
            return back()->withErrors('Transaction doesn\'t exist');
        }

        $products = TransactionProduct::leftJoin('tbl_products', 'tbl_products.id', 'tbl_transaction_products.product_id')
        ->leftJoin('tbl_prices', 'tbl_prices.id', 'tbl_transaction_products.price_id')
        ->leftJoin('tbl_product_photos', 'tbl_product_photos.product_id', 'tbl_products.id')
        ->select(
            'tbl_transaction_products.date_returned',
            'tbl_transaction_products.quantity',
            'tbl_transaction_products.type',
            'tbl_transaction_products.status',

            'tbl_products.name',
            'tbl_products.description',
            'tbl_products.category_id',

            'tbl_product_photos.filename',

            'tbl_prices.sale_price',
            'tbl_prices.rent_price',
            'tbl_prices.damage_deposit'
        )
        ->where('tbl_transaction_products.transaction_id', $transaction->id)
        ->where('tbl_product_photos.status', 1)
        ->orderBy('tbl_products.name', 'ASC')
        ->orderBy('tbl_products.description', 'ASC')
        ->get();

        // $grand_total = 0;
        // foreach($products as $p) {
        //     if($p->type == TransactionProduct::SALE) {
        //         $grand_total += ($p->sale_price * $p->quantity);
        //     } else { // RENT

        //         if($p->status == TransactionProduct::PAID) {
        //             $grand_total += $p->sale_price;

        //         } elseif($p->status == TransactionProduct::ONGOING) {
        //             $grand_total += $p->rent_price;
        //             $grand_total += $p->damage_deposit;
                    
        //         } elseif($p->status == TransactionProduct::RETURNED) {
        //             if($p->date_returned != "") {
        //                 $daysDifference = Carbon::parse($transaction->scheduled_return_date)->diffInDays( Carbon::parse($p->date_returned) );
        //                 if($daysDifference > 0 ) {
        //                     $grand_total += (TransactionProduct::ADDITIONAL * $daysDifference);
        //                 }
        //                 $grand_total += $p->rent_price;
        //             } else {
        //                 $grand_total += $p->rent_price;
        //             }
            
        //         } else { // RETURNEDWITHDAMAGE
        //             $grand_total += $p->rent_price;
        //             $grand_total += $p->damage_deposit;
        //             $daysDifference = Carbon::parse($transaction->scheduled_return_date)->diffInDays( Carbon::parse($p->date_returned) );
        //             if($daysDifference > 0 ) {
        //                 $grand_total += (TransactionProduct::ADDITIONAL * $daysDifference);
        //             }
        //         }
        //     }
        // }

        return view('transactions.show', compact(
            'page',
            'transaction',
            'products',
            // 'grand_total'
        ));
    }

    public function edit($id)
    {
        $transaction = Transaction::find($id);
        if(!$transaction) {
            return back()->withErrors('Transaction doesn\'t exist');
        }

        $page = [
            'name' =>  'Transactions',
            'title' =>  'Transactions',
            'crumb' =>  array('Transactions' => '/transactions', 'Edit' => '')
        ];

        $products = TransactionProduct::leftJoin('tbl_products', 'tbl_products.id', 'tbl_transaction_products.product_id')
        ->leftJoin('tbl_prices', 'tbl_prices.id', 'tbl_transaction_products.price_id')
        ->leftJoin('tbl_product_photos', 'tbl_product_photos.product_id', 'tbl_products.id')
        ->select(
            'tbl_transaction_products.id',
            'tbl_transaction_products.date_returned',
            'tbl_transaction_products.quantity',
            'tbl_transaction_products.type',
            'tbl_transaction_products.status',

            'tbl_products.name',
            'tbl_products.description',
            'tbl_products.category_id',

            'tbl_product_photos.filename',

            'tbl_prices.sale_price',
            'tbl_prices.rent_price',
            'tbl_prices.damage_deposit'
        )
        ->where('tbl_transaction_products.transaction_id', $transaction->id)
        ->where('tbl_product_photos.status', 1)
        ->orderBy('tbl_products.name', 'ASC')
        ->orderBy('tbl_products.description', 'ASC')
        ->orderBy('tbl_transaction_products.type', 'ASC')
        ->get();
        
        $customers = Customer::orderBy('last_name', 'ASC')->get();

        $types = TransactionProduct::TYPES;

        $for_rent = TransactionProduct::where('transaction_id', $transaction->id)
        ->where('type', TransactionProduct::RENT)
        ->count();

        return view('transactions.edit', compact(
            'page',
            'transaction',
            'products',
            'customers',
            'types',
            'for_rent'
        ));
    }

    public function update(Request $request, $id)
    {
        $transaction = Transaction::find($id);
        if(!$transaction) {
            return back()->withErrors('Transaction doesn\'t exist');
        }

        $for_rent = TransactionProduct::where('transaction_id', $transaction->id)
        ->where('type', TransactionProduct::RENT)
        ->where('status', '<>', TransactionProduct::PAID)
        ->count();

        if($for_rent > 0) {
            $this->validate($request, [
                'customer' => 'required',
                'transaction_date' => 'required',
                'scheduled_return_date' => 'required'
            ]);
        } else {
            $this->validate($request, [
                'customer' => 'required',
                'transaction_date' => 'required'
            ]);
        }

        $products = TransactionProduct::leftJoin('tbl_products', 'tbl_products.id', 'tbl_transaction_products.product_id')
        ->leftJoin('tbl_prices', 'tbl_prices.id', 'tbl_transaction_products.price_id')
        ->leftJoin('tbl_product_photos', 'tbl_product_photos.product_id', 'tbl_products.id')
        ->select(
            'tbl_transaction_products.id',
            'tbl_transaction_products.product_id',
            'tbl_transaction_products.date_returned',
            'tbl_transaction_products.quantity',
            'tbl_transaction_products.type',
            'tbl_transaction_products.status',

            'tbl_products.name',
            'tbl_products.description',
            'tbl_products.category_id',

            'tbl_product_photos.filename',

            'tbl_prices.sale_price',
            'tbl_prices.rent_price',
            'tbl_prices.damage_deposit'
        )
        ->where('tbl_transaction_products.transaction_id', $transaction->id)
        ->where('tbl_product_photos.status', 1)
        ->orderBy('tbl_products.name', 'ASC')
        ->orderBy('tbl_products.description', 'ASC')
        ->get();

        DB::beginTransaction();
        try {

            foreach($products as $product) {

                if($product->type == TransactionProduct::RENT) {

                    $product_info = Product::find($product->product_id);

                    $status1 = [
                        TransactionProduct::RETURNED,
                        TransactionProduct::RETURNEDWITHDAMAGE
                    ];

                    if(in_array($product->status, $status1) && !in_array($request->status[$product->id], $status1)) {

                        if($request->status[$product->id] == TransactionProduct::ONGOING) {
                            if($product_info->available_for_rent < 1) {
                                DB::rollBack();
                                return back()->withInput()->withErrors('Something went wrong! Please check this product - '.$product_info->name);
                            } else {
                                TransactionProduct::where('id', $product->id)->update([
                                    'date_returned' => '',
                                    'status' => $request->status[$product->id] // ONGOING
                                ]);

                                Product::where('id', $product_info->id)->update([
                                    'available_for_rent' => $product_info->available_for_rent - 1
                                ]);
                            }
                        }
                        
                        if($request->status[$product->id] == TransactionProduct::PAID) {
                            TransactionProduct::where('id', $product->id)->update([
                                'date_returned' => '',
                                'status' => $request->status[$product->id] // PAID
                            ]);

                            if($product_info->for_rent > 0) {
                                Product::where('id', $product_info->id)->update([
                                    'available_for_rent' => $product_info->available_for_rent - 1,
                                    'for_rent' => $product_info->for_rent - 1
                                ]);
                            } else {
                                DB::rollBack();
                                return back()->withInput()->withErrors('Insufficient quantity for rent.');
                            }
                        } 
                    }

                    if(in_array($product->status, $status1) && in_array($request->status[$product->id], $status1)) {

                        if(isset($request->date_returned[$product->id]) && $request->date_returned[$product->id] != "") {
                            if($request->date_returned[$product->id] < $request->transaction_date) {
                                DB::rollBack();
                                return back()->withInput()->withErrors('Invalid date returned');
                            }
                        } else {
                            DB::rollBack();
                            return back()->withInput()->withErrors('Date returned is required');
                        }

                        TransactionProduct::where('id', $product->id)->update([
                            'status' => $request->status[$product->id],
                            'date_returned' => $request->date_returned[$product->id],
                        ]);
                    }

                    $status2 = [
                        TransactionProduct::PAID,
                        TransactionProduct::ONGOING
                    ];

                    if(in_array($product->status, $status2) && !in_array($request->status[$product->id], $status2)) {

                        if(isset($request->date_returned[$product->id]) && $request->date_returned[$product->id] != "") {
                            if($request->date_returned[$product->id] < $request->transaction_date) {
                                DB::rollBack();
                                return back()->withInput()->withErrors('Invalid date returned');
                            } 
                        } else {
                            DB::rollBack();
                            return back()->withInput()->withErrors('Date returned is required');
                        }

                        if($product->status == TransactionProduct::PAID) {
                            Product::where('id', $product_info->id)->update([
                                'available_for_rent' => $product_info->available_for_rent + 1,
                                'for_rent' => $product_info->for_rent + 1
                            ]);
                        } else { // ONGOING to RETURNED/RETURNED WITH DAMAGE
                            Product::where('id', $product_info->id)->update([
                                'available_for_rent' => $product_info->available_for_rent + 1,
                            ]);
                        }
                        
                        TransactionProduct::where('id', $product->id)->update([
                            'status' => $request->status[$product->id],
                            'date_returned' => $request->date_returned[$product->id],
                        ]);
                    }


                    if($product->status == TransactionProduct::PAID && $request->status[$product->id] == TransactionProduct::ONGOING) {

                        Product::where('id', $product_info->id)->update([
                            // 'available_for_rent' => $product_info->available_for_rent + 1,
                            'for_rent' => $product_info->for_rent + 1
                        ]);

                        TransactionProduct::where('id', $product->id)->update([
                            'status' => $request->status[$product->id],
                            'date_returned' => '',
                        ]);
                    }

                    if($product->status == TransactionProduct::ONGOING && $request->status[$product->id] == TransactionProduct::PAID) {

                        Product::where('id', $product_info->id)->update([
                            // 'available_for_rent' => $product_info->available_for_rent - 1,
                            'for_rent' => $product_info->for_rent - 1
                        ]);

                        TransactionProduct::where('id', $product->id)->update([
                            'status' => $request->status[$product->id],
                            'date_returned' => '',
                        ]);
                    }

                }
            }

            $ongoing = TransactionProduct::where('transaction_id', $transaction->id)
            ->where('type', TransactionProduct::RENT)
            ->where('status', TransactionProduct::ONGOING)
            ->count();

            $incomplete = TransactionProduct::where('transaction_id', $transaction->id)
            ->where('type', TransactionProduct::RENT)
            ->whereIn('status', [TransactionProduct::PAID, TransactionProduct::RETURNED, TransactionProduct::RETURNEDWITHDAMAGE])
            ->count();

            $transaction->customer_id = $request->customer;
            $transaction->transaction_date = $request->transaction_date;
            if($for_rent > 0) {
                $transaction->scheduled_return_date = $request->scheduled_return_date; 
            }

            if($ongoing > 0) {
                $transaction->status = Transaction::ONGOING;
            }

            if($ongoing > 0 && $incomplete  > 0) {
                $transaction->status = Transaction::INCOMPLETE;
            }

            if($ongoing < 1 ) {
                $transaction->status = Transaction::COMPLETED;
            }
            $transaction->save();

            DB::commit();
            return redirect('/transactions/'.$id.'/show')->withSuccess('Transaction has been updated successfully');

        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withInput()->withErrors($e->getMessage());
        }
    }
}
