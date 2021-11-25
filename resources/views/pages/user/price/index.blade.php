@extends('pages.user.main-template', ['title' => $title ?? 'Цены'])
@section('user-content')
    @if(isset($title))
@section('title', $title)
@endif
@if ($resources && $recipes)

    <form method="post" action="{{route('user.price.update')}}">
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

@endsection
