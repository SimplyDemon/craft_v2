<?php
$user    = auth()->user();
$isAuth  = $user;
$isAdmin = $isAuth && $user->isAdmin;
if ( ! isset( $_SESSION ) ) {
    session_start();
}
$agent    = new \Jenssegers\Agent\Agent();
$isMobile = $agent->isMobile();

$isActivateFirstTimeAnimation     = ! isset( $_SESSION['isAnimationWasShowed'] );
$isEnableAnimation                = ( $isAuth && $user->isEnableAnimation ) || ( $isActivateFirstTimeAnimation && ! $isMobile );
$_SESSION['isAnimationWasShowed'] = true;
?>
    <!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    @if(View::hasSection('title'))
        <title>Калькулятор крафта Asterios | @yield('title')</title>
    @else
        <title>Калькулятор крафта Asterios</title>
    @endif

    <meta name="keywords" content="@yield('meta_keywords','калькулятор крафта астериос крафт крафтинг кальк астериос craft calc calculator asterios crafting')  @yield('title')">
    <meta name="description" content="@yield('meta_description','Калькулятор крафта Астериос  | Craft calculator Asterios')  @yield('title')">
    <meta name="author" content="Калькулятор крафта Asterios">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="google-site-verification" content="r5IgAcubOAf7hWByU2jIi90T51Fy4wYNeLTcvH8vFaE" />
    <link rel="icon" type="image/png" href="{{ URL::to('/') }}/favicon.ico" />
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-87WEW2EL6C"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push( arguments );
        }

        gtag( 'js', new Date() );

        gtag( 'config', 'G-87WEW2EL6C' );
    </script>

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <link rel="canonical" href="{{route('index')}}">
    @if (Route::is('index'))
        <link rel="canonical" href="{{route('recipes.index')}}">
    @endif
</head>

<body>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function( m, e, t, r, i, k, a ) {
        m[ i ]   = m[ i ] || function() {
            (m[ i ].a = m[ i ].a || []).push( arguments )
        };
        m[ i ].l = 1 * new Date();
        k = e.createElement( t ), a = e.getElementsByTagName( t )[ 0 ], k.async = 1, k.src = r, a.parentNode.insertBefore( k, a )
    })
    ( window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym" );

    ym( 86545727, "init", {
        clickmap: true,
        trackLinks: true,
        accurateTrackBounce: true,
        webvisor: true
    } );
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/86545727" style="position:absolute; left:-9999px;" alt="ya" /></div>
</noscript>
<!-- /Yandex.Metrika counter -->
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
                <img class="nk-img" src="{{ asset('images/logo.webp' ) }}" alt="Калькулятор крафта Asterios" width="170">
                <div class="nk-preloader-animation"></div>
            </div>
        </div>

    </div>

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
                <img src="{{ asset('images/logo.webp' ) }}" alt="logo" width="90">
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
