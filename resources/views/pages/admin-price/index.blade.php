@extends('layouts.app')
@section('content')
    @if(isset($title))
@section('title', $title)
@endif
<div class="nk-main">

    <div class="nk-box">
        <div class="container">
            <div class="nk-gap-5"></div>
            <h1 class="nk-title">{{ $title ?? 'Цены админа' }}</h1>
            <div class="nk-gap-4"></div>
        </div>
    </div>

        <div class="container">
            @if ($resources && $recipes)
                <form method="post">
                    @csrf
                    @method('POST')

                    <h2>Ресурсы</h2>
                    <input type="search" class="form-control input-price-search" id="item-search" placeholder="Поиск" aria-label="" autocomplete="off">
                    @include('shared.price.table', [
                        'all' => $resources,
                        'prefix' => 'resources',
                    ])

                    <h2>Предметы</h2>
                    @include('shared.price.table', [
                        'all' => $recipes,
                        'prefix' => 'recipes',
                    ])
                    <button class="btn btn-primary fixed-bottom save-prices">Сохранить</button>
                </form>
            @endif

            <div class="nk-gap-4"></div>
            <div class="nk-gap-3"></div>
        </div>

    </div>

@endsection
