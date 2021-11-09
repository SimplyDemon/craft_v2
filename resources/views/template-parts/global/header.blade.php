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

    <title>{{ config('app.name', 'Craft Calc') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


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
         data-close-sprites="{{ asset('images/preloader-bg.png' ) }}"
         data-open-frames="23"
         data-open-speed="1.2"
         data-open-sprites="{{ asset('images/preloader-bg-bw.png' ) }}">
    </div>

    <div class="nk-preloader-content">
        <div>
            <img class="nk-img" src="{{ asset('images/logo.png' ) }}" alt="Craft Calc - Gaming Bootstrap 4 Template" width="170">
            <div class="nk-preloader-animation"></div>
        </div>
    </div>

    <div class="nk-preloader-skip">Skip</div>
</div>

<div class="nk-page-background op-5" data-video="https://youtu.be/UkeDo1LhUqQ" data-video-loop="true" data-video-mute="true" data-video-volume="0" data-video-start-time="0" data-video-end-time="0" data-video-pause-on-page-leave="true" style="background-image: url('{{ asset('images/page-background.jpg' ) }}');"></div>

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
                <img src="{{ asset('images/logo.png' ) }}" alt="" width="90">
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
