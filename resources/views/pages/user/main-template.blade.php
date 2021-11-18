@extends('layouts.app')
@section('content')
    @if(isset($title))
@section('title', ' - ' . $title)
@endif
<?php
$user = auth()->user();
$isAuth = $user;
$isCanUpdatePrice = $isAuth && $user->isCanUpdatePrice;
?>
<div class="nk-main">

    <div class="nk-box">
        <div class="container">
                <div class="nk-gap-5"></div>
                <h1 class="nk-title">{{ $title ?? 'Личный кабинет' }}</h1>
                <div class="nk-gap-4"></div>
            </div>
        </div>

        <div class="container">

            <div class="row">
                <div class="col-lg-3">

                    <aside class="nk-sidebar nk-sidebar-left nk-sidebar-sticky">
                        <div class="nk-store-account-links">
                            <ul>
                                <li class="{{Route::is('user') ? 'active' : ''}}">
                                    <a href="{{route('user')}}">
                                        Аккаунт
                                    </a>
                                </li>
                                <li class="{{Route::is('user.price') ? 'active' : ''}}">
                                    <a href="{{route('user.price')}}">
                                        Цены
                                    </a>
                                </li>
                                <li class="{{Route::is('conversations.index') ? 'active' : ''}}">
                                    <a href="{{route('conversations.index')}}">
                                        Поддержка
                                    </a>
                                </li>

                                @if($isCanUpdatePrice)
                                    <li class="{{Route::is('admin_prices') ? 'active' : ''}}">
                                        <a href="{{route('admin_prices')}}">
                                            Цена админа
                                        </a>
                                    </li>
                                @endif
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <button type="submit" class="nk-btn nk-btn-circle nk-btn-color-main-1">
                                            Выйти
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </aside>
                </div>
                <div class="col-lg-9">
                    <div class="nk-box-3 bg-dark-1">
                        @yield('user-content')
                    </div>
                </div>
            </div>

            <div class="nk-gap-4"></div>
            <div class="nk-gap-3"></div>
        </div>

    </div>
@endsection
