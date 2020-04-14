<?php

namespace App\Http\Controllers;

use App\Shipment;
use Illuminate\Http\Request;
use Milon\Barcode\DNS1D;
use PDF;

class DispatchSheetController extends Controller
{
    public function export_dispatch(Request $request)
    {
        // return Excel::download(new DispatchSheetExport, 'dispatch.xlsx');

    }

    public function search_order($search)
    {
        // dd($search);
        return Shipment::where('bar_code', 'LIKE', "%{$search}%")->first();
    }

    public function waybill_download()
    {
        $bar_code = DNS1D::getBarcodeHTML("4445645656", "PHARMA2T",3,33);
        $data = array('bar_code' => $bar_code);
        $pdf = PDF::loadView('waybill.index', $data);
        return $pdf->stream('waybill.pdf');
    }
}
