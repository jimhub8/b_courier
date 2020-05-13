<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use AfricasTalking\SDK\AfricasTalking;

class Sms extends Model
{
    public function sms($phone, $message)
    {
        // $phone = '+254731090832';
        $phone = '254727611583';
        $username = env('AFRICAS_TALKING_SANDBOX_USER_NAME'); // use 'sandbox' for development in the test environment
        $apiKey   = env('AFRICAS_TALKING_SANDBOX_SECRET'); // Live
        // dd($username, $apiKey);

        //
        $AT = new AfricasTalking($username, $apiKey);

        // Get one of the services
        $sms      = $AT->sms();

        // Use the service
        $result   = $sms->send([
            'to'      => $phone,
            'from'    => 'BoxleoLTD',
            // 'from'    => $username,
            'message' => $message
        ]);

        print_r($result);



        // $AT = new AfricasTalking($username, $apiKey);
        // // Get one of the services
        // $sms      = $AT->sms();
        // // Use the service
        // $result = $sms->send([
        //     // 'enqueue' => true,
        //     'to'      => $phone,
        //     // 'message' => $message,
        //     // 'from' => env('AFRICAS_TALKING_SANDBOX_USER_NAME'),
        //     'message' => 'Hello',
        // ]);
        // print_r($result);
        // return;
    }


    public function verify($phone, $code)
    {
        // $phone = '+254731090832';
        // $phone = '254711379383';
        $username = env('AFRICAS_TALKING_SANDBOX_USER_NAME'); // use 'sandbox' for development in the test environment
        $apiKey   = env('AFRICAS_TALKING_SANDBOX_SECRET'); // Live

        $AT       = new AfricasTalking($username, $apiKey);
        // Get one of the services
        $sms      = $AT->sms();
        // Use the service
        $result   = $sms->send([
            'enqueue' => true,
            'from'    => $username,
            'to'      => $phone,
            'message' => $code . " is your verification code. This code will expire in 15 minutes."
        ]);
        print_r($result);
    }
}
