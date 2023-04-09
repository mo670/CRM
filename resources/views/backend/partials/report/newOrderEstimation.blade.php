@extends('master')
@section('main')
    <div class="col-lg-12">

        <div class="card">
            <div class="card-body">

                <h5 class="card-title text-center">All New Orders</h5>
                @include('backend.layouts.errorAndSuccessMessage')



                <div class="col-lg-12 mb-4">
                    <form action="{{ route('generateRewOrderReport') }}" method="get">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">From Date</label>
                                <input value="{{ $fromDate }}" id="from" type="date" class="form-control" name="from_date">
                            </div>
                            <div class="col-md-6">
                                <label for="">To Date</label>
                                <input value="{{ $toDate }}" id="to" type="date" class="form-control" name="to_date">
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-sm mt-3">Generate</button>
                        
                    </form>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-6">
                            @if ($fromDate ==!null && $toDate ==!null)
                            <p> Showing Result : <h4>{{ $fromDate }}  To  {{ $toDate }}</h4></p>
            
                            @else
                                
                            @endif
                        </div>
                        <div class="col-md-6">
                            <div class="text-end m-4">
                                <button type="button" class="btn btn-sm btn-warning" onclick="printDiv('printableArea')"
                                value="print a div!"><i class="bi bi-printer" style="font-size: 30px"></i></button>
                            </div>
                            
                        </div>
                    </div>
                </div>
               
                <div id="printableArea">
                    <table class="table table-striped" id="myTable">
                        <thead>
                        
                            <tr>
                                <th scope="col">Sl.</th>
                                <th scope="col">Customer name</th>
                                <th scope="col">Package</th>
                                <th scope="col">Price</th>
                                <th scope="col">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allnewOrder as $key => $data)
                                <tr>
                                    <th scope="row">{{ $key + 1 }}</th>
                                    <td>{{ $data->customer->name }}</td>
                                    <td>{{ $data->package->pack_name }}</td>
                                    <td>{{ $data->package->pack_price }}</td>
                                    <td>{{ $data->created_at }}</td>
                                
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
