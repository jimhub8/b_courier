@extends('waybill.app')

@section('content')
@foreach ($shipments as $shipment)
        <div class="page-break">
            <div style="">
                        <img src="{{ asset('storage/logo/Boxleo logo_Approved-01.png') }}" alt="" style="width: 40%;">
                        {{-- <p>{{ $shipment['barcode'] }}</p> --}}
                        <div style="float: right;">
                            <img src="{{ $shipment['barcode'] }}" alt="" style="width: 200px; height: 80px">
                            <br>
                            <b>WayBill Number:: {{ $shipment['bar_code'] }}</b>
                        </div>
                </div>
                    <hr>
                    <h5 class="text-center">DISPATCH SECTION</h5>
                    <table class="table table-bordered table-sm">
                        <thead>
                          <tr>
                            <th scope="col">From</th>
                            <th scope="col">To</th>
                            <th scope="col">City</th>
                            <th scope="col">Dispatch date</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>{{ $shipment['sender_address'] }}</td>
                            <td>{{ $shipment['client_address'] }}</td>
                            <td>{{ $shipment['client_city'] }}</td>
                            <td>{{ $shipment['derivery_date'] }}</td>
                          </tr>
                        </tbody>
                      </table>

                      <h5 class="text-center">Sender Details</h5>
                    <table class="table table-bordered table-sm">
                        <thead>
                          <tr>
                            <th scope="col">Sent By</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Email</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Sent By: Boxleo Courier Services</td>
                            <td>Phone: +254743332743</td>
                            <td>Email: info@boxleo.co.ke</td>
                          </tr>
                        </tbody>
                      </table>

                      <h5 class="text-center">Client Details</h5>
                    <table class="table table-bordered table-sm">
                        <thead>
                          <tr>
                            <th scope="col">Client</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Email</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>{{ $shipment['client_name'] }}</td>
                            <td>{{ $shipment['client_phone'] }}</td>
                            <td>{{ $shipment['client_email'] }}</td>
                          </tr>
                        </tbody>
                      </table>


                      <h5 class="text-center">Product Details</h5>
                    <table class="table table-bordered table-sm">
                        <thead>
                          <tr>
                            <th scope="col">Product Description  </th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>{{ $shipment['bar_code'] }}</td>
                            <td>{{ $shipment['cod_amount'] }}</td>
                            <td>{{ $shipment['amount_ordered'] }}</td>
                          </tr>
                        </tbody>
                      </table>
                      <h5>Special Instructions</h5>
                      <hr>

                      <h5><strong>NOTE:</strong></h5> <p>Clients are requested to pay through <b> M-PESA TILL NUMBER - 625484 </b> (However cash payments will be acceptable in case to case bases) </p>

                      <hr>

                      <p>Authorizer Signature__________________           Customer Signature___________________</p>
            </div>
@endforeach

@endsection
