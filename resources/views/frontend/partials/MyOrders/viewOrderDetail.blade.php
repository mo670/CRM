@extends('frontend.master.master')
@section('front_main')
    <div class="col-12">
        <div class="col-6 text-center" style="margin: auto">
            @include('frontend.layouts.errorAndSuccessMessage')
        </div>
    </div>
    {{-- @dd($singleOrder) --}}
    <div class="col-12">
        
        <div class="col-lg-6  text-center my-5" style="margin: auto" id="printableArea">
            <div class="ts-intro">

                @if ($singleOrder->payment == 'accepted')
                    <h2 class="into-title badge badge-success">Payment Status: {{ $singleOrder->payment }}</h2>
                @else
                    <h2 class="into-title badge badge-danger">Payment Status : {{ $singleOrder->payment }}</h2>
                    <p>Please pay your Order for farther proccess</p>
                @endif
                <h3 class="into-sub-title">Package : {{ $singleOrder->package->pack_name }}</h3>

            </div><!-- Intro box end -->

            <div class="gap-20"></div>

            <div class="row">
                <div class="col-md-6">
                    <div class="ts-service-box">
                        {{-- <span class="ts-service-icon">
                            <i class="fas fa-trophy"></i>
                        </span> --}}
                        <div class="ts-service-box-content">
                            <h3 class="service-box-title">Price :  </h3>
                            {{ $singleOrder->package->pack_price }}
                        </div>
                    </div><!-- Service 1 end -->
                </div><!-- col end -->

                <div class="col-md-6">
                    <div class="ts-service-box">
                        
                        <div class="ts-service-box-content">
                            <h3 class="service-box-title">Order Date : </h3>
                            {{ $singleOrder->created_at }}
                        </div>
                    </div><!-- Service 2 end -->
                </div><!-- col end -->
            </div><!-- Content row 1 end -->

            {{-- <div class="row">
            <div class="col-md-6">
              <div class="ts-service-box">
                  <span class="ts-service-icon">
                    <i class="fas fa-thumbs-up"></i>
                  </span>
                  <div class="ts-service-box-content">
                    <h3 class="service-box-title">Guided by Commitment</h3>
                  </div>
              </div><!-- Service 1 end -->
            </div><!-- col end -->

            <div class="col-md-6">
              <div class="ts-service-box">
                  <span class="ts-service-icon">
                    <i class="fas fa-users"></i>
                  </span>
                  <div class="ts-service-box-content">
                    <h3 class="service-box-title">A Team of Professionals</h3>
                  </div>
              </div><!-- Service 2 end -->
            </div><!-- col end -->
             </div><!-- Content row 1 end --> --}}
             <h3>Package Description:</h3>
            <p>{{ $singleOrder->package->pack_description }}</p>
        </div>
        <div class="text-right">
        <button type="button" class="btn btn-info m-5"  onclick="printDiv('printableArea')" value="print a div!">Print</button>

        </div>
    </div>
@endsection
