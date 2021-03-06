<?php
$user    = auth()->user();
$isAuth  = $user;
$isAdmin = $isAuth && $user->isAdmin;
if ( ! isset($_SESSION)) {
    session_start();
}
$agent    = new \Jenssegers\Agent\Agent();
$isMobile = $agent->isMobile();

$isActivateFirstTimeAnimation     = ! isset($_SESSION['isAnimationWasShowed']);
$isEnableAnimation                = ($isAuth && $user->isEnableAnimation) || ($isActivateFirstTimeAnimation && ! $isMobile);
$_SESSION['isAnimationWasShowed'] = true;
?>
        <!DOCTYPE html>
<html lang="ru">
<head itemscope itemtype="http://schema.org/WPHeader">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    @if(View::hasSection('title'))
        <title itemprop="headline">@yield('title') | Калькулятор крафта Asterios</title>
    @else
        <title itemprop="headline">Калькулятор крафта Asterios</title>
    @endif

    @if(isset($faq))
        {!! getFaqSchemaHtml($faq) !!}
    @endif

    @if(isset($recipe))
        {!! getRecipeSchemaHtml($recipe) !!}
    @endif

    @if(Route::is('recipes.show') && View::hasSection('single'))
        <meta itemprop="keywords" name="keywords" content="@yield('meta_keywords') @yield('title')">
    @else
        <meta itemprop="keywords" name="keywords" content="@yield('meta_keywords','калькулятор крафта астериос, крафт, крафтинг, кальк, астериос, craft calc, craft, calculator asterios, crafting') @yield('title')">
    @endif

    @if(Route::is('recipes.show') && View::hasSection('canonical'))
        <link rel="canonical" href="@yield('canonical')" />
    @endif

    <meta itemprop="description" name="description" content="@yield('meta_description','Калькулятор крафта Астериос создан для людей, которые увлекаются крафтом или просто накопили кучу ресурсов и ищут что с ними сделать. Стоит ли крафтить предмет, выгодно ли это или стоит продать все ресурсы на рынок? Какой шанс крафта Рар предмета и что вообще даёт Masterwork? Нормальная ли это цена за ресурс или раньше она сильно упала? Когда реснутся сабкласс РБ или Эпик РБ? Ответы на вопросы найдёшь на этом сайте!')">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    @if (env( 'APP_ENV' ) === 'prod')
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
    @endif

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    @if(Route::is('recipes.index'))
        <link href="{{ mix('css/recipes.css') }}" rel="stylesheet">
    @endif
</head>

<body>

@if (env( 'APP_ENV' ) === 'prod')
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript"> (function ( m, e, t, r, i, k, a ) {
			m[ i ] = m[ i ] || function () {
				(m[ i ].a = m[ i ].a || []).push( arguments )
			};
			m[ i ].l = 1 * new Date();
			k = e.createElement( t ), a = e.getElementsByTagName( t )[ 0 ], k.async = 1, k.src = r, a.parentNode.insertBefore( k, a )
		})( window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym" );
		ym( 86545727, "init", {clickmap: true, trackLinks: true, accurateTrackBounce: true} ); </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/86545727" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript> <!-- /Yandex.Metrika counter -->
@endif

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
                <img class="nk-img" src="{{ asset('images/logo.webp' ) }}" alt="Калькулятор крафта Asterios" width="170" height="40">
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
    <div class="nk-navbar-bg">
        <div class="bg-image">
            <img src="{{ asset('images/navbar-bg.webp' ) }}" alt="Elfie" class="img-fluid jarallax-img sd-navbar-bg">
        </div>
    </div>

    <div class="nano">
        <div class="nano-content">
            <div class="nk-nav-table">

                <div class="nk-nav-row">
                    <a href="{{route('index')}}" class="nk-nav-logo">
                        <img src="{{ asset('images/logo.webp' ) }}" alt="logo" width="150" height="35">
                    </a>
                </div>

                <div class="nk-nav-row nk-nav-row-full nk-nav-row-center">
                    <ul class="nk-nav">
                        <li class=" ">
                            <a href="{{route('bosses_respawn')}}">
                                Респ РБ
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</nav>

<div id="nk-nav-mobile" class="nk-navbar nk-navbar-side nk-navbar-left-side nk-navbar-overlay-content d-lg-none">
    <div class="nano">
        <div class="nano-content">
            <a href="{{route('index')}}" class="nk-nav-logo">
                <img src="{{ asset('images/logo.webp' ) }}" alt="logo" width="90" height="21">
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
