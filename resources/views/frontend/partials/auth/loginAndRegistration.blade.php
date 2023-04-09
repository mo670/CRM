@extends('frontend.master.master')
@section('front_main')
    <div id="banner-area" class="banner-area" style="background-image:url(front_ui/images/banner/banner1.jpg)">
        <div class="banner-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-heading">
                            <h1 class="banner-title">Login</h1>
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
    <div>
        
        <div class="col-12">
            <div class="col-6 text-center"  style="margin: auto" >
               @include('frontend.layouts.errorAndSuccessMessage')
            </div>
        </div>

    </div>
    <div class="row my-5">
        <div class="col-md-7 ">
            <h3 class="column-title text-center">Registration</h3>
            <form id="contact-form" class="ml-5" action="{{ route('register') }}" method="post" enctype="multipart/form-data" role="form">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control form-control-name" name="email" id="name" placeholder="customer@gmail.com"
                                type="email" required="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control form-control-name" name="name" id="name" placeholder="John Doe"
                                type="text" required="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Mobile</label>
                            <input class="form-control form-control" name="mobile" id="email" placeholder="016xxxxxx"
                                type="number" required="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Address</label>
                            <input class="form-control form-control" name="address" id="address" placeholder="gulshan,Dhaka"
                                type="text" required="">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control form-control-email" name="password" id="email" placeholder="password"
                                type="password" required="">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Profile Picture</label>
                            <input class="form-control form-control" name="image" id="image" 
                                type="file" required>
                        </div>
                    </div>
                </div>
                
                <div class="text-center"><br>
                    <button class="btn btn-primary solid blank" type="submit">Registration</button>
                </div>
            </form>
        </div>

        <div class="col-md-5">
            <h3 class="column-title text-center">Login</h3>
            <!-- contact form works with formspree.io  -->
            <!-- contact form activation doc: https://docs.themefisher.com/constra/contact-form/ -->
            <form id="contact-form"  action="{{ route('loginSubmit') }}" method="post" role="form">
                @csrf
                <div class="error-container"></div>
                
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control form-control-name" name="email" id="email" placeholder="customer@gmail.com"
                                type="email" required="">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control form-control-name" name="password" id="password" placeholder=""
                                type="password" required="">
                        </div>
                    </div>
                
                <div class="text-center"><br>
                    <button class="btn btn-primary solid blank" type="submit">login</button>
                </div>
            </form>
        </div>
    </div>
@endsection
