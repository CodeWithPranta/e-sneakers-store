<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Shome - Shoes eCommerce Website Template"/>
    <meta name="keywords" content="footwear, shoes, modern, shop, store, ecommerce, responsive, e-commerce"/>
    <meta name="author" content="codecarnival"/>

    <title>Sneakers - Shoes eCommerce Website Template</title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400;1,500&display=swap" rel="stylesheet">

    <!--== Bootstrap CSS ==-->
    <link href="{{asset('frontend/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <!--== Font Awesome Min Icon CSS ==-->
    <link href="{{asset('frontend/assets/css/font-awesome.min.css')}}" rel="stylesheet" />
    <!--== Pe7 Stroke Icon CSS ==-->
    <link href="{{asset('frontend/assets/css/pe-icon-7-stroke.css')}}" rel="stylesheet" />
    <!--== Swiper CSS ==-->
    <link href="{{asset('frontend/assets/css/swiper.min.css')}}" rel="stylesheet" />
    <!--== Fancybox Min CSS ==-->
    <link href="{{asset('frontend/assets/css/fancybox.min.css')}}" rel="stylesheet" />
    <!--== Aos Min CSS ==-->
    <link href="{{asset('frontend/assets/css/aos.min.css')}}" rel="stylesheet" />

    <!--== Main Style CSS ==-->
    <link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet" />

    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
    <![endif]-->
</head>

<body>

<!--wrapper start-->
<div class="wrapper">

  <!--== Start Header Wrapper ==-->
  @include('partials._header')
  <!--== End Header Wrapper ==-->

  @yield('content')

  <!--== Start Footer Area Wrapper ==-->
  @include('partials._footer')
  <!--== End Footer Area Wrapper ==-->

  <!--== Scroll Top Button ==-->
  <div id="scroll-to-top" class="scroll-to-top"><span class="fa fa-angle-up"></span></div>

  <!--== Start Quick View Menu ==-->
  @include('partials._quick_view_menu')
  <!--== End Quick View Menu ==-->

  <!--== Start Aside Cart Menu ==-->
  @include('partials._aside_cart_menu')
  <!--== End Aside Cart Menu ==-->

  <!--== Start Aside Search Menu ==-->
  @include('partials._aside_search_menu')
  <!--== End Aside Search Menu ==-->

  <!--== Start Side Menu ==-->
  @include('partials._side_menu')
  <!--== End Side Menu ==-->

</div>

<!--=======================Javascript============================-->

<!--=== jQuery Modernizr Min Js ===-->
<script src="{{asset('frontend/assets/js/modernizr.js')}}"></script>
<!--=== jQuery Min Js ===-->
<script src="{{asset('frontend/assets/js/jquery-main.js')}}"></script>
<!--=== jQuery Migration Min Js ===-->
<script src="{{asset('frontend/assets/js/jquery-migrate.js')}}"></script>
<!--=== jQuery Popper Min Js ===-->
<script src="{{asset('frontend/assets/js/popper.min.js')}}"></script>
<!--=== jQuery Bootstrap Min Js ===-->
<script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
<!--=== jQuery Ui Min Js ===-->
<script src="{{asset('frontend/assets/js/jquery-ui.min.js')}}"></script>
<!--=== jQuery Swiper Min Js ===-->
<script src="{{asset('frontend/assets/js/swiper.min.js')}}"></script>
<!--=== jQuery Fancybox Min Js ===-->
<script src="{{asset('frontend/assets/js/fancybox.min.js')}}"></script>
<!--=== jQuery Waypoint Js ===-->
<script src="{{asset('frontend/assets/js/waypoint.js')}}"></script>
<!--=== jQuery Parallax Min Js ===-->
<script src="{{asset('frontend/assets/js/parallax.min.js')}}"></script>
<!--=== jQuery Aos Min Js ===-->
<script src="{{asset('frontend/assets/js/aos.min.js')}}"></script>

<!--=== jQuery Custom Js ===-->
<script src="{{asset('frontend/assets/js/custom.js')}}"></script>

</body>

</html>
