<?php
$user    = auth()->user();
$isAuth  = $user;
$isAdmin = $isAuth && $user->isAdmin;
?>
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Craft them all">
    <meta name="author" content="Craft Calc">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300i,400,400i,700%7cMarcellus+SC" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

{{--    <!-- Scripts -->--}}
{{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}


{{--    <!-- Styles -->--}}
{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}

<!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/dist/css/bootstrap.min.css' ) }}">

    <!-- FontAwesome -->
    <script defer src="{{ asset('vendor/fontawesome-free/js/all.js' ) }}"></script>
    <script defer src="{{ asset('vendor/fontawesome-free/js/v4-shims.js' ) }}"></script>

    <!-- IonIcons -->
    <link rel="stylesheet" href="{{ asset('vendor/ionicons/css/ionicons.min.css' ) }}">

    <!-- Revolution Slider -->
    <link rel="stylesheet" href="{{ asset('vendor/revolution/css/settings.css' ) }}">
    <link rel="stylesheet" href="{{ asset('vendor/revolution/css/layers.css' ) }}">
    <link rel="stylesheet" href="{{ asset('vendor/revolution/css/navigation.css' ) }}">

    <!-- Flickity -->
    <link rel="stylesheet" href="{{ asset('vendor/flickity/dist/flickity.min.css' ) }}">

    <!-- Photoswipe -->
    <link rel="stylesheet" href="{{ asset('vendor/photoswipe/dist/photoswipe.css' ) }}">
    <link rel="stylesheet" href="{{ asset('vendor/photoswipe/dist/default-skin/default-skin.css' ) }}">

    <!-- DateTimePicker -->
    <link rel="stylesheet" href="{{ asset('vendor/jquery-datetimepicker/build/jquery.datetimepicker.min.css' ) }}">

    <!-- Summernote -->
    <link rel="stylesheet" href="{{ asset('vendor/summernote/dist/summernote-bs4.css' ) }}">

    <!-- GODLIKE -->
    <link rel="stylesheet" href="{{ asset('vendor/css/godlike.css' ) }}">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('vendor/css/custom.css' ) }}">

    <style>
        .list-group-item {
            background-color: transparent;
        }
    </style>

    <!-- jQuery -->
    <script src="{{ asset('vendor/jquery/dist/jquery.min.js' ) }}"></script>
</head>

<body>
<div class="nk-preloader">
    <!--
         Preloader animation
         data-close-... data used for closing preloader
         data-open-...  data used for opening preloader
    -->
    <div class="nk-preloader-bg"
         style="background-color: #000;"
         data-close-frames="23"
         data-close-speed="1.2"
         data-close-sprites="{{ asset('vendor/images/preloader-bg.png' ) }}"
         data-open-frames="23"
         data-open-speed="1.2"
         data-open-sprites="{{ asset('vendor/images/preloader-bg-bw.png' ) }}">
    </div>

    <div class="nk-preloader-content">
        <div>
            <img class="nk-img" src="{{ asset('vendor/images/logo.png' ) }}" alt="Craft Calc - Gaming Bootstrap 4 Template" width="170">
            <div class="nk-preloader-animation"></div>
        </div>
    </div>

    <div class="nk-preloader-skip">Skip</div>
</div>

<div class="nk-page-background op-5" data-video="https://youtu.be/UkeDo1LhUqQ" data-video-loop="true" data-video-mute="true" data-video-volume="0" data-video-start-time="0" data-video-end-time="0" data-video-pause-on-page-leave="true" style="background-image: url('{{ asset('vendor/images/page-background.jpg' ) }}');"></div>

<div class="nk-page-border">
    <div class="nk-page-border-t"></div>
    <div class="nk-page-border-r"></div>
    <div class="nk-page-border-b"></div>
    <div class="nk-page-border-l"></div>
</div>

<header class="nk-header nk-header-opaque">

    @include('template-parts.global.header-main-menu')

</header>


<!--
START: Navbar Mobile

Additional Classes:
.nk-navbar-left-side
.nk-navbar-right-side
.nk-navbar-lg
.nk-navbar-overlay-content
.nk-navbar-light
.nk-navbar-no-link-effect
-->
<div id="nk-nav-mobile" class="nk-navbar nk-navbar-side nk-navbar-left-side nk-navbar-overlay-content d-lg-none">
    <div class="nano">
        <div class="nano-content">
            <a href="{{route('index')}}" class="nk-nav-logo">
                <img src="{{ asset('vendor/images/logo.png' ) }}" alt="" width="90">
            </a>
            <div class="nk-navbar-mobile-content">
                <ul class="nk-nav">
                    <!-- Here will be inserted menu from [data-mobile-menu="#nk-nav-mobile"] -->
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END: Navbar Mobile -->

<!--
START: Side Buttons
    .nk-side-buttons-visible
-->
<div class="nk-side-buttons nk-side-buttons-visible">
    <ul>
        <li class="nk-scroll-top">
            <span class="nk-btn nk-btn-lg nk-btn-icon">
                <span class="icon ion-ios-arrow-up"></span>
            </span>
        </li>
    </ul>
</div>
<!-- END: Side Buttons -->


<!--
START: Search

Additional Classes:
.nk-search-light
-->
<div class="nk-search">
    <div class="container">
        <form action="{{route('search')}}" method="get">
            @csrf
            <fieldset class="form-group nk-search-field">
                <input type="text" class="form-control" id="searchInput" placeholder="Поиск..." name="s">
                <label for="searchInput"><i class="ion-ios-search"></i></label>
            </fieldset>
        </form>
    </div>
</div>
<!-- END: Search -->
@if($errors->any())
    @foreach ($errors->all() as $error)
        <div class="nk-info-box bg-danger">
            <div class="nk-info-box-icon">
                <i class="ion-alert-circled"></i>
            </div>
            <div class="nk-info-box-close nk-info-box-close-btn">
                <i class="ion-android-close"></i>
            </div>
            {{$error}}
        </div>
    @endforeach
@endif

@if (Session::has('message'))
    <div class="nk-info-box nk-info-box-noicon">
        <div class="nk-info-box-close nk-info-box-close-btn">
            <i class="ion-android-close"></i>
        </div>
        {!! session('message') !!}
    </div>
@endif
