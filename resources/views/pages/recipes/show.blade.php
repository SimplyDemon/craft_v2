@extends('layouts.app', [
	'recipe' => $single,
	])
@section('content')
    @if(isset($title))
@section('title', $title)
@endif
@if($single->keywords)
    @section('meta_keywords', $single->keywords)
@endif
<?php
$recipe100 = \App\Models\Recipe::where( 'name', $single->name . ' 100%' )->first();
$crystalsText = '';
?>
@if($single->percent === '60' && $recipe100 )
    @section('canonical', route( 'recipes.show', [ 'id' => $recipe100->id ] ))
@endif


<?php
$recipePriceSell = $single->price;

$chanceText = 'MasterWork';
if ( $single->grade === 'C' ) {
    $chanceText = 'DoubleCraft';
}

$masterWorkText = $single->masterworkText;
$isCountMoreThenOne = $single->craft_count !== 1;
?>
<div class="nk-main">
    <div class="nk-box">
        <div class="container">
            <div class="nk-gap-5"></div>
            <h1 class="nk-title">{{ $title ?? $single->name }}</h1>
            <div class="nk-gap-4"></div>
        </div>
    </div>

    <div class="container">
        <img width="50" src="{{asset('storage') . '/' . $single->img}}" alt="show">
        @if($single->gradeImage)
            <img class="grade" src="{{$single->gradeImage}}" alt="grade">
        @endif
        @if($masterWorkText)
            <span class="nk-btn nk-btn-style-1 nk-btn-md nk-btn-color-main-1" style="font-size: 10px;" data-toggle="tooltip" data-html="true" data-placement="top" title="{{$masterWorkText}}">{{$chanceText}}</span>
        @endif

        @if($isCountMoreThenOne)
            <span class="nk-btn-style-1 nk-btn-md nk-btn-color-main-1" data-recipe-quantity-base="{{$single->craft_count}}" data-recipe-quantity="{{$single->craft_count}}">{{$single->craft_count}}</span>
            <span> шт.</span>
        @endif

        @if($single->percent === '100')
            <div class="form-group" data-recipe-price="{{$recipePriceSell ?? 0}}">
                <label for="recipe-price">Цена:</label>
                <input id="recipe-price" class="form-control" type="number" step="1" min="0" value="{{$recipePriceSell ?? 0}}">
                <p id="recipe-price-craft-with-count">Цена за
                    <span id="recipe-price-craft-count">1</span> шт.
                    <span id="recipe-price-craft-cost">{{prettifyNumber($recipePriceSell)}}</span>
                </p>
            </div>

            {{$crystalsText}}
        @elseif($recipePriceSell && $recipePriceSell > 0)
            <p>Цена: {{prettifyNumber($recipePriceSell)}}</p>
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
