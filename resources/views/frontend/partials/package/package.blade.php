@extends('frontend.master.master')
@section('front_main')
<div id="banner-area" class="banner-area" style="background-image:url(front_ui/images/banner/banner1.jpg)">
    <div class="banner-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-heading">
                        <h1 class="banner-title">Packages</h1>
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
    <div class="col-6 text-center"  style="margin: auto" >
       @include('frontend.layouts.errorAndSuccessMessage')
    </div>
</div>
<section id="main-container" class="main-container">
    <div class="container">
      <div class="row text-center">
        <div class="col-12">
          <h2 class="section-title">Grab the Packages</h2>
          <h3 class="section-sub-title">Pricing</h3>
        </div>
      </div>
      <!--/ Title row end -->
  
      <div class="row">
  
        @foreach ($pac as  $item)
        
        <div class="col-lg-4 col-md-6">
            <div class="ts-pricing-box">
              <div class="ts-pricing-header">
                <h2 class="ts-pricing-name">{{ $item->pack_name }}</h2>
                {{-- <h2 class="ts-pricing-price">
                    <span class="currency">Amount-</span><strong>{{ $item->pack_amount }}</strong>
                  </h2> --}}
                <h2 class="ts-pricing-price">
                  <span class="currency">BDT-</span><strong>{{ $item->pack_price }}</strong><small>/Month</small>
                </h2>
              </div><!-- Pricing header -->
              <div class="ts-pricing-features">
                <ul class="list-unstyled">
                  <li>{{ $item->pack_description }}</li>
                 
                </ul>
              </div><!-- Features end -->
            
              
              @auth
              @php
                  $authID = App\Models\User::where('id',Auth::user()->id)->pluck('id')->first();
              @endphp
              <div class="plan-action">
                <a href="{{ route('order',['cus_id'=>$authID,'pack_id'=>$item->id]) }}" class="btn btn-dark">Order Now</a>
              </div>
              @else
              <div class="plan-action">
                <a href="{{ route('login') }}" class="btn btn-dark">Login First!</a>
              </div>
              @endauth
              
            </div><!-- Plan 1 end -->
          </div><!-- Col end -->
        @endforeach
        
  
       
      </div>
      <!--/ Content row end -->
  
    </div><!-- Conatiner end -->
  </section>
    
@endsection