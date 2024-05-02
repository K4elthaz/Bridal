<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

use App\Models\Customer;
use App\Models\Province;
use App\Models\Transaction;

class CustomerController extends Controller
{
    public function index() 
    {
        $page = [
            'name' =>  'Customers',
            'title' =>  'Customer Management',
            'crumb' =>  array('Customers' => '/customers')
        ];

        $customers = Customer::orderBy('last_name', 'ASC')->get();

        $provinces = Province::orderBy('name')->get();

        return view('customers.index', compact(
            'page',
            'customers',
            'provinces'
        ));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'contact_number' => ['required', 'numeric',
            function ($attribute, $value, $fail) use ($request) {
                if(strlen($request->contact_number) < 11 || strlen($request->contact_number) > 11) {
                    return $fail(__('The contact number field should consist of 11 digits.'));
                }
            }],
            'province' => 'required',
            'municipality' => 'required',
            'barangay' => 'required',

            'profile_picture' => 'required',
            'id_picture' => 'required',
            
            'address' => 'required'
        ]);

        if(strlen($request->contact_number) < 11 || strlen($request->contact_number) > 11) {
            return back()->withInput()->withErrors('The contact number field should consist of 11 digits.');
        }
        
        $check_customer = Customer::where('first_name', $request->first_name)
        ->where('middle_name', $request->middle_name)
        ->where('last_name', $request->last_name)
        ->where('suffix', $request->suffix)
        ->where('contact_number', $request->contact_number)
        ->where('address', $request->address)
        ->where('province_id', $request->province)
        ->where('municipality_id', $request->municipality)
        ->where('barangay_id', $request->barangay)
        ->first();

        if($check_customer) {
            return back()->withInput()->withErrors('Customer already exists');
        }

        try {
            DB::transaction(function() use ($request) {
                $customer = new Customer;
                $customer->first_name = $request->first_name;
                $customer->middle_name = $request->middle_name;
                $customer->last_name = $request->last_name;
                $customer->suffix = $request->suffix;

                $customer->contact_number = $request->contact_number;

                $customer->province_id = $request->province;
                $customer->municipality_id = $request->municipality;
                $customer->barangay_id = $request->barangay;
                $customer->address = $request->address;
                

                $allowed_files = Customer::ALLOWED_EXTENSIONS;

                if($request->hasFile('profile_picture')) {

                    $original_filename = $request->file('profile_picture')->getClientOriginalName();
                    $filename_only = pathinfo($original_filename, PATHINFO_FILENAME);
                    $extension = $request->file('profile_picture')->getClientOriginalExtension();
                    $fileName_to_store = $this->randomString(15).'_'.time().'.'.$extension;

                    $check = in_array($extension, $allowed_files);

                    if($check) {

                        // $path = $file->storeAs('public/products', $fileName_to_store);
                        $image = Image::make($request->file('profile_picture'));
                        $image->resize(150, 150); // Adjust the dimensions as needed
                        $image->save(storage_path('app/public/customers/' . $fileName_to_store));

                        $customer->profile_picture = $fileName_to_store;

                    } else {
                        return back()->withInput()->withErrors("Unknown Filetype - ".$original_filename);
                    }
                } else {
                    return back()->withInput()->withErrors('Please upload profile picture');
                }

                if($request->hasFile('id_picture')) {

                    $original_filename = $request->file('id_picture')->getClientOriginalName();
                    $filename_only = pathinfo($original_filename, PATHINFO_FILENAME);
                    $extension = $request->file('id_picture')->getClientOriginalExtension();
                    $fileName_to_store = $this->randomString(15).'_'.time().'.'.$extension;

                    $check = in_array($extension, $allowed_files);

                    if($check) {

                        // $path = $file->storeAs('public/products', $fileName_to_store);
                        $image = Image::make($request->file('id_picture'));
                        $image->resize(200, 150); // Adjust the dimensions as needed
                        $image->save(storage_path('app/public/customers/' . $fileName_to_store));

                        $customer->id_picture = $fileName_to_store;

                    } else {
                        return back()->withInput()->withErrors("Unknown Filetype - ".$original_filename);
                    }
                } else {
                    return back()->withInput()->withErrors('Please upload ID picture');
                }

                $customer->save();

            });

            return back()->withSuccess('Customer has been created successfully');

        } catch (\Exception $e) {
            return back()->withInput()->withErrors($e->getMessage());
        }
    }

    public function show(Request $request, $id)
    {
        $customer = Customer::find($id);
        if(!$customer) {
            return back()->withErrors('Customer doesn\'t exist');
        }

        $page = [
            'name' =>  'Customers',
            'title' =>  'Show Customer',
            'crumb' =>  array('Customers' => '/customers', 'Show' => '')
        ];

        $transactions = Transaction::leftJoin('tbl_users', 'tbl_users.id', 'tbl_transactions.encoded_by')
        ->select(
            'tbl_transactions.id',
            'tbl_transactions.transaction_date',
            'tbl_transactions.status',

            'tbl_users.full_name as encoder'
        )
        ->where('tbl_transactions.customer_id', $customer->id)
        ->orderBy('tbl_transactions.transaction_date', 'DESC')
        ->get();

        $provinces = Province::orderBy('name')->get();

        return view('customers.show', compact(
            'page',
            'customer',
            'transactions',
            'provinces'
        ));
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);
        if(!$customer) {
            return back()->withErrors('Customer doesn\'t exist');
        }

        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'contact_number' => ['required', 'numeric',
            function ($attribute, $value, $fail) use ($request) {
                if(strlen($request->contact_number) < 11 || strlen($request->contact_number) > 11) {
                    return $fail(__('The contact number field should consist of 11 digits.'));
                }
            }],
            'province' => 'required',
            'municipality' => 'required',
            'barangay' => 'required',
            
            'address' => 'required'
        ]);

        $check_customer = Customer::where('first_name', $request->first_name)
        ->where('middle_name', $request->middle_name)
        ->where('last_name', $request->last_name)
        ->where('suffix', $request->suffix)
        ->where('contact_number', $request->contact_number)
        ->where('address', $request->address)
        ->where('province_id', $request->province)
        ->where('municipality_id', $request->municipality)
        ->where('barangay_id', $request->barangay)
        ->where('id', '<>', $customer->id)
        ->first();

        if($check_customer) {
            return back()->withInput()->withErrors('Customer already exists');
        }

        try {
            DB::transaction(function() use ($request, $customer) {
                $customer->first_name = $request->first_name;
                $customer->middle_name = $request->middle_name;
                $customer->last_name = $request->last_name;
                $customer->suffix = $request->suffix;

                $customer->contact_number = $request->contact_number;

                $customer->province_id = $request->province;
                $customer->municipality_id = $request->municipality;
                $customer->barangay_id = $request->barangay;
                $customer->address = $request->address;


                $allowed_files = Customer::ALLOWED_EXTENSIONS;

                if($request->hasFile('profile_picture')) {

                    $original_filename = $request->file('profile_picture')->getClientOriginalName();
                    $filename_only = pathinfo($original_filename, PATHINFO_FILENAME);
                    $extension = $request->file('profile_picture')->getClientOriginalExtension();
                    $fileName_to_store = $this->randomString(15).'_'.time().'.'.$extension;

                    $check = in_array($extension, $allowed_files);

                    if($check) {

                        // $path = $file->storeAs('public/products', $fileName_to_store);
                        $image = Image::make($request->file('profile_picture'));
                        $image->resize(150, 150); // Adjust the dimensions as needed
                        $image->save(storage_path('app/public/customers/' . $fileName_to_store));

                        $customer->profile_picture = $fileName_to_store;

                    } else {
                        return back()->withInput()->withErrors("Unknown Filetype - ".$original_filename);
                    }
                }

                if($request->hasFile('id_picture')) {

                    $original_filename = $request->file('id_picture')->getClientOriginalName();
                    $filename_only = pathinfo($original_filename, PATHINFO_FILENAME);
                    $extension = $request->file('id_picture')->getClientOriginalExtension();
                    $fileName_to_store = $this->randomString(15).'_'.time().'.'.$extension;

                    $check = in_array($extension, $allowed_files);

                    if($check) {

                        // $path = $file->storeAs('public/products', $fileName_to_store);
                        $image = Image::make($request->file('id_picture'));
                        $image->resize(200, 150); // Adjust the dimensions as needed
                        $image->save(storage_path('app/public/customers/' . $fileName_to_store));

                        $customer->id_picture = $fileName_to_store;

                    } else {
                        return back()->withInput()->withErrors("Unknown Filetype - ".$original_filename);
                    }
                }

                $customer->save();
            });

            return back()->withSuccess('Customer information has been updated successfully');

        } catch (\Exception $e) {
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
