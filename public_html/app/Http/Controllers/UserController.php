<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Mail;

use App\Models\User;


class UserController extends Controller
{
    public function index()
    {
        $page = [
            'name' =>  'Users',
            'title' =>  'System Users',
            'crumb' =>  array('Users' => '/users')
        ];

        $users = User::orderBy('full_name', 'ASC')
        ->where('id', '<>', Auth::user()->id)
        ->get();

        $user_types = User::USER_TYPES;

        return view('users.index', compact(
            'page',
            'users',
            'user_types',
        ));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'full_name' => 'required',
            'email' => [
                'required',
                'email',
                'regex:/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/',
                Rule::unique('tbl_users'),
            ],
            'classification' => ['required', 
            function ($attribute, $value, $fail){
                if (!in_array($value, array_values(User::USER_TYPES))) {
                    return $fail(__('Invalid classification.'));
                }
            }]
        ]);

        DB::beginTransaction();
        try {

            $key = $this->randomString(15);

            $user = new User;
            $user->full_name = $request->full_name;
            $user->email = $request->email;
            $user->password = bcrypt(12345678);
            $user->classification_id = $request->classification;
            $user->email_verification_key = $key;
            $user->status = User::ACTIVE;
            $user->save();

            // $verificationUrl = 'https://shawnsbridal.shop/verify-account/'.$key;
            $verificationUrl = 'https://shawnsbridal.shop/verify-account/'.$key;

            Mail::send('mail.account-verification', ['verificationUrl' => $verificationUrl], function ($message) use ($request) {
                $message->to($request->email);
                $message->subject('Email Verification');
            });

            DB::commit();
            return back()->withSuccess('Account has been created successfully');

        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withInput()->withErrors($e->getMessage());
        }
    }


    public function update(Request $request, $id)
    {
        $user = User::where('id', $id)
        ->where('id', '<>', Auth::user()->id)
        ->first();

        if(!$user) {
            return back()->withErrors("Account doesn't exist");
        }

        $this->validate($request, [
            'full_name' => 'required',
            'email' => [
                'required',
                'email',
                'regex:/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/',
                Rule::unique('tbl_users')->ignore($id),
            ],
            'status' => ['required', 
            function ($attribute, $value, $fail) {
                if (!in_array($value, [User::ACTIVE, User::INACTIVE])) {
                    return $fail(__('Invalid status.'));
                }
            }],
            'reset_password' => ['required', 
            function ($attribute, $value, $fail) {
                if (!in_array($value, ['no', 'yes'])) {
                    return $fail(__('Invalid status.'));
                }
            }],
            'classification' => ['required', 
            function ($attribute, $value, $fail) {
                if (!in_array($value, array_values(User::USER_TYPES))) {
                    return $fail(__('Invalid classification.'));
                }
            }]
        ]);

        try {
            DB::transaction(function() use ($user, $request) {
                $user->full_name = $request->full_name;
                $user->email = $request->email;
                $user->classification_id = $request->classification;
                $user->status = $request->status;
                if($request->reset_password == 'yes') {
                    $user->password = bcrypt('12345678');
                }
                $user->save();
            });

            return back()->withSuccess('Account has been updated successfully');

        } catch (\Exception $e) {
            return back()->withInput()->withErrors($e->getMessage());
        }
    }

    public function changePassword()
    {
        if(!Auth::check()) {
            return back();
        }

        $page = [
            'name'   =>  'Users',
            'title'  =>  'Change Password',
            'crumb'  =>  array('Users' => '/users',
                'Change password' => ''
            )
        ];

        return view('users.change-password', compact('page'));
    }

    public function updatePassword(Request $request)
    {
        $user = User::find(Auth::user()->id);
        if($user) {
            $this->validate($request, [
                'current_password' => ['required', 
                    function ($attribute, $value, $fail) use ($user) {
                        if (!Hash::check($value, $user->password)) {
                            return $fail(__('The current password is incorrect.'));
                        }
                    }],
                'new_password' => [
                    'required',
                    'string',
                    'min:8',
                    'regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])[A-Za-z0-9]+$/',
                ],
                'confirm_password' => 'required|same:new_password'
            ]);

            DB::beginTransaction();
            try {

                $user->password = Hash::make($request->new_password);
                $user->default_password = false;
                $user->save();

                DB::commit();
                return back()->withSuccess('Password has been updated successfully');

            } catch (\Exception $e) {
                DB::rollBack();
                return back()->withErrors($e->getMessage());
            }
        } else {
            return back();
        }
    }


    public function editProfile()
    {
        if(!Auth::check()) {
            return back();
        }

        $page = [
            'name'   =>  'Users',
            'title'  =>  'Edit Profile',
            'crumb'  =>  array('Users' => '/users',
                'Edit Profile' => ''
            )
        ];

        return view('users.edit-profile', compact('page'));
    }

    public function updateProfile(Request $request)
    {
        $user = User::find(Auth::user()->id);
        if($user) {
            $this->validate($request, [
                'full_name' => 'required',
                'email' => [
                    'required',
                    'email',
                    'regex:/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/',
                    Rule::unique('tbl_users')->ignore(Auth::user()->id),
                ],

            ]);

            DB::beginTransaction();
            try {

                $user->full_name = $request->full_name;
                $user->email = $request->email;
                $user->save();

                DB::commit();
                return back()->withSuccess('Profile has been updated successfully');

            } catch (\Exception $e) {
                DB::rollBack();
                return back()->withErrors($e->getMessage());
            }
        } else {
            return back();
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
