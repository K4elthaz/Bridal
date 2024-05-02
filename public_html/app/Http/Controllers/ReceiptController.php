<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Price;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\TransactionProduct;
use Illuminate\Http\Request;

class ReceiptController extends Controller
{
    public function initial($id)
    {
        $transaction = Transaction::leftJoin('tbl_customers', 'tbl_customers.id', 'tbl_transactions.customer_id')
        ->leftJoin('tbl_users', 'tbl_users.id', 'tbl_transactions.encoded_by')
        ->select(
            'tbl_transactions.id',
            'tbl_transactions.transaction_date',
            'tbl_transactions.scheduled_return_date',

            'tbl_users.full_name as encoder',
            'tbl_customers.first_name',
            'tbl_customers.middle_name',
            'tbl_customers.last_name',
            'tbl_customers.suffix',
            'tbl_customers.contact_number',
            'tbl_customers.address'
        )
        ->where('tbl_transactions.id', $id)
        ->first();

        if(!$transaction) {
            return back()->withErrors('Transaction doesn\'t exist');
        }
        
        $rent = [];

        $for_rent = TransactionProduct::select(
            'product_id',
            'price_id'
        )
        ->where('type', TransactionProduct::RENT)
        ->where('transaction_id', $transaction->id)
        ->groupBy('product_id', 'price_id')
        ->get();

        foreach($for_rent as $fr) {

            $product = Product::find($fr->product_id);
            $price = Price::find($fr->price_id);
            $quantity = TransactionProduct::where('type', TransactionProduct::RENT)
            ->where('transaction_id', $transaction->id)
            ->where('product_id', $fr->product_id)
            ->where('price_id', $fr->price_id)
            ->count();

            $rent[] = [
                'product_number' => $product->id,
                'name' => $product->name,
                'description' => $product->description,
                'quantity' => $quantity,
                'rent_price' => $price->rent_price,
                'damage_deposit' => $price->damage_deposit*$quantity,
                'subtotal' => $price->rent_price*$quantity
            ];
        }

        $sale = TransactionProduct::select(
            'tbl_products.id',
            'tbl_products.name',
            'tbl_products.description',

            'tbl_transaction_products.quantity',
            'tbl_prices.sale_price'
        )
        ->leftJoin('tbl_products', 'tbl_products.id', 'tbl_transaction_products.product_id')
        ->leftJoin('tbl_prices', 'tbl_prices.id', 'tbl_transaction_products.price_id')
        ->where('tbl_transaction_products.transaction_id', $transaction->id)
        ->where('tbl_transaction_products.type', TransactionProduct::SALE)
        ->orderby('tbl_products.name')
        ->orderby('tbl_products.description')
        ->get();

        $page = "Initial Receipt";

        return view('receipts.initial', compact(
            'page',
            'transaction',
            'sale',
            'rent'
        ));
    }

    public function final($id)
    {
        $transaction = Transaction::leftJoin('tbl_customers', 'tbl_customers.id', 'tbl_transactions.customer_id')
        ->leftJoin('tbl_users', 'tbl_users.id', 'tbl_transactions.encoded_by')
        ->select(
            'tbl_transactions.id',
            'tbl_transactions.transaction_date',
            'tbl_transactions.scheduled_return_date',

            'tbl_users.full_name as encoder',
            'tbl_customers.first_name',
            'tbl_customers.middle_name',
            'tbl_customers.last_name',
            'tbl_customers.suffix',
            'tbl_customers.contact_number',
            'tbl_customers.address'
        )
        ->where('tbl_transactions.id', $id)
        ->where('tbl_transactions.status', Transaction::COMPLETED)
        ->first();

        if(!$transaction) {
            return back()->withErrors('Transaction doesn\'t exist');
        }

        $sale = TransactionProduct::select(
            'tbl_products.id',
            'tbl_products.name',
            'tbl_products.description',

            'tbl_transaction_products.quantity',
            'tbl_prices.sale_price'
        )
        ->leftJoin('tbl_products', 'tbl_products.id', 'tbl_transaction_products.product_id')
        ->leftJoin('tbl_prices', 'tbl_prices.id', 'tbl_transaction_products.price_id')
        ->where('tbl_transaction_products.transaction_id', $transaction->id)
        ->where('tbl_transaction_products.type', TransactionProduct::SALE)
        ->orderby('tbl_products.name')
        ->orderby('tbl_products.description')
        ->get();

        $rent = TransactionProduct::select(
            'tbl_products.id',
            'tbl_products.name',
            'tbl_products.description',

            'tbl_transaction_products.quantity',
            'tbl_transaction_products.date_returned',
            'tbl_transaction_products.status',
            'tbl_prices.sale_price',
            'tbl_prices.rent_price',
            'tbl_prices.damage_deposit',
        )
        ->leftJoin('tbl_products', 'tbl_products.id', 'tbl_transaction_products.product_id')
        ->leftJoin('tbl_prices', 'tbl_prices.id', 'tbl_transaction_products.price_id')
        ->where('tbl_transaction_products.transaction_id', $transaction->id)
        ->where('tbl_transaction_products.type', TransactionProduct::RENT)
        ->orderby('tbl_products.name')
        ->orderby('tbl_products.description')
        ->get();
        
        $additional = TransactionProduct::ADDITIONAL;

        $page = "Initial Receipt";

        return view('receipts.final', compact(
            'page',
            'transaction',
            'sale',
            'rent',
            'additional'
        ));
    }
}
