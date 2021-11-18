<?php
$user    = auth()->user();
$isAuth  = $user;
$isAdmin = $isAuth && $user->isAdmin;
if ( ! isset( $_SESSION ) ) {
    session_start();
}
$isActivateFirstTimeAnimation     = ! isset( $_SESSION['isAnimationWasShowed'] );
$isEnableAnimation                = ( $isAuth && $user->isEnableAnimation ) || $isActivateFirstTimeAnimation;
$_SESSION['isAnimationWasShowed'] = true;
?>
    <!DOCTYPE html>
<html lang="ru-RU">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Craft Calc">

    <title>Craft Calc Asterios @yield('title','')</title>
    <meta name="keywords" content="@yield('meta_keywords','крафт крафта крафтинг калькулятор кальк астериос asterios calculator craft calc crafting')">
    <meta name="description" content="@yield('meta_description','Craft calculator for server Asterios. Калькулятор крафта для сервера Астериос.')">
    <meta name="author" content="Craft Calc">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <link rel="canonical" href="{{route('index')}}" />
    @if (Route::is('index'))
        <link rel="canonical" href="{{route('recipes.index')}}" />
    @endif
</head>

<body>
@if($isEnableAnimation)
    <div class="nk-preloader">
    <div class="nk-preloader-bg"
         style="background-color: #000;"
         data-close-frames="23"
         data-close-speed="1.2"
         data-close-sprites="{{ asset('images/preloader-bg.webp' ) }}"
         data-open-frames="23"
         data-open-speed="1.2"
         data-open-sprites="{{ asset('images/preloader-bg-bw.webp' ) }}">
    </div>

    <div class="nk-preloader-content">
        <div>
            <img class="nk-img" src="{{ asset('images/logo.webp' ) }}" alt="Craft Calc - Gaming Bootstrap 4 Template" width="170">
            <div class="nk-preloader-animation"></div>
        </div>
    </div>

</div>

<div class="nk-page-background op-5" data-video="https://youtu.be/UkeDo1LhUqQ" data-video-loop="true" data-video-mute="true" data-video-volume="0" data-video-start-time="0" data-video-end-time="0" data-video-pause-on-page-leave="true" style="background-image: url('{{ asset('images/page-background.webp' ) }}');"></div>
@endif

<div class="nk-page-border">
    <div class="nk-page-border-t"></div>
    <div class="nk-page-border-r"></div>
    <div class="nk-page-border-b"></div>
    <div class="nk-page-border-l"></div>
</div>

<header class="nk-header nk-header-opaque">
    @include('template-parts.global.header-main-menu')
</header>

<nav class="nk-navbar nk-navbar-side nk-navbar-right-side nk-navbar-lg nk-navbar-align-center nk-navbar-overlay-content" id="nk-side">

    <div class="nano">
        <div class="nano-content">
            <div class="nk-nav-table">

                <div class="nk-nav-row">
                    <a href="{{route('index')}}" class="nk-nav-logo">
                        <img src="{{ asset('images/logo.webp' ) }}" alt="logo" width="150">
                    </a>
                </div>

            </div>
        </div>
    </div>
</nav>

<div id="nk-nav-mobile" class="nk-navbar nk-navbar-side nk-navbar-left-side nk-navbar-overlay-content d-lg-none">
    <div class="nano">
        <div class="nano-content">
            <a href="{{route('index')}}" class="nk-nav-logo">
                <img src="{{ asset('images/logo.webp' ) }}" alt="" width="90">
            </a>
            <div class="nk-navbar-mobile-content">
                <ul class="nk-nav">
                    <!-- Here will be inserted menu from [data-mobile-menu="#nk-nav-mobile"] -->
                </ul>
            </div>
        </div>
    </div>
</div>

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
