<?php

namespace App\Http\Controllers;

use App\Charge;
use App\Shipment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Milon\Barcode\DNS1D;
use PDF;

class DownloadController extends Controller
{

    public function getShipSingle($id)
    {
        $country = Auth::user()->country_;
        $country_logo = $country->image;
        // $path = Storage::disk('public')->path($country->image);
        // $country_logo = 'data:image/png;base64,' . base64_encode(file_get_contents($path));
        // $data = (Storage::get($country_logo));

        // dd($data);
        // dd('data:image/png;base64,' . DNS1D::getBarcodePNG("4", "C39+",3,33,array(1,1,1)));
        $dispatcher = Shipment::getEventDispatcher();
        // disabling the events
        Shipment::unsetEventDispatcher();
        $shipments = Shipment::where('id', $id)->get();
        $shipments->transform(function ($shipment) {
            // dd(DNS1D::getBarcodeSVG("4445645656", "C39"));
            $length = strlen($shipment->bar_code);
            if ($length > 10) {
                // $cut = $length - 10;
                $bar_code_str = substr($shipment->bar_code, '-10');
            } else {
                $bar_code_str = $shipment->bar_code;
            }
            $bar_code = 'data:image/png;base64,' . DNS1D::getBarcodePNG($bar_code_str, "C39");
            $shipment->barcode = $bar_code;
            // $shipment->country_logo = $country_logo;
            return $shipment;
        });
        $s_update = Shipment::find($id);
        $s_update->printed_at = now();
        $s_update->save();
        Shipment::setEventDispatcher($dispatcher);
        // return $shipments[0];
        $data = ['shipments' => $shipments[0]];
        // dd($shipments[0]['bar_code']);
        // $bar_code = DNS1D::getBarcodeHTML("4445645656", "PHARMA2T",3,33);
        // $data = array('bar_code' => $bar_code);
        $pdf = PDF::loadView('waybill.single', $data);
        return $pdf->stream($shipments[0]['bar_code']);
    }
    public function getScheduled(Request $request)
    {
        // return $request->all();
        $dispatcher = Shipment::getEventDispatcher();
        // disabling the events
        Shipment::unsetEventDispatcher();
        // return $request->all();
        $print_shipment = Shipment::where('status', 'Scheduled')->whereBetween('derivery_date', [$request->start_date, $request->end_date])->where('printed', 0)->where('country_id', Auth::user()->country_id)->take(200)->latest()->get();
        $id = [];
        foreach ($print_shipment as $selectedItems) {
            $id[] = $selectedItems['id'];
        }
        // $status = $request->form['status'];
        // $derivery_time = $request->form['derivery_time'];
        // $remark = $request->form['remark'];
        // $derivery_date = $request->form['scheduled_date'];
        $print_shipment->transform(function ($shipment) {
            // $length = strlen($shipment->bar_code);
            // if ($length > 10) {
            //     // $cut = $length - 10;
            //     $bar_code_str = substr($shipment->bar_code, '-10');
            // } else {
            //     $bar_code_str = $shipment->bar_code;
            // }
            // $bar_code = 'data:image/png;base64,' . DNS1D::getBarcodePNG($bar_code_str, "C39");
            // $shipment->barcode = $bar_code;
            // // $shipment->country_logo = $country_logo;
            // return $shipment;

            // dd(DNS1D::getBarcodeSVG("4445645656", "C39"));
            $bar_code = 'data:image/png;base64,' . DNS1D::getBarcodePNG($shipment->bar_code, "C39");
            $shipment->barcode = $bar_code;
            // $shipment->country_logo = $country_logo;
            return $shipment;
        });
        // Shipment::setEventDispatcher($dispatcher);
        // return $print_shipment;

        $data = ['shipments' => $print_shipment];
        $pdf = PDF::loadView('waybill.bunch', $data);
        $shipment = Shipment::whereIn('id', $id)->update(['printed' => 1, 'printReceipt' => 1, 'printed_at' => now()]);
        return $pdf->stream('waybill.pdf');
    }



    public function waybill_download()
    {
        $bar_code = DNS1D::getBarcodeHTML("4445645656", "PHARMA2T",3,33);
        $data = array('bar_code' => $bar_code);
        $pdf = PDF::loadView('waybill.index', $data);
        return $pdf->stream('waybill.pdf');
    }


    public function charges_download()
    {
        $data = Charge::all();
        // dd($data);
        $data = ['data' => $data];
        $pdf = PDF::loadView('waybill.charges', $data);
        return $pdf->download('charges.pdf');
    }
}
