@extends('master')
@section('main')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center">Paid Orders</h5>
                @include('backend.layouts.errorAndSuccessMessage')
                <div id="printableArea">
                    <table class="table table-striped" id="myTable">
                        <thead>
                            <tr>
                                <th scope="col">Sl.</th>
                                <th scope="col">Invoice-ID</th>
                                <th scope="col">Package</th>
                                <th scope="col">Price</th>
                                <th scope="col">Payment</th>
                                <th scope="col">Payment Type</th>
                                <th scope="col">Payment Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order as $key => $data)
                                @php
                                    $package_name = App\Models\Package::where('id',$data->package_id)->pluck('pack_name')->first();
                                @endphp
                                <tr>
                                    <th scope="row">{{ $key + 1 }}</th>
                                    <td>{{ $data->invoice->invoiceNumber }}</td>
                                    <td>{{ $package_name }}</td>
                                    <td>{{ $data->invoice->tottalPrice }}</td>
                                    <td>{{ $data->payment}}</td>
                                    <td>{{ $data->invoice->paymentGetway}}</td>
                                    <td>{{ $data->invoice->created_at}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
