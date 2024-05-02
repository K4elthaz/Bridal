<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Twilio\Rest\Client;

class SMSController extends Controller
{
    public function send()
    {
        $receiverNumber = "+639108621941";
        $message = "This is testing from localhost";
  
        try {
  
            $account_sid = "ACc863dc6d01b3ccdfdc162068b128aa1c";
            $auth_token = "e94ab8fac949e83e582ff7646b54b3a9";
            $twilio_number = "+12564742822";
  
            $client = new Client($account_sid, $auth_token);
            $client->messages->create($receiverNumber, [
                'from' => $twilio_number, 
                'body' => $message
            ]);
  
            dd('SMS Sent Successfully.');
  
        } catch (\Exception $e) {
            dd("Error: ". $e->getMessage());
        }
    }
}
