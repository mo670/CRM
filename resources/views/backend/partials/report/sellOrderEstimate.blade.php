@extends('master')
@section('main')
    <div class="col-lg-12">

        <div class="card">
            <div class="card-body">

                <h5 class="card-title text-center">All New Orders</h5>
                @include('backend.layouts.errorAndSuccessMessage')



                <div class="col-lg-12 mb-4">
                    <form action="{{ route('generateSellOrderReport') }}" method="get">
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
                <div id="printableArea">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-6">
                                @if ($fromDate ==!null && $toDate ==!null)
                                <p> Showing Result : <h4>{{ $fromDate }}  To  {{ $toDate }}</h4></p>
                
                                @else
                                    
                                @endif
                            <h4> Total Sell = BDT-{{ $sum }}</h4>
                            </div>
                            <div class="col-md-6">
                                <div class="text-end m-4">
                                    <button type="button" class="btn btn-sm btn-warning" onclick="printDiv('printableArea')"
                                    value="print a div!"><i class="bi bi-printer" style="font-size: 30px"></i></button>
                                </div>
                                
                            </div>
                        </div>
                    </div>
               
                
                    <table class="table table-striped" id="myTable">
                        <thead>
                        
                            <tr>
                                <th scope="col">Sl.</th>
                                <th scope="col">InvoiceID</th>
                                <th scope="col">Customer name</th>
                                <th scope="col">Package</th>
                                <th scope="col">Price</th>
                                <th scope="col">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allsellOrder as $key => $data)
                                <tr>
                                    <th scope="row">{{ $key + 1 }}</th>
                                    <td>{{ $data->invoiceNumber }}</td>
                                    <td>{{ $data->customer->name }}</td>
                                    @php
                                        $pack_name = App\Models\Package::where('id', $data->order->package_id)->pluck('pack_name')->first()
                                    @endphp
                                    <td>{{ $pack_name }}</td>
                                    <td>{{ $data->tottalPrice }}</td>
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
