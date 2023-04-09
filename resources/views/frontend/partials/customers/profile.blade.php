@extends('frontend.master.master')
@section('front_main')
<div id="banner-area" class="banner-area" style="background-image:url(front_ui/images/banner/banner1.jpg)">
    <div class="banner-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-heading">
                        <h1 class="banner-title">{{ $profile->name }}</h1>
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

<div class="col-md-12 my-4">
    <h3 class="column-title text-center">Profile Information</h3>
    <form id="contact-form" class="ml-5" action="{{ route('profile-update',$profile->user_id) }}" method="post" enctype="multipart/form-data" role="form">
        @csrf
        <div class="row">
           
            <div class="col-md-6">
                <div class="form-group">
                    <label>Name</label>
                    <input class="form-control form-control-name" name="name" value="{{ $profile->name }}" placeholder="John Doe"
                        type="text" required="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>About</label>
                    <input class="form-control form-control" name="about" value="{{ $profile->about }}" placeholder="About me"
                        type="text" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Company</label>
                    <input class="form-control form-control" name="company" value="{{ $profile->company }}" placeholder="My Company"
                        type="text" required="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Mobile</label>
                    <input class="form-control form-control" name="mobile" value="{{ $profile->mobile }}" placeholder="016xxxxxx"
                        type="number" required="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Address</label>
                    <input class="form-control form-control" name="address" value="{{ $profile->address }}" placeholder="gulshan,Dhaka"
                        type="text" required="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Twitter Profile link</label>
                    <input class="form-control form-control" name="t_profile" value="{{ $profile->t_profile }}"  placeholder="twitter.com"
                        type="text" required="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Facebook Profile link</label>
                    <input class="form-control form-control" name="f_profile" value="{{ $profile->f_profile }}"  placeholder="facebook.com"
                        type="text" required="">
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
            <button class="btn btn-primary solid blank" type="submit">Update</button>
        </div>
    </form>
</div>
    
@endsection