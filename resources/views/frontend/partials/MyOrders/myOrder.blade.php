@extends('frontend.master.master')
@section('front_main')
    <div id="banner-area" class="banner-area" style="background-image:url(front_ui/images/banner/banner1.jpg)">
        <div class="banner-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-heading">
                            <h1 class="banner-title">My Orders</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                                </ol>
                            </nav>
                        </div>
                    </div><!-- Col end -->
                </div><!-- Row end -->
            </div><!-- Container end -->
        </div><!-- Banner text end -->
    </div>
    <div class="col-12">
        <div class="col-6 text-center" style="margin: auto">
            @include('frontend.layouts.errorAndSuccessMessage')
        </div>
    </div>
    <div class="container py-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">package name</th>
                    <th scope="col">Price/month</th>
                    <th scope="col">Order Date</th>
                    <th scope="col">Payment Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            {{-- @dd($myOrders) --}}
            <tbody>
                @foreach ($myOrders as $key=> $item)
                <tr>
                    <th scope="row">{{ $key+1 }}</th>
                    <td>{{ $item->package->pack_name }}</td>
                    <td>{{ $item->package->pack_price }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>

                       @if ($item->status == 'pending')
                        <p>wait for the aprovance</p> 
                       @else
                       @if ($item->payment == 'rejected')
                       <a href="{{ route('orderPayment',$item->id) }}" class="btn btn-sm btn-primary">pay</a>
                   @else
                       <p class="text-primary">Payment {{ ucfirst($item->payment) }}</p>
                   @endif 
                       @endif
                    </td>
                    <td><a href="{{ route('viewSingleOrder',$item->customer_id) }}" class="btn btn-success">view</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
   


@endsection
