<!DOCTYPE html>
<html lang="en">

@include('backend.layouts.head');


<body>

  @include('backend.layouts.header');

  <!-- ======= Sidebar ======= -->
@include('backend.layouts.aside');

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

        @yield('main')
        </div>

  @include('backend.layouts.footer')



</body>

</html>
