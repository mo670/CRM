<!-- initialize jQuery Library -->
<script src="{{ asset('front_ui/plugins/jQuery/jquery.min.js') }}"></script>
<!-- Bootstrap jQuery -->
<script src="{{ asset('front_ui/plugins/bootstrap/bootstrap.min.js') }}" defer></script>
<!-- Slick Carousel -->
<script src="{{ asset('front_ui/plugins/slick/slick.min.js') }}"></script>
<script src="{{ asset('front_ui/plugins/slick/slick-animation.min.js') }}"></script>
<!-- Color box -->
<script src="{{ asset('front_ui/plugins/colorbox/jquery.colorbox.js') }}"></script>
<!-- shuffle -->
<script src="{{ asset('front_ui/plugins/shuffle/shuffle.min.js') }}" defer></script>


<!-- Google Map API Key-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
<!-- Google Map Plugin-->
<script src="{{ asset('front_ui/plugins/google-map/map.js') }}" defer></script>

<!-- Template custom -->
<script src="{{ asset('front_ui/js/script.js') }}"></script>

    <script>
    setTimeout(function() {
        $('#alert').slideUp();
    }, 4000);
</script>
<script>
    function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
