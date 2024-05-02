<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\TransactionProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\Event\Tracer\Tracer;

class RentalController extends Controller
{
    public function index()
    {
        $page = [
            'name' =>  'Rental',
            'title' =>  'Rental Management',
            'crumb' =>  array('Rental' => '/rental')
        ];

        $ongoing = TransactionProduct::select(
            'tbl_transaction_products.id',
            'tbl_transaction_products.transaction_id',
            'tbl_transaction_products.status',

            'tbl_transactions.transaction_date',
            'tbl_transaction_products.date_returned',

            'tbl_customers.first_name',
            'tbl_customers.middle_name',
            'tbl_customers.last_name',
            'tbl_customers.suffix',

            'tbl_prices.rent_price',

            'tbl_products.name',
            'tbl_products.description',
            'tbl_products.category_id',
        )
        ->leftJoin('tbl_transactions', 'tbl_transactions.id', 'tbl_transaction_products.transaction_id')
        ->leftJoin('tbl_customers', 'tbl_customers.id', 'tbl_transactions.customer_id')
        ->leftJoin('tbl_products', 'tbl_products.id', 'tbl_transaction_products.product_id')
        ->leftJoin('tbl_prices', 'tbl_prices.id', 'tbl_transaction_products.price_id')
        ->where('tbl_transaction_products.status', TransactionProduct::ONGOING)
        ->where('tbl_transaction_products.type', TransactionProduct::RENT)
        ->orderBy('tbl_transactions.scheduled_return_date', 'DESC')
        ->orderBy('tbl_transactions.id', 'DESC')
        ->get();

        $completed = TransactionProduct::select(
            'tbl_transaction_products.id',
            'tbl_transaction_products.transaction_id',
            'tbl_transaction_products.status',
            'tbl_transaction_products.date_returned',

            'tbl_transactions.transaction_date',
            'tbl_transactions.scheduled_return_date',

            'tbl_customers.first_name',
            'tbl_customers.middle_name',
            'tbl_customers.last_name',
            'tbl_customers.suffix',

            'tbl_prices.rent_price',

            'tbl_products.name',
            'tbl_products.description',
            'tbl_products.category_id',
        )
        ->leftJoin('tbl_transactions', 'tbl_transactions.id', 'tbl_transaction_products.transaction_id')
        ->leftJoin('tbl_customers', 'tbl_customers.id', 'tbl_transactions.customer_id')
        ->leftJoin('tbl_products', 'tbl_products.id', 'tbl_transaction_products.product_id')
        ->leftJoin('tbl_prices', 'tbl_prices.id', 'tbl_transaction_products.price_id')
        ->where('tbl_transaction_products.status', '<>', TransactionProduct::ONGOING)
        ->where('tbl_transaction_products.type', TransactionProduct::RENT)
        ->orderBy('tbl_transactions.scheduled_return_date', 'DESC')
        ->orderBy('tbl_transactions.id', 'DESC')
        ->get();

        $statuses = TransactionProduct::TYPES;

        return view('rental.index', compact(
            'page',
            'ongoing',
            'completed',
            'statuses'
        ));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'status' => 'required'
        ]);

        $rent = TransactionProduct::select(
            'tbl_transaction_products.id',
            'tbl_transaction_products.transaction_id',
            'tbl_transaction_products.date_returned',
            'tbl_transactions.transaction_date'
        )
        ->leftJoin('tbl_transactions', 'tbl_transactions.id', 'tbl_transaction_products.transaction_id')
        ->where('tbl_transaction_products.id', $id)
        ->where('tbl_transaction_products.type', TransactionProduct::RENT)
        ->first();

        if(!$rent) {
            return back()->withErrors('Record doesn\'t exist');
        }

        DB::beginTransaction();
        try {

            if($request->status == TransactionProduct::ONGOING || $request->status == TransactionProduct::PAID) {

                TransactionProduct::where('id', $id)->update([
                    'date_returned' => '',
                    'status' => $request->status
                ]);

            } else {
                $this->validate($request, [
                    'date_returned' => 'required'
                ]);

                TransactionProduct::where('id', $id)->update([
                    'date_returned' => $request->date_returned,
                    'status' => $request->status
                ]);
            }

            $transaction = Transaction::find($rent->transaction_id);

            $ongoing = TransactionProduct::where('transaction_id', $rent->transaction_id)
            ->where('type', TransactionProduct::RENT)
            ->where('status', TransactionProduct::ONGOING)
            ->count();

            $incomplete = TransactionProduct::where('transaction_id', $rent->transaction_id)
            ->where('type', TransactionProduct::RENT)
            ->whereIn('status', [TransactionProduct::PAID, TransactionProduct::RETURNED, TransactionProduct::RETURNEDWITHDAMAGE])
            ->count();

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
            return back()->withSuccess('Record has been updated succesfully');

        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withErrors($e->getMessage());
        }
    }
}
