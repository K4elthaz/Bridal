<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

use App\Models\Product;
use App\Models\ProductPhoto;

class ProductPhotoController extends Controller
{
    public function store(Request $request, $product_id)
    {
        $product = Product::find($product_id);
        if(!$product) {
            return back()->withErrors('Product doesn\'t exist');
        }

        try {

            if($request->hasFile('files')) {
                
                DB::transaction(function() use ($request, $product) {

                    $uploaded_files = [];
                    $allowed_files = ProductPhoto::ALLOWED_EXTENSIONS;

                    foreach($request->file('files') as $file) {

                        $original_filename = $file->getClientOriginalName();
                        $filename_only = pathinfo($original_filename, PATHINFO_FILENAME);
                        $extension = $file->getClientOriginalExtension();
                        $fileName_to_store = $this->randomString(15).'_'.time().'.'.$extension;

                        $check = in_array($extension, $allowed_files);

                        if($check) {
                            // $path = $file->storeAs('public/products', $fileName_to_store);

                            $image = Image::make($file);
                            $image->resize(370, 390); // Adjust the dimensions as needed
                            $image->save(storage_path('app/public/products/' . $fileName_to_store));

                            $uploaded_files[] = $fileName_to_store;
                        } else {
                            if(count($uploaded_files) > 0) {
                                foreach($uploaded_files as $uploaded_file) {
                                    Storage::delete('public/products/'.$uploaded_file);
                                }
                            }
                            return back()->withInput()->withErrors("Unknown Filetype - ".$original_filename);
                        }

                        $photo = new ProductPhoto;
                        $photo->product_id = $product->id;
                        $photo->filename = $fileName_to_store;
                        $photo->original_filename = $original_filename;
                        $photo->save();
                    }
                });

                return back()->withSuccess('Photo(s) has been uploaded successfully');

            } else {
                return back()->withInput()->withErrors('Please upload file');
            }

        } catch (\Exception $e) {
            return back()->withErrors($e->getMessage());
        }
    }

    public function setActive($product_id, $id)
    {
        $photo = ProductPhoto::where('id', $id)->where('product_id', $product_id)->first();
        if(!$photo) {
            return back()->withErrors('Photo doesn\'t exist');
        }

        try {
            DB::transaction(function() use ($product_id, $photo) {

                ProductPhoto::where('product_id', $product_id)->update([
                    'status' => ProductPhoto::INACTIVE
                ]);

                $photo->status = ProductPhoto::ACTIVE;
                $photo->save();
            });

            return back()->withSuccess('Photo has been set as the display photo.');

        } catch (\Exception $e) {
            return back()->withErrors($e->getMessage());
        }
    }

    public function destroy(Request $request, $id)
    {
        $photo = ProductPhoto::where('id', $id)->where('status', ProductPhoto::INACTIVE)->first();
        if(!$photo) {
            return back()->withErrors('Photo doesn\'t exist');
        }
        
        DB::beginTransaction();
        try {

            Storage::delete('public/products/'.$photo->filename);
            $photo->delete();

            DB::commit();
            return back()->withSuccess('Photo has been deleted successfully');

        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withInput()->withErrors($e->getMessage());
        }
    }

    public function randomString($n)
    {
      $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $randomString = '';
      for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
      }
      return $randomString;
    }
}
