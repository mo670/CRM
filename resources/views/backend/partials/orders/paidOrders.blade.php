@extends('master')
@section('main')

<h5 class="card-title text-center">All Paid Orders</h5>
      @include('backend.layouts.errorAndSuccessMessage')
    <table class="table table-striped" id="myTable">
        <thead>
            <tr>
                <th scope="col">Sl.</th>
                <th scope="col">Customer name</th>
                <th scope="col">Package</th>
                <th scope="col">Price</th>
                <th scope="col">Payment</th>
                <th scope="col">Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($allPaidOrder as $key => $data)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $data->customer->name }}</td>
                    <td>{{ $data->package->pack_name }}</td>
                    <td>{{ $data->payment }}</td>
                    <td>{{ $data->package->pack_price }}</td>
                    <td>{{ $data->created_at }}</td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
    
@endsection