@extends('waybill.app')

@section('content')
<div>
    <div>
        <img src="https://jimkiarie8.nyc3.digitaloceanspaces.com/boxleo/logo_1/Boxleo%20logo_Approved-01.png" alt="" style="width: 40%;">
        <div style="float: right;">
            {{-- <img src="{{ $shipments['barcode'] }}" alt="" style="width: 200px; height: 80px"> --}}
            <br>
        </div>
    </div>
    <h2><b>Our Charges</b></h2>
    <table class="table table-bordered table-sm">
        <thead>
            <tr>
                <th scope="col">Town</th>
                <th scope="col">Charge</th>
                <th scope="col">Vat</th>
                <th scope="col">Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td>{{ $item['town'] }} </td>
                <td>{{ $item['charge'] }} </td>
                <td>{{ $item['vat'] }} </td>
                <td>{{ $item['total'] }} </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
