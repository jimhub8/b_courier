<?php

namespace App\Http\Controllers;

use App\models\Sms;
use Illuminate\Http\Request;

class SmsController extends Controller
{

    public function index()
    {
        return Sms::all();
    }

    public function store(Request $request)
    {
        // return $request->all();
        $sms = new Sms;
        $sms->type = $request->type;
        $sms->content = $request->content;
        $sms->save();
    }

    public function send_sms(Request $request)
    {
        $request->validate([
            'status' => 'required',
        ]);
        $status = $request->status;
        // return ($request->all());
        // $message = $request->message;
        $shipments = $request->shipments;
        foreach ($shipments as $shipment) {
            $phone = $shipment['client_phone'];
            // $phone = str_replace(' ', '', $phone);

            $phone = preg_replace('/[^A-Za-z0-9\-]/', '', $phone);
             $start_no = ((substr($phone, 0, 1)));
             if ($start_no == 2) {
                $phone = ((substr($phone, 0, 12)));
             } elseif($start_no == 0) {
                $phone = ((substr($phone, 0, 10)));
             } elseif($start_no == 7) {
                $phone = +254 . ((substr($phone, 0, 9)));
             } else {
                $phone = $phone;
             }
            //  dd($phone);
            if ($status == 'Returns') {
                // $sms = 'Dear ' . $shipment['client_name'] . ', we made an attempt to deliver your parcel for ' .  $shipment['client_email'] . ' but the delivery was not successful. We would like to make another delivery attempt. Kindly call or text us on 0778301465 to schedule for delivery ' .
                //     ' regards. ';
                $sms = 'Return test sms';
            } elseif ($status == 'Not picking') {
                $sms = 'Not picking test sms';
                // $sms = 'Dear ' . $shipment['client_name'] . ', we have received your parcel for ' .  $shipment['client_email'] . ' that you ordered online. Kindly call 0778301465 to let us know when to make the delivery' . "\n" .
                //     ' regards. ' . "\n" . ' ';
            } else {
                $message = $request->message;
                $sms = 'Dear ' . $shipment['client_name'] . ', ' . $message;
            }

            $africas_talking = new Sms();
            $africas_talking->sms($phone, $sms);


        }
        return;
    }
}
