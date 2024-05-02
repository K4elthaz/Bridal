<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function verifyAccount($key)
    {
        DB::beginTransaction();
        try {

            $user = User::whereNull('email_verified_at')->where('email_verification_key', $key)->first();
            if(!$user) {
                return back();
            } else {
                $user->email_verified_at = Carbon::now('Asia/Manila');
                $user->save();

                DB::commit();
                // return redirect('https://shawnsbridal.shop/login');
                return redirect('https://shawnsbridal.shop/login')->withSuccess('Email has been verified');
            }

        } catch (\Exception $e) {
            DB::rollBack();
            return $e->getMessage();
        }
    }

    public function verifyEmail(Request $request)
    {

        DB::beginTransaction();
        try {
            
            $otp = $this->randomString('numbers', 6);
            $user = User::where('email', $request->email)->first();
            if(!$user) {
                return response()->json(['isValid' => false, 'message' => 'The provided email address is not associated with any account.']);
            }
            $user->otp = $otp;
            $user->otp_expires_at = Carbon::now('Asia/Manila')->addMinutes(15);
            $user->save();

            Mail::raw("Your OTP for account recovery is: $otp. This OTP will expire in 15 minutes.", function ($message) use ($request) {
                $message->to($request->email);
                $message->subject('OTP');
            });

            DB::commit();
            return response()->json(['isValid' => true, 'message' => 'An OTP has been sent to your email.']);

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['isValid' => false, 'message' => 'The provided email address is not associated with any account.']);
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
