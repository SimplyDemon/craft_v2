@extends('layouts.app')
@section('content')
    @if(isset($title))
@section('title', $title)
@endif
@section('description', 'Поиск рецепта на сайте. Можно найти предмет по более распространённым названиям, а не только по точному, например "Валя", "Хома".')
<div class="nk-main">

    <div class="nk-box">
        <div class="container">
            <div class="nk-gap-5"></div>
            <h1 class="nk-title">{{ $title ?? 'Поиск' }}</h1>
            <div class="nk-gap-4"></div>
        </div>
    </div>

    <div class="container">

        @if($search)
            <h2>Результаты поиска по запросу "{{$search}}"</h2>
        @endif

        @if(!$recipes->isEmpty())

            @include('shared.recipe.list', [
               'recipes' => $recipes,
            ])

        @elseif($search)
            <h4>Ничего не нашли, попробуйте воспользоваться
                <a href="{{route('recipes.index')}}">каталогом предметов</a> с крутыми фильтрами!</h4>
        @endif

        <div class="nk-gap-4"></div>
        <div class="nk-gap-3"></div>
    </div>

</div>

@endsection
