@extends('master')
@section('main')
    <h5 class="card-title text-center">All Packages</h5>
      @include('backend.layouts.errorAndSuccessMessage')
    <table class="table table-striped" id="myTable">
        <thead>
            <tr>
                <th scope="col">Sl.</th>
                <th scope="col">Pack name</th>
                <th scope="col">Pack price</th>
                <th scope="col">Pack amount</th>
                <th scope="col">Pack description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($allPackage as $key => $data)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $data->pack_name }}</td>
                    <td>{{ $data->pack_price }}</td>
                    <td>{{ $data->pack_amount }}</td>
                    <td>{{ $data->pack_description }}</td>
                    <td>
                        <a href="{{ route('package.edit', $data->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{ route('package.delete', $data->id) }}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
