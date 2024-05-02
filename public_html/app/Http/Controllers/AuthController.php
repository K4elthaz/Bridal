<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function login()
    {
        if(Auth::check()) {
            return redirect('/dashboard');
        }

        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
            'status' => 1
        ];

        if (Auth::attempt($credentials)) {

            if(is_null(Auth::user()->email_verified_at)) {
                Auth::logout();
                return back()->withErrors('Email is  not verified')->withInput($request->all());
            } else {
                return redirect('/dashboard');
            }
        }
    
        return back()->withErrors('Invalid credentials')->withInput($request->all());
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
    
    public function forgotPassword()
    {
        return view('auth.forgot-password');
    }

    public function recoverAccount(Request $request)
    {
        
        $this->validate($request, [
            'otp' => 'required'
        ]);

        DB::beginTransaction();
        try {

            $user = User::where('otp', $request->otp)->first();
            if(!$user) {
                return back()->withErrors('OTP is incorrect.');
            }

            if(Carbon::now('Asia/Manila') <= Carbon::parse($user->otp_expires_at)) {
                $password = $this->randomString('letters', 8);

                $user->password = bcrypt($password);
                $user->default_password = true;
                $user->otp = null;
                $user->otp_expires_at = null;
                if(is_null($user->email_verified_at)) {
                    $user->email_verified_at = Carbon::now('Asia/Manila');
                }

                $user->save();

                Mail::raw("This email is to inform you that a temporary password has been generated for your account. Please use the following temporary password to log in: $password", function ($message) use ($user) {
                    $message->to($user->email);
                    $message->subject('Account Recovery');
                });
            } else {
                DB::rollBack();
                return back()->withErrors('OTP is incorrect');
            }

            DB::commit();
            return redirect('/login')->withSuccess("A temporary password has been sent to your email address. Please check your inbox and use the provided temporary password to log in.");

        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withErrors($e->getMessage());
        }
    }

    public function randomString($type, $n)
    {
        if($type == 'letters') {
            $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        } else {
            $characters = '1234567890';
        }

        $randomString = '';
        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }
        return $randomString;
    }
}
