@extends('master')
@section('main')
<h5 class="card-title">All Customer List</h5>
{{-- @dd($allCustomer) --}}



<!-- Table with stripped rows -->
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">FacebooK</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
@foreach ($allCustomer as $key=>$data )

<tr>
    <th scope="row">{{$key+1}}</th>
    <td>{{$data->name}}</td>
    <td>{{$data->email}}</td>
    <td>{{$data->phone}}</td>
    <td>{{$data->facebook}}</td>


    <td>
        <a href="{{ route('seeOrders',$data->user_id) }}" class="btn btn-warning btn-sm" >Paid Orders</a>
        <a href="{{route('customer.delete',$data->id)}}" class="btn btn-danger btn-sm">Delete</a>
    </td>


  </tr>



@endforeach


  </tbody>
</table>
<!-- End Table with stripped rows -->

@endsection
