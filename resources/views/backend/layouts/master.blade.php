<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Home One &#8211; The Mirror</title>
    <!-- plugins:css -->
   <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/ionicons/dist/css/ionicons.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.addons.css')}}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    {{-- <link rel="stylesheet" href="assets/css/shared/style.css"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/shared/style.css') }}">
    <!-- endinject -->
    <!-- Layout styles -->
    {{-- <link rel="stylesheet" href="assets/css/demo_1/style.css"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/demo_1/style.css') }}">
    <!-- End Layout styles -->
{{--     <link rel="shortcut icon" href="assets/images/favicon.ico" /> --}}

  

  </head>


  <body>

  <div class="container-scroller">




    @include('backend.partials.nav')  
      

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">


      @include('backend.partials.left-sidebar')  


      @yield('content')

   {{--  eita footer check korar jonne --}}
   {{-- @include('frontend.partials.footer') --}}

    </div>
    <!-- page-body-wrapper ends -->
  </div>


  <!-- container-scroller -->
  <!-- plugins:js -->

    <script src="{{ asset('assets/js/jquery-3.2.1.slim.min.js') }}"></script>
  <script src="{{ asset('assets/js/popper.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/datatables.min.js') }}"></script>

  <script>
    $(document).ready(function() {
    $('#dataTable').DataTable();
} );
  </script>


  <!-- Custom js for this page-->

  <script src="{{ asset('assets/js/demo_1/dashboard.js') }}"></script>
  <script src="{{ asset('assets/js/chart.js') }}"> </script>
  <script src="{{ asset('assets/js/dashboard.js') }}"> </script>

  <!-- End custom js for this page-->
  <script src="{{ asset('assets/js/jquery.cookie.js') }}" type="text/javascript"></script>


  </body>
</html>