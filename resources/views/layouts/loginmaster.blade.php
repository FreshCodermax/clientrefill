<!DOCTYPE html>
<html lang="en">
  <head>
    <title> @yield('title') - Clientrefill</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">
    <link rel="stylesheet" href="{{URL::to('fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{URL::to('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/animate.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/sweetalert.min.css')}}" />
    <link rel="stylesheet" href="{{URL::to('fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/fl-bigmug-line.css')}}">

    <link rel="stylesheet" href="{{URL::to('css/aos.css')}}">

    <link rel="stylesheet" href="{{URL::to('css/style.css?v=1.10')}}">
	<link rel="stylesheet" href="{{URL::to('fontawesome/css/all.css')}}">

  </head>

  
  @yield('content')
  


  <script src="{{URL::to('js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{URL::to('js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{URL::to('js/jquery-ui.js')}}"></script>
  <script src="{{URL::to('js/popper.min.js')}}"></script>
  <script src="{{URL::to('js/bootstrap.min.js')}}"></script>
  <script src="{{URL::to('js/owl.carousel.min.js')}}"></script>
  <script src="{{URL::to('js/jquery.stellar.min.js')}}"></script>
  <script src="{{URL::to('js/jquery.countdown.min.js')}}"></script>
  <script src="{{URL::to('js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{URL::to('js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{URL::to('js/sweetalert.min.js')}}"></script>
  <script src="{{URL::to('js/aos.js')}}"></script>

  @yield('script')
  <script src="{{URL::to('js/main.js')}}"></script>
  {{-- <script src="controller/js/login.js"></script> --}}

  </body>
</html>