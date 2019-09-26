<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>eBusiness Bootstrap Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="{{asset('/images/logo/'.$company->logo)}}" rel="icon">
    <link href="{{asset('images/apple-touch-icon.png')}}" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">
    <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/nivo-slider/css/nivo-slider.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/owl.transitions.css')}}" rel="stylesheet">
    <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/venobox/venobox.css')}}" rel="stylesheet">
    <link href="{{asset('css/nivo-slider-theme.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
</head>
<body data-spy="scroll" data-target="#navbar-example">

<div id="preloader"></div>

@include('layouts.company-header')

@yield('content')

@include('layouts.company-footer')

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>




<!-- JavaScript Libraries -->
<script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
<script src="{{asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('lib/venobox/venobox.min.js')}}"></script>
<script src="{{asset('lib/knob/jquery.knob.js')}}"></script>
<script src="{{asset('lib/wow/wow.min.js')}}"></script>
<script src="{{asset('lib/parallax/parallax.js')}}"></script>
<script src="{{asset('lib/easing/easing.min.js')}}"></script>
<script src="{{asset('lib/nivo-slider/js/jquery.nivo.slider.js')}}" type="text/javascript"></script>
<script src="{{asset('lib/appear/jquery.appear.js')}}"></script>
<script src="{{asset('lib/isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('contactform/contactform.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="https://kit.fontawesome.com/4c1d45c666.js" crossorigin="anonymous"></script>

</body>
