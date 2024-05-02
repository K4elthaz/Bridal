<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use App\Models\TransactionProduct;
use Illuminate\Http\Request;

class ReportController extends Controller
{

    public function index() 
    {
        $page = [
            'name' =>  'Reports',
            'title' =>  'Reports',
            'crumb' =>  array('Reports' => '/reports')
        ];

        return view('reports.index', compact(
            'page',
        ));
    }

    public function download(Request $request)
    {
        if(!$request->from_date || !$request->to_date || ($request->from_date > $request->to_date)) {
            return redirect('/transactions')->withErrors('Invalid date.');
        }

        if(!$request->category || (!in_array($request->category, ['sales', 'rentals']))) {
            return redirect('/transactions')->withErrors('Please select category.');
        }

        $from_date = $request->from_date;
        $to_date = $request->to_date;
        $dataset = [];

        if($request->category == 'sales') {

            $transactions = Transaction::select(
                'tbl_transactions.*',
                'tbl_customers.first_name',
                'tbl_customers.middle_name',
                'tbl_customers.last_name',
                'tbl_customers.suffix',
            )
            ->leftJoin('tbl_customers', 'tbl_customers.id', 'tbl_transactions.customer_id')
            // ->where('tbl_transactions.status', Transaction::COMPLETED)
            ->orderBy('updated_at', 'DESC')
            ->where(function($q) use ($request) {
                $q->whereDate('tbl_transactions.transaction_date', '>=', $request->from_date)
                ->whereDate('tbl_transactions.transaction_date', '<=', $request->to_date);
            })
            ->get();

            foreach($transactions as $t) {
                $items = TransactionProduct::select(
                    'tbl_transaction_products.*',
                    'tbl_products.name',
                    'tbl_products.description',
                    'tbl_products.category_id',
                    'tbl_prices.sale_price',
                )
                ->leftJoin('tbl_products',  'tbl_products.id', 'tbl_transaction_products.product_id')
                ->leftJoin('tbl_prices', 'tbl_prices.id', 'tbl_transaction_products.price_id')
                ->where('tbl_transaction_products.transaction_id', $t->id)
                // ->where('tbl_transaction_products.type', TransactionProduct::SALE)
                ->where(function($query) {
                    $query->where('tbl_transaction_products.type', TransactionProduct::SALE)
                    ->orWhere(function($q) {
                        $q->where('tbl_transaction_products.type', TransactionProduct::RENT)
                        ->where('tbl_transaction_products.status', TransactionProduct::PAID);
                    });
                })
                ->get();

                if($items->count() > 0) {
                    $dataset[] = [
                        'transaction' => $t,
                        'items' => $items
                    ];
                }
            }

            if(count($dataset) < 1) {
                return back()->withErrors('No records found.');
            }

            return view('reports.sales', compact(
                'dataset',
                'to_date',
                'from_date'
            ));

        } else {

            $transactions = Transaction::select(
                'tbl_transactions.*',
                'tbl_customers.first_name',
                'tbl_customers.middle_name',
                'tbl_customers.last_name',
                'tbl_customers.suffix',
            )
            ->leftJoin('tbl_customers', 'tbl_customers.id', 'tbl_transactions.customer_id')
            // ->where('tbl_transactions.status', Transaction::COMPLETED)
            ->orderBy('updated_at', 'DESC')
            ->where(function($q) use ($request) {
                $q->whereDate('tbl_transactions.transaction_date', '>=', $request->from_date)
                ->whereDate('tbl_transactions.transaction_date', '<=', $request->to_date);
            })
            ->get();

            foreach($transactions as $t) {
                $items = TransactionProduct::select(
                    'tbl_transaction_products.*',
                    'tbl_products.name',
                    'tbl_products.description',
                    'tbl_products.category_id',
                    'tbl_prices.sale_price',
                    'tbl_prices.rent_price',
                    'tbl_prices.damage_deposit',
                )
                ->leftJoin('tbl_products',  'tbl_products.id', 'tbl_transaction_products.product_id')
                ->leftJoin('tbl_prices', 'tbl_prices.id', 'tbl_transaction_products.price_id')
                ->where('tbl_transaction_products.transaction_id', $t->id)
                ->where('tbl_transaction_products.type', TransactionProduct::RENT)
                ->where('tbl_transaction_products.status', '<>', 'Paid')
                ->get();

                if($items->count() > 0) {
                    $dataset[] = [
                        'transaction' => $t,
                        'items' => $items
                    ];
                }
            }

            if(count($dataset) < 1) {
                return back()->withErrors('No records found.');
            }

            return view('reports.rentals', compact(
                'dataset',
                'to_date',
                'from_date'
            ));
        }
    }

    public function inventory(Request $request)
    {
        if(!$request->from_date || !$request->to_date || ($request->from_date > $request->to_date)) {
            return redirect('/transactions')->withErrors('Invalid date.');
        }

        $from_date = $request->from_date;
        $to_date = $request->to_date;
        $dataset = [];

        $products = Product::select(
            'tbl_products.*',
            'tbl_prices.sale_price',
            'tbl_prices.rent_price',
            'tbl_prices.damage_deposit'
        )
        ->leftJoin('tbl_prices', 'tbl_prices.product_id', 'tbl_products.id')
        ->where('tbl_prices.status', 1)
        ->orderBy('tbl_products.name', 'ASC')
        ->get();

        if(count($products) > 0) {

            foreach($products as $p) {

                $sold = TransactionProduct::where('product_id', $p->id)
                ->where(function($query) {
                    $query->where('type', TransactionProduct::SALE)
                    ->orWhere(function($q) {
                        $q->where('type', TransactionProduct::RENT)
                        ->where('status', TransactionProduct::PAID);
                    });
                })->sum('quantity');

                $sold = TransactionProduct::select(
                    'tbl_transaction_products.*'
                )
                ->leftJoin('tbl_transactions', 'tbl_transactions.id', 'tbl_transaction_products.transaction_id')
                ->where(function($q) use ($request) {
                    $q->whereDate('tbl_transactions.transaction_date', '>=', $request->from_date)
                    ->whereDate('tbl_transactions.transaction_date', '<=', $request->to_date);
                })
                ->where('tbl_transaction_products.product_id', $p->id)
                ->where(function($query) {
                    $query->where('tbl_transaction_products.type', TransactionProduct::SALE)
                    ->orWhere(function($q) {
                        $q->where('tbl_transaction_products.type', TransactionProduct::RENT)
                        ->where('tbl_transaction_products.status', TransactionProduct::PAID);
                    });
                })->sum('tbl_transaction_products.quantity');

                if($p->category_id == 1) {
                    $category = "Men";
                } else if($p->category_id == 2) {
                    $category = "Women";
                } else {
                    $category = "Kids";
                }

                $dataset[] = [
                    'id' => $p->id,
                    'product_name' => $p->name,
                    'date_created' => $p->created_at,
                    'category' => $category,
                    'damage_deposit' => $p->damage_deposit,
                    'for_rent' => $p->available_for_rent,
                    'rent_price' => $p->rent_price,
                    'for_sale' => $p->for_sale,
                    'sale_price' => $p->sale_price,
                    'out_for_rent' => $p->for_rent-$p->available_for_rent,
                    'out_for_sale' => $sold
                ];
            }

            return view('reports.inventory', compact(
                'dataset',
                'to_date',
                'from_date'
            ));

            

        } else {
            return redirect('/transactions')->withErrors('No Records Found');
        }
    }
}
