<?php

namespace App\Http\Controllers;

use App\Charge;
use App\Shipment;
use App\Town;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChargeController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();

		// $this->Validate($request, [
		// 	'form.charges' => 'required',
		// 	'form.town_name' => 'required',
		// ]);
        // return $request->all();
        $charges = $request->charges;
        $town = $request->town_name;
        $vat = $charges * 0.16;
        // $request->schedule['id'];
        $total = ceil(($charges * 0.16) + $charges);
        // dd($total, ($charges * 0.16) + $charges);
        $town_id = Town::where('town_name', $town)->first('id');
        $charge = Charge::updateOrCreate(
            ['town' => $town],
            ['charge' => $charges, 'total' => $total, 'vat' => $vat, 'user_id' => Auth::id(), 'town_id' => $town_id->id]
        );
        return $charge;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\vat  $charge
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $charges = $request->charges;
        $town = $request->town_name;
        $vat = $charges * 0.16;
        // $request->schedule['id'];
        $total = ceil(($charges * 0.16) + $charges);
        // dd($total, ($charges * 0.16) + $charges);
        $charge = Charge::updateOrCreate(
            ['town' => $town],
            ['charge' => $charges, 'total' => $total, 'vat' => $vat, 'user_id' => Auth::id(), 'town_id' => $request->schedule['id']]
        );
        return $charge;
        // return $request->all();
        $charge = Charge::find($id);
        $town_name = Town::find($request->town_id);
        // dd($town_name);
        $charge->town = $town_name->town_name;
        $charge->town_id = $request->id;
        $charge->charge = $request->charge;
        $charge->total = ceil($request->total);
        $charge->vat = $request->vat;
        $charge->save();
        return $charge;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Charge  $charge
     * @return \Illuminate\Http\Response
     */
    public function destroy(Charge $charge)
    {
        //
    }

    public function shipCharge(Request $request, $id)
    {
        // return $request->all();
        $shipment = Shipment::find($id);
        if ($request->Stype == 'OVS') {
            $charges = $request->select['charges'];
            // return $charges->charge;
            foreach ($charges as $value) {
                $charge = $value['charge'];
            }
            // $vat = $charge * 0.16
                // return $charge;
            $shipment->charges = $charge;
        }elseif($request->Stype == 'dist') {
            $distance = $request->form['distance'];
            if ($distance <= 5) {
                $charge = 200;
                // $vat = $charge * 0.16
            } else {
                $charge = (($distance - 5) * 25) + 200;
                // $vat = $charge * 0.16
            }

            $shipment->charges = $charge;
        }
        // return $charge;
        $shipment->save();

        return $shipment;
    }

    public function getCharges()
    {
        return Charge::all();
    }
}
