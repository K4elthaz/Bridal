<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductPhoto;
use App\Models\Website;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Traits\Visitor;

class WebsiteController extends Controller
{
    use Visitor;
    
    public function info()
    {
        $page = [
            'name' =>  'Website',
            'title' =>  'Website Infomation',
            'crumb' =>  array('Website' => '/website', 'Information' => '')
        ];

        $info = Website::find(1);

        return view('website.info', compact(
            'page',
            'info',
        ));
    }

    public function updateInfo(Request $request)
    {
        $this->validate($request, [
            'address' => 'required',
            'contact_number' => 'required',
            'email' => 'required|email',
            'facebook' => 'required',
            'map' => 'required'
        ]);

        DB::beginTransaction();
        try {

            Website::where('id', 1)->update([
                'address' => $request->address,
                'contact_number' => $request->contact_number,
                'email' => $request->email,
                'facebook' => $request->facebook,
                'map' => $request->map,
            ]);

            DB::commit();
            return back()->withSuccess('Website information has been updated successfully');

        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withInput()->withErrors($e->getMessage());
        }
    }

    public function index()
    {
        $checkVisitor = $this->checkVisitor();

        $page = [
            'title' => 'HOME'
        ];

        $latest_men = Product::select(
            'tbl_products.id',
            'tbl_products.name',
            'tbl_products.description',

            'tbl_product_photos.filename',
            'tbl_prices.sale_price',
        )
        ->leftJoin('tbl_product_photos', 'tbl_product_photos.product_id', 'tbl_products.id')
        ->leftJoin('tbl_prices', 'tbl_prices.product_id', 'tbl_products.id')
        ->where('tbl_products.category_id', Product::MEN)
        ->where('tbl_prices.status', 1)
        ->where('tbl_product_photos.status', 1)
        ->orderBy('tbl_products.created_at', 'DESC')
        ->limit(7)
        ->get();

        $latest_women = Product::select(
            'tbl_products.id',
            'tbl_products.name',
            'tbl_products.description',
            
            'tbl_product_photos.filename',
            'tbl_prices.sale_price',
        )
        ->leftJoin('tbl_product_photos', 'tbl_product_photos.product_id', 'tbl_products.id')
        ->leftJoin('tbl_prices', 'tbl_prices.product_id', 'tbl_products.id')
        ->where('tbl_products.category_id', Product::WOMEN)
        ->where('tbl_prices.status', 1)
        ->where('tbl_product_photos.status', 1)
        ->orderBy('tbl_products.created_at', 'DESC')
        ->limit(7)
        ->get();

        $latest_kid = Product::select(
            'tbl_products.id',
            'tbl_products.name',
            'tbl_products.description',
            
            'tbl_product_photos.filename',
            'tbl_prices.sale_price',
        )
        ->leftJoin('tbl_product_photos', 'tbl_product_photos.product_id', 'tbl_products.id')
        ->leftJoin('tbl_prices', 'tbl_prices.product_id', 'tbl_products.id')
        ->where('tbl_products.category_id', Product::KID)
        ->where('tbl_prices.status', 1)
        ->where('tbl_product_photos.status', 1)
        ->orderBy('tbl_products.created_at', 'DESC')
        ->limit(7)
        ->get();

        return view('website.index', compact(
            'page',
            'latest_men',
            'latest_women',
            'latest_kid'
        ));
    }

    public function men()
    {
        $checkVisitor = $this->checkVisitor();
        
        $page = [
            'title' => 'MEN'
        ];

        $men = Product::select(
            'tbl_products.id',
            'tbl_products.name',

            'tbl_product_photos.filename',
            'tbl_prices.sale_price',
        )
        ->leftJoin('tbl_product_photos', 'tbl_product_photos.product_id', 'tbl_products.id')
        ->leftJoin('tbl_prices', 'tbl_prices.product_id', 'tbl_products.id')
        ->where('tbl_products.category_id', Product::MEN)
        ->where('tbl_prices.status', 1)
        ->where('tbl_product_photos.status', 1)
        ->orderBy('tbl_products.name', 'ASC')
        ->paginate(9);

        return view('website.men', compact(
            'page',
            'men',
        ));
    }

    public function women()
    {
        $checkVisitor = $this->checkVisitor();
        
        $page = [
            'title' => 'WOMEN'
        ];

        $women = Product::select(
            'tbl_products.id',
            'tbl_products.name',

            'tbl_product_photos.filename',
            'tbl_prices.sale_price',
        )
        ->leftJoin('tbl_product_photos', 'tbl_product_photos.product_id', 'tbl_products.id')
        ->leftJoin('tbl_prices', 'tbl_prices.product_id', 'tbl_products.id')
        ->where('tbl_products.category_id', Product::WOMEN)
        ->where('tbl_prices.status', 1)
        ->where('tbl_product_photos.status', 1)
        ->orderBy('tbl_products.name', 'ASC')
        ->paginate(9);

        return view('website.women', compact(
            'page',
            'women',
        ));
    }

    public function kid()
    {
        $checkVisitor = $this->checkVisitor();
        
        $page = [
            'title' => 'KID'
        ];

        $kid = Product::select(
            'tbl_products.id',
            'tbl_products.name',

            'tbl_product_photos.filename',
            'tbl_prices.sale_price',
        )
        ->leftJoin('tbl_product_photos', 'tbl_product_photos.product_id', 'tbl_products.id')
        ->leftJoin('tbl_prices', 'tbl_prices.product_id', 'tbl_products.id')
        ->where('tbl_products.category_id', Product::KID)
        ->where('tbl_prices.status', 1)
        ->where('tbl_product_photos.status', 1)
        ->orderBy('tbl_products.name', 'ASC')
        ->paginate(9);

        return view('website.kid', compact(
            'page',
            'kid',
        ));
    }

    public function viewProduct($id)
    {
        $checkVisitor = $this->checkVisitor();
        
        $page = [
            'title' => 'PRODUCT INFO'
        ];

        $product = Product::select(
            'tbl_products.id',
            'tbl_products.name',
            'tbl_products.description',
            'tbl_products.category_id',

            'tbl_prices.sale_price',
            'tbl_prices.rent_price'
        )
        ->leftJoin('tbl_prices', 'tbl_prices.product_id', 'tbl_products.id')
        ->where('tbl_prices.status', 1)
        ->where('tbl_products.id', $id)
        ->first();

        if(!$product) {
            return back();
        }

        $photos = ProductPhoto::where('product_id', $product->id)
        ->orderBy('status', 'DESC')
        ->get();

        return view('website.view-product', compact(
            'page',
            'product',
            'photos'
        ));
    }

    public function aboutUs()
    {
        $checkVisitor = $this->checkVisitor();
        
        $page = [
            'title' => 'About Us'
        ];

        return view('website.about-us', compact(
            'page',
        ));

    }
    
    public function testReturn(Request $request)
    {
        dd($request);
    }
}
