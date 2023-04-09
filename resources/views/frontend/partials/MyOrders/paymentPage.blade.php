@extends('frontend.master.master')
@section('front_main')


<div class="col-12">
    <div class="col-6 text-center" style="margin: auto">
        @include('frontend.layouts.errorAndSuccessMessage')
    </div>
</div>

<div class="container py-5">
    {{-- @dd($authID) --}}
        <div class="col-md-6 p-0" style="margin: auto">
            @php
                $cust= App\Models\Customer::where('user_id',$authID)->first()
            @endphp
            <form action="{{ route('makepayment',['cust_id'=>$cust->user_id,'order_id'=>$myOrders->id]) }}" style="background:#D9EDF7;">
                
                <input type="hidden" name="customer_id" value="{{ $cust->user_id }}">
                <input type="hidden" name="order_id" value="{{ $myOrders->id }}">
                <input type="hidden" name="tottalPrice" value="{{ $myOrders->package->pack_price }}">
                <div class="form-row m-0" style="background:#D9EDF7;">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Bill to: <h4>{{ App\Models\Customer::where('user_id',$authID)->pluck('name')->first() }}</h4></label>
                    
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Package : <h4>{{ $myOrders->package->pack_name }}</h4></label>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputPassword4">Date : <h4>{{ date('d-m-Y') }}</h4></label>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Price : <h4>{{ $myOrders->package->pack_price }}</h4></label>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="">Payment Type:</label>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline1" name="paymentGetway" value="bkash" required class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline1">Bkash</label>
                          </div>
                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline2" name="paymentGetway" value="cash" required class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline2">Cash</label>
                          </div>
                    </div>

                </div>
                <div class="alert alert-info">
                    <p>01. Go to your bKash Mobile Menu by dialing <strong>*247#</strong></p>
                    <p>02. Choose <strong>"Cash Out"</strong></p>
                    <p>02. Choose <strong>"From Agent"</strong></p>
                    <p>03. Enter the bKash Agent Number <strong>0197 883 8878</strong></p>
                    <p>04. Enter the amount <strong class="bkash-amount">{{ $myOrders->package->pack_price }}</strong></p>
                    <p>05. Now enter your bKash Mobile Menu PIN to confirm the transaction</p>
                    <p>Done! You'll receive a transaction id. Fill it below</p>
                    <img src="{{ asset('front_ui/bkash/bkash-payment-system.png') }}" class="img-fluid" alt="" srcset="">
                </div>
                
                <div class="text-center">
                <button type="submit" class="btn btn-primary mb-4">Pay</button>

                </div>
              </form>
        </div>
    
</div>

    
@endsection