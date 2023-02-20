@php
    $user    = auth()->user();
    $isAuth  = $user;
    $isAdmin = $isAuth && $user->isAdmin;
    if($isAuth) {
        $userIsHaveNewMessage = $user->is_has_new_message;
        $isDisplayNewMessagesPopup = empty($_COOKIE['isClosedMessagesPopupRecently']) && $userIsHaveNewMessage;
    }
    $agent    = new \Jenssegers\Agent\Agent();
    $isMobile = $agent->isMobile();

    $isActivateFirstTimeAnimation = ! session('isAnimationWasShowed', false);
    $isEnableAnimation            = ($isAuth && $user->isEnableAnimation) || ($isActivateFirstTimeAnimation && ! $isMobile);
    $currentPageUrl = url()->full();
@endphp
    <!DOCTYPE html>
<html lang="ru">
<head itemscope itemtype="http://schema.org/WPHeader">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{$currentPageUrl}}">
    <link rel="canonical" href="{{$currentPageUrl}}">
    <meta property="og:locale" content="ru_RU">
    <meta property="og:site_name" content="Калькулятор крафта Asterios">
    <meta property="og:locale" content="ru_RU">


    @if(View::hasSection('seo-image'))
        <meta property="og:image" content="@yield('seo-image')"/>
    @else
        <meta property="og:image" content="{{ asset('images/main_img.webp' ) }}"/>
    @endif
    @if(View::hasSection('title'))
        <title itemprop="headline">@yield('title') | Калькулятор крафта Asterios для La 2</title>
        <meta property="og:title" content="@yield('title') | Калькулятор крафта Asterios для La 2">
    @else
        <title itemprop="headline">Калькулятор крафта Asterios для La 2</title>
        <meta property="og:title" content="Калькулятор крафта Asterios для La 2">
    @endif

    @if(View::hasSection('description'))
        <meta itemprop="description" name="description" content="@yield('description')">
        <meta property="og:description" content="@yield('description')">
    @else
        <meta itemprop="description" name="description"
              content="@yield('meta_description','Калькулятор крафта Астериос для La 2. Список ТВ бижи, Эпик бижутерии, поясов и тд. Таймер показывает респ Саб класс РБ и Эпик РБ.')">
        <meta property="og:description"
              content="@yield('meta_description','Калькулятор крафта Астериос для La 2. Список ТВ бижи, Эпик бижутерии, поясов и тд. Таймер показывает респ Саб класс РБ и Эпик РБ.')">
    @endif

    @if(isset($faq))
        {!! getFaqSchemaHtml($faq) !!}
    @endif

    @if( View::hasSection('meta_keywords'))
        <meta itemprop="keywords" name="keywords" content="@yield('meta_keywords') @yield('title')">
    @else
        <meta itemprop="keywords" name="keywords"
              content="@yield('meta_keywords','Калькулятор крафта Астериос, Респ РБ, таймер, список Эпик, ТВ бижи, пояс') @yield('title')">
    @endif

    @if(Route::is('recipes.show') && View::hasSection('canonical'))
        <link rel="canonical" href="@yield('canonical')"/>
    @endif


    <meta name="csrf-token" content="{{ csrf_token() }}">

    @if (env( 'APP_ENV' ) === 'prod')
        <meta name="google-site-verification" content="r5IgAcubOAf7hWByU2jIi90T51Fy4wYNeLTcvH8vFaE"/>
        <link rel="icon" type="image/png" href="{{ URL::to('/') }}/favicon.ico"/>
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-87WEW2EL6C"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }

            gtag('js', new Date());

            gtag('config', 'G-87WEW2EL6C');
        </script>
    @endif

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    @if(Route::is('recipes.index') || Route::is('non_craftable') )
        <link href="{{ mix('css/recipes.css') }}" rel="stylesheet">
    @endif

    @if(Route::is('enchantment') )
        <link href="{{ mix('css/enchantment.css') }}" rel="stylesheet">
    @endif
</head>

<body itemscope itemtype="https://schema.org/WebPage">

@if (env( 'APP_ENV' ) === 'prod' && !isGooglePageSpeedVisit())
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript"> (function (m, e, t, r, i, k, a) {
            m[i] = m[i] || function () {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
        ym(86545727, "init", {clickmap: true, trackLinks: true, accurateTrackBounce: true}); </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/86545727" style="position:absolute; left:-9999px;" alt=""/></div>
    </noscript> <!-- /Yandex.Metrika counter -->
@endif

@if($isEnableAnimation && !isGooglePageSpeedVisit())
    @php
        session(['isAnimationWasShowed' => true]);
    @endphp
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
                <img class="nk-img" src="{{ asset('images/logo.webp' ) }}" alt="Калькулятор крафта Asterios" width="170"
                     height="40">
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

<nav class="nk-navbar nk-navbar-side nk-navbar-right-side nk-navbar-lg nk-navbar-align-center nk-navbar-overlay-content"
     id="nk-side">

    <div class="nano">
        <div class="nano-content">
            <div class="nk-nav-table">
                <div class="nk-nav-row">

                    @if(!Route::is('index') )
                        <a href="{{route('index')}}" class="nk-nav-logo">
                            @else
                                <div class="nk-nav-logo">
                                    @endif
                                    <img src="{{ asset('images/logo.webp' ) }}" alt="logo header 2" width="150"
                                         height="35">
                                @if(!Route::is('index') )
                        </a>
                    @else
                </div>
                @endif
            </div>

        </div>
    </div>
</nav>

<div id="nk-nav-mobile" class="nk-navbar nk-navbar-side nk-navbar-left-side nk-navbar-overlay-content d-lg-none">
    <div class="nano">
        <div class="nano-content">
            @if(!Route::is('index') )
                <a href="{{route('index')}}" class="nk-nav-logo">
                    @else
                        <div class="nk-nav-logo">
                            @endif
                            <img src="{{ asset('images/logo.webp' ) }}" alt="logo header 3" width="90" height="21">
                        @if(!Route::is('index') )
                </a>
            @else
        </div>
        @endif
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
    <div class="container text-center">
        <div class="nk-info-box nk-info-box-noicon">
            <div class="nk-info-box-close nk-info-box-close-btn">
                <i class="ion-android-close"></i>
            </div>
            {!! session('message') !!}
        </div>
    </div>
@endif

@if(!empty($isDisplayNewMessagesPopup))
    @include('template-parts.global.header-new-message-notice')
@endif
