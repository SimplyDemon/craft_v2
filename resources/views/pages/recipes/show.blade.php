@extends('layouts.app', [
	'recipe' => $single,
	])
@section('content')
    @if(isset($title))
@section('title', $title . ' | Предметы')
@section('description', "Информация о крафте рецепта {$title}.")
@endif

@if($single->keywords)
    @section('meta_keywords', $single->keywords)
@endif

@if($canonicalUrl)
    @section('canonical', $canonicalUrl))
@endif

<div class="nk-main">
    <div class="nk-box">
        <div class="container">
            <div class="nk-gap-2"></div>
            <h1 class="nk-title">{{ $title ?? $single->name }}</h1>
            <div class="nk-gap-2"></div>
        </div>
    </div>

    <div class="container">
        <img width="50" src="{{asset('storage') . '/' . $single->img}}" alt="show">
        @if($single->gradeImage)
            <img class="grade" src="{{$single->gradeImage}}" alt="grade">
        @endif
        @if($single->masterworkText)
            <span class="nk-btn nk-btn-style-1 nk-btn-md nk-btn-color-main-1" style="font-size: 10px;" data-toggle="tooltip" data-html="true" data-placement="top" title="{{$single->masterworkText}}">{{$chanceText}}</span>
        @endif

        @if($isCountMoreThenOne)
            <span class="nk-btn-style-1 nk-btn-md nk-btn-color-main-1" data-recipe-quantity-base="{{$single->craft_count}}" data-recipe-quantity="{{$single->craft_count}}">{{$single->craft_count}}</span>
            <span> шт.</span>
        @endif

        @if($single->percent === '100')
            <div class="form-group" data-recipe-price="{{$recipePrice ?? 0}}">
                <label for="recipe-price">Цена:</label>
                <input id="recipe-price" class="form-control" type="number" step="1" min="0" value="{{$recipePrice ?? 0}}">
                <p id="recipe-price-craft-with-count">Цена за
                    <span id="recipe-price-craft-count">1</span> шт.
                    <span id="recipe-price-craft-cost">{{prettifyNumber($recipePrice)}}</span>
                </p>
            </div>

        @elseif($recipePrice && $recipePrice > 0)
            <p>Цена: {{prettifyNumber($recipePrice)}}</p>
        @endif
        @if($single->crystals_text)
            <p>
                {!!$single->crystals_text !!}
            </p>
        @endif
        {!! $single->sa_html !!}
        @if($single->resource)
            <a href="{{ route( 'resources.show', [ 'id' => $single->resource->id ] ) }}">
                <h3>Ресурс</h3>
            </a>
        @endif

        @if(!$single->resources->isEmpty())
            <div class="no-gutters">
                @include('pages.recipes.table', [
                    'price' => 'price_sell',
                    'isCountMoreThenOne' => $isCountMoreThenOne,
                    'single' => $single,
                    'resource' => $resource ?? null,
                ])
            </div>
        @endif
    </div>

    <div class="nk-gap-6"></div>
</div>

@endsection
