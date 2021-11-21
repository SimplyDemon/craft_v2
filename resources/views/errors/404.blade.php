@extends('layouts.app')
@section('content')
@section('title', $title ?? 'Страница не найдена')

<div class="nk-main">
    <div class="nk-header-title nk-header-title-lg nk-header-title-parallax nk-header-title-parallax-opacity">
        <div class="nk-header-table">
            <div class="nk-header-table-cell">
                <div class="container">
                    <div class="nk-header-text">
                        <h1 class="nk-title display-3">{{$title ?? 'Страница не найдена'}}</h1>
                        <div class="nk-gap-2"></div>
                        <a href="{{route('index')}}" class="nk-btn nk-btn-lg nk-btn-color-main-1 link-effect-4">
                            <span>Главная страница</span>
                        </a>
                        <div class="nk-gap-4"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection
