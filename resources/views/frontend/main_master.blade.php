<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Home :: Rajpati Associates</title>
<!-- Stylesheets -->
<link href="{{ asset('frontend/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/css/responsive.css') }}" rel="stylesheet">

<link href="../css2?family=Bellefair&amp;family=Open+Sans:wght@300;400;700;800&amp;family=Oswald:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

<link rel="shortcut icon" href="{{ asset('frontend/images/favicon.png') }}" type="image/x-icon">
<link rel="icon" href="{{ asset('frontend/images/favicon.png') }}" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body class="hidden-bar-wrapper">

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
<!-- Main Header-->
@include('frontend.body.header')
<!-- End Main Header -->
	
<!-- Main Content -->
@yield('content')
<!-- Main Content -->
	
<!-- Main Footer -->
@include('frontend.body.footer')
<!--Maien Footer -->
   
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

<script src="{{ asset('frontend/js/jquery.js') }}"></script>
<script src="{{ asset('frontend/js/popper.min.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('frontend/js/appear.js') }}"></script>
<script src="{{ asset('frontend/js/parallax.min.js') }}"></script>
<script src="{{ asset('frontend/js/tilt.jquery.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.paroller.min.js') }}"></script>
<script src="{{ asset('frontend/js/owl.js') }}"></script>
<script src="{{ asset('frontend/js/wow.js') }}"></script>
<script src="{{ asset('frontend/js/nav-tool.js') }}"></script>
<script src="{{ asset('frontend/js/jquery-ui.js') }}"></script>
<script src="{{ asset('frontend/js/script.js') }}"></script>

</body>


</html>