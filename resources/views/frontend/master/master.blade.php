<!DOCTYPE html>
<html lang="en">
@include('frontend.layouts.head')

<body>
    <div class="body-inner">

        
        <!-- Header start -->
        @include('frontend.layouts.header')
        <!--/ Header end -->


        @yield('front_main')
        

        @include('frontend.layouts.footer')
        <!-- Footer end -->


        <!-- Javascript Files
  ================================================== -->

        @include('frontend.layouts.script')

    </div><!-- Body inner end -->
</body>

</html>
