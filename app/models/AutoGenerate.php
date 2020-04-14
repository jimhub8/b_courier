<?php

namespace App\models;

use App\Shipment;

class AutoGenerate
{
    public function airwaybill_no($client)
    {
        $shipments = Shipment::withTrashed()->select('airway_bill_no')->where('client_id', $client->id)->orderBy('id', 'Desc')->first();
        if ($shipments) {
            // dd($shipments);
            // dd('122');
            // $start_no = $client->waybill_count_start;
            $inv_arr = explode('BL', $shipments->airway_bill_no);
            $inv_arr = (int) $inv_arr[1];
            // dd($inv_arr);
            // $id = ''.str_pad($product->id + 1, 8, $start_no, STR_PAD_LEFT);
            $airway_bill_no = ($inv_arr) ? 'BL' . str_pad($inv_arr + 1, 8, $inv_arr + 1, STR_PAD_LEFT) : 'BL' . str_pad(1, 8, $inv_arr + 1, STR_PAD_LEFT);
            $validator = \Validator::make(['airway_bill_no' => $airway_bill_no], ['airway_bill_no' => 'unique:shipments,airway_bill_no']);
            if ($validator->fails()) {
                $in_ar = (int) $inv_arr[1];
                for ($i = 1; $i < 50; $i++) {
                    $airway_bill_no = ($shipments) ? 'BL' . str_pad($in_ar + $i, 8, $inv_arr + 1, STR_PAD_LEFT) : 'BL' . str_pad(1, 8, $inv_arr + 1, STR_PAD_LEFT);
                    $validator = \Validator::make(['airway_bill_no' => $airway_bill_no], ['airway_bill_no' => 'unique:shipments,airway_bill_no']);
                    if (!$validator->fails()) {
                        // dd($airway_bill_no);
                        return $airway_bill_no;
                    }
                }
            } else {
                // dd($airway_bill_no);

                return $airway_bill_no;
            }
        } else {
            $start_no = $client->waybill_count_start;
            if ($start_no) {
                return 'BL' . str_pad(1, 8, $start_no, STR_PAD_LEFT);
            }
            // dd('TES');
            $shipments = Shipment::withTrashed()->select('airway_bill_no')->orderBy('id', 'Desc')->first();
            if ($shipments) {
                return 'BL' . str_pad(1, 8, $shipments->id + 1000, STR_PAD_LEFT);
            }
        }
    }
}
