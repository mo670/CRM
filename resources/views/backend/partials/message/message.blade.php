@extends('master')
@section('main')

<h5 class="card-title text-center">All New Messages</h5>
      @include('backend.layouts.errorAndSuccessMessage')
    <table class="table table-striped" id="myTable">
        <thead>
            <tr>
                <th scope="col">Sl.</th>
                <th scope="col">Customer name</th>
                <th scope="col">Subject</th>
                <th scope="col">Date</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($allmsg as $key => $data)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $data->customer->name }}</td>
                    <td>{{ $data->subject }}</td>
                    <td>{{ $data->updated_at }}</td>
                    <td>
                        <a href="{{ route('view.message',$data->customer_id) }}" class="btn btn-primary btn-sm">Reply</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
@endsection