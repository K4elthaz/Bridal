<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Price;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PriceController extends Controller
{
    public function update(Request $request, $product_id)
    {

        $product = Product::find($product_id);
        if(!$product) {
            return back()->withErrors('Product doesn\'t exist');
        }

        $this->validate($request, [
            'sale_price' => 'required|numeric',
            'rent_price' => 'required|numeric',
            'damage_deposit' => 'required|numeric',
        ]);

        if($request->sale_price < 1 ) {
            return back()->withInput()->withErrors('Invalid sale price');
        }

        if($request->rent_price < 1) {
            return back()->withInput()->withErrors('Invalid rent price');
        }

        if($request->damage_deposit < 1) {
            return back()->withInput()->withErrors('Invalid damage deposit');
        }

        try {

            DB::transaction(function() use ($request, $product) {

                Price::where('product_id', $product->id)->where('status', 1)->update([
                    'status' => 0
                ]);

                $price = new Price;
                $price->product_id = $product->id;
                $price->sale_price = $request->sale_price;
                $price->rent_price = $request->rent_price;
                $price->damage_deposit = $request->damage_deposit;
                $price->status = 1;
                $price->encoded_by = Auth::user()->id;
                $price->save();

            });

            return back()->withSuccess('Product price has been updated successfully');

        } catch (\Exception $e) {
            return back()->withInput()->withErrors($e->getMessage());
        }
    }
}
