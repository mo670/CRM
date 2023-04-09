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
                <h2 class="into-title badge badge-success">Message to Admin</h2>

            </div><!-- Intro box end -->

            <div class="gap-20"></div>
            <form action="{{ route('messageSend') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="ts-service-box">
                            {{-- <span class="ts-service-icon">
                                <i class="fas fa-trophy"></i>
                            </span> --}}
                            <input type="hidden" name="customer_id" value="{{ $cust_info->user_id }}">
                            <div class="ts-service-box-content">
                                <h3 class="service-box-title">Customer : </h3>
                                <input type="text" name="customer_message" placeholder="type your message">
                            </div>
                        </div><!-- Service 1 end -->
                    </div><!-- col end -->

                    <div class="col-md-6">
                        <div class="ts-service-box">

                            <div class="ts-service-box-content">
                                <h3 class="service-box-title">Subject : </h3>
                                <input type="text" name="subject" placeholder="type your subject">
                            </div>
                        </div><!-- Service 2 end -->
                    </div><!-- col end -->
                    <div style="margin: auto; margin-bottom: 15px">
                        <button type="submit" class="btn btn-info mb-4">send</button>
                    </div>
                </div>
            </form>
            <div class="border-bottom"></div>
            @if ($msg == !null)
                <div class="text-center mb-5">
                    Subject : <h5><u>{{ $msg->subject }}</u></h5>
                </div>
            @else
                <p>no subject</p>
            @endif

            <div class="row">

                <div class="col-md-6">
                    <div class="ts-service-box">
                        <span class="ts-service-icon">
                            <i class="fas fa-user"></i>
                        </span>
                        @if ($msg == !null)
                            <div class="ts-service-box-content">
                                <h3 class="service-box-title">Your Messeage :</h3>
                                <p>{{ $msg->customer_message }}</p>
                            </div>
                        @else
                            <p>no message</p>
                        @endif

                    </div><!-- Service 1 end -->
                </div><!-- col end -->

                <div class="col-md-6">
                    <div class="ts-service-box">
                        <span class="ts-service-icon">
                            <i class="fas fa-user"></i>
                        </span>
                        @if ($msg == !null)
                            <div class="ts-service-box-content">
                                <h3 class="service-box-title">Admin Messeage :</h3>
                                <p>{{ $msg->admin_message }}</p>
                            </div>
                        @else
                            <p>no message</p>
                        @endif
                    </div><!-- Service 2 end -->
                </div><!-- col end -->
            </div><!-- Content row 1 end -->

        </div>
        <div class="text-right">
            <button type="button" class="btn btn-info m-3" onclick="printDiv('printableArea')"
                value="print a div!">Print</button>

        </div>
    </div>
@endsection
