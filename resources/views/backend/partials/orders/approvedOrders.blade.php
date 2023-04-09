@extends('master')
@section('main')

<h5 class="card-title text-center">All Approved Orders</h5>
      @include('backend.layouts.errorAndSuccessMessage')
    <table class="table table-striped" id="myTable">
        <thead>
            <tr>
                <th scope="col">Sl.</th>
                <th scope="col">Customer name</th>
                <th scope="col">Package</th>
                <th scope="col">Price</th>
                <th scope="col">Date</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($allOrder as $key => $data)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $data->customer->name }}</td>
                    <td>{{ $data->package->pack_name }}</td>
                    <td>{{ $data->package->pack_price }}</td>
                    <td>{{ $data->created_at }}</td>
                    <td>
                        @if ($data->payment =='accepted')
                        <p>Already Paid</p>
                        @elseif ($data->payment =='rejected')
                        @if ($data->status =='approved')
                        <a href="{{ route('orders.pending',['orderID'=>$data->id,'custID'=>$data->customer_id]) }}" class="btn btn-danger btn-sm">Reject</a>
                            
                        @endif
                        @endif
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
@endsection