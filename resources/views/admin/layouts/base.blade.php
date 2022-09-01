<?php
$user    = auth()->user();
$isAuth  = $user;
$isAdmin = $isAuth && $user->isAdmin;
?>
    <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Калькулятор крафта Asterios') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('vendor/laraberg/css/laraberg.css')}}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css.gz') }}" rel="stylesheet">
</head>
<body>
<main class="main" role="main">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ route('index') }}">
                    Калькулятор крафта
                </a>
                <a class="navbar-brand" href="{{ route('recipes.index') }}">
                    Предметы
                </a>
                <form action="{{route('search')}}" method="get">
                    @csrf
                    <div class="input-group">
                        <input type="text" class="form-control" name="s" placeholder="Поиск" aria-label="">
                        <div class="input-group-prepend">
                            <button class="btn btn-outline-secondary">Найти</button>
                        </div>
                    </div>
                </form>
                @if($isAuth)
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Личный кабинет
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="{{route('user')}}">Пользователь</a>
                                        <a class="dropdown-item" href="{{route('user.price')}}">Цены</a>
                                        <a class="dropdown-item" href="{{route('conversations.index')}}">Поддержка</a>
                                    </div>

                                </li>
                            </ul>
                        </div>
                    </nav>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button type="submit" class="btn btn-primary">
                            Выйти
                        </button>
                    </form>
                @else
                    <a href="{{route('login')}}">
                        <button type="submit" class="btn btn-primary">
                            Войти
                        </button>
                    </a>
                @endif


            </div>
        </nav>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            @if (Session::has('message'))
                                <li class="list-group-item">
                                    {!! session('message') !!}
                                </li>
                            @endif
                            @foreach ($errors->all() as $error)
                                <li class="list-group-item">
                                    {{ $error }}
                                </li>
                                @endforeach
                                @yield('content')

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script src="https://unpkg.com/react@17.0.2/umd/react.production.min.js"></script>
<script src="https://unpkg.com/react-dom@17.0.2/umd/react-dom.production.min.js"></script>
<script src="{{ asset('vendor/laraberg/js/laraberg.js') }}"></script>


@stack('footer_scripts')
</body>
</html>
