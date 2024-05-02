<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Price;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductPhoto;
use App\Models\Stock;
use App\Models\TransactionProduct;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function index() 
    {
        $page = [
            'name' =>  'Products',
            'title' =>  'Products',
            'crumb' =>  array('Products' => '/products')
        ];

        $products = Product::leftJoin('tbl_prices', 'tbl_prices.product_id', 'tbl_products.id')
        ->select(
            'tbl_products.id',
            'tbl_products.name',
            'tbl_products.description',
            'tbl_products.category_id',
            'tbl_prices.sale_price',
            'tbl_prices.rent_price',
            'tbl_products.available_for_rent',
            'tbl_products.for_sale',
            'tbl_prices.damage_deposit'
        )
        ->where('tbl_products.is_archived', 0)
        ->where('tbl_prices.status', 1)
        ->orderBy('tbl_products.name', 'ASC')
        ->orderBy('tbl_products.description', 'ASC')
        ->get();

        $categories = Product::CATEGORIES;

        return view('products.index', compact(
            'page',
            'products',
            'categories'
        ));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'category' => ['required', 
            function ($attribute, $value, $fail){
                if (!in_array($value, array_values(Product::CATEGORIES))) {
                    return $fail(__('Invalid category.'));
                }
            }],
            'sale_price' => 'required|numeric|min:1',
            'rent_price' => 'required|numeric|min:1',
            'damage_deposit' => 'required|numeric|min:1',
        ]);

        try {

            $check_product = Product::where('name', $request->name)
            ->where('description', $request->description)
            ->first();

            if($check_product) {
                return back()->withInput()->withErrors('Product has already been taken.');
            }

            DB::transaction(function() use ($request) {
                $product = new Product;
                $product->name = $request->name;
                $product->description = $request->description;
                $product->category_id = $request->category;
                $product->save();

                $price = new Price;
                $price->product_id = $product->id;
                $price->sale_price = $request->sale_price;
                $price->rent_price = $request->rent_price;
                $price->damage_deposit = $request->damage_deposit;
                $price->encoded_by = Auth::user()->id;
                $price->save();
            });

            return back()->withSuccess('Product has been created successfully');

        } catch (\Exception $e) {
            return back()->withInput()->withErrors($e->getMessage());
        }
    }

    public function show($id)
    {
        $page = [
            'name' =>  'Products',
            'title' =>  'Products',
            'crumb' =>  array('Products' => '/products', 'Show' => '')
        ];

        $product = Product::leftJoin('tbl_prices', 'tbl_prices.product_id', 'tbl_products.id')
        ->select(
            'tbl_products.id',
            'tbl_products.name',
            'tbl_products.description',
            'tbl_products.available_for_rent',
            'tbl_products.for_rent',
            'tbl_products.for_sale',
            'tbl_products.description',
            'tbl_products.category_id',
            'tbl_prices.sale_price',
            'tbl_prices.rent_price',
            'tbl_prices.damage_deposit'
        )
        ->where('tbl_products.is_archived', 0)
        ->where('tbl_prices.status', 1)
        ->where('tbl_products.id', $id)
        ->first();
        
        if(!$product) {
            return back()->withErrors('Product doesn\'t exist');
        }

        $categories = Product::CATEGORIES;

        $photos = ProductPhoto::where('product_id', $product->id)->orderBy('created_at', 'ASC')->get();

        $transactions = TransactionProduct::select(
            'tbl_transactions.id',
            'tbl_customers.first_name',
            'tbl_customers.middle_name',
            'tbl_customers.last_name',
            'tbl_customers.suffix',
            'tbl_transactions.transaction_date'
        )
        ->leftJoin('tbl_transactions', 'tbl_transactions.id', 'tbl_transaction_products.transaction_id')
        ->leftJoin('tbl_customers', 'tbl_customers.id', 'tbl_transactions.customer_id')
        ->where('tbl_transaction_products.product_id', $product->id)
        ->groupBy(
            'tbl_transactions.id', 
            'tbl_customers.first_name',
            'tbl_customers.middle_name',
            'tbl_customers.last_name',
            'tbl_customers.suffix',
            'tbl_transactions.transaction_date'
            )
        ->orderBy('tbl_transactions.transaction_date', 'DESC')
        ->orderBy('tbl_transactions.id', 'DESC')
        ->get();

        return view('products.show', compact(
            'page',
            'product',
            'photos',
            'categories',
            'transactions'
        ));
    }

    public function updateForRent(Request $request, $id)
    {
        $product = Product::find($id);
        if(!$product) {
            return back()->withErrors('Product doesn\'t exist');
        }

        $this->validate($request, [
            'quantity' => 'required|numeric'
        ]);

        if($request->quantity < 0 || $request->quantity < $product->for_rent - $product->available_for_rent) {
            return back()->withErrors('Invalid quantity.');
        }

        try {

            DB::transaction(function() use ($request, $product) {
                $out_for_rent = $product->for_rent - $product->available_for_rent;

                $product->for_rent = $request->quantity;
                $product->available_for_rent = $request->quantity - $out_for_rent;
                $product->save();
            });

            return back()->withSuccess('Quantity for rent has been updated successfully.');

        } catch (\Exception $e) {
            return back()->withErrors($e->getMessage());
        }
    }

    public function updateForSale(Request $request, $id)
    {
        $product = Product::find($id);
        if(!$product) {
            return back()->withErrors('Product doesn\'t exist');
        }

        $this->validate($request, [
            'quantity' => 'required|numeric'
        ]);

        if($request->quantity < 0 ) {
            return back()->withErrors('Invalid quantity.');
        }

        try {

            DB::transaction(function() use ($request, $product) {
                $product->for_sale = $request->quantity;
                $product->save();
            });

            return back()->withSuccess('Quantity for sale has been updated successfully.');

        } catch (\Exception $e) {
            return back()->withErrors($e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {

        $product = Product::find($id);
        if(!$product) {
            return back()->withErrors('Product doesn\'t exist');
        }

        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'category' => ['required', 
            function ($attribute, $value, $fail){
                if (!in_array($value, array_values(Product::CATEGORIES))) {
                    return $fail(__('Invalid category.'));
                }
            }]
        ]);

        try {

            $check_product = Product::where('name', $request->name)
            ->where('description', $request->description)
            ->where('id', '<>', $product->id)
            ->first();

            if($check_product) {
                return back()->withInput()->withErrors('Product has already been taken.');
            }

            DB::transaction(function() use ($request, $product) {
                $product->name = $request->name;
                $product->description = $request->description;
                $product->category_id = $request->category;
                $product->save();

            });

            return back()->withSuccess('Product has been updated successfully');

        } catch (\Exception $e) {
            return back()->withInput()->withErrors($e->getMessage());
        }
    }
    
}
