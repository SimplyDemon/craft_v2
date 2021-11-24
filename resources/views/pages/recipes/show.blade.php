@extends('layouts.app')
@section('content')
    @if(isset($title))
@section('title', $title)
@endif
<?php
if ( isset( $single->resource_id ) ) {
    $resource = $single->resource;

    $recipePriceSell = isset( $user ) && $user->resources->find( $resource->id ) && $user->resources->find( $resource->id )->pivot->price_sell ? $user->resources->find( $resource->id )->pivot->price_sell : $resource->price_sell;

} else {
    $recipePriceSell = isset( $user ) && $user->recipes->find( $single->id ) && $user->recipes->find( $single->id )->pivot->price_sell ? $user->recipes->find( $single->id )->pivot->price_sell : $single->price_sell;
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

        <h3>
            <img width="50" src="{{asset('storage') . '/' . $single->img}}" alt="show">
            @if($single->gradeImage)
                <img class="grade" src="{{$single->gradeImage}}" alt="grade">
            @endif
            @if($masterWorkText)
                <span class="nk-btn nk-btn-style-1 nk-btn-md nk-btn-color-main-1" style="font-size: 10px;" data-toggle="tooltip" data-html="true" data-placement="top" title="{{$masterWorkText}}">Masterwork</span>
            @endif

            @if($isCountMoreThenOne)
                <span class="nk-btn-style-1 nk-btn-md nk-btn-color-main-1" data-recipe-quantity-base="{{$single->craft_count}}" data-recipe-quantity="{{$single->craft_count}}">{{$single->craft_count}}</span>
                <span> шт.</span>
            @endif

            @if($single->percent === '100')
                <div class="form-group" data-recipe-price="{{$recipePriceSell ?? 0}}">
                    <label for="recipe-price">Цена:</label>
                    <input id="recipe-price" class="form-control" type="number" step="1" min="0" value="{{$recipePriceSell ?? 0}}">
                    <p style="visibility: hidden" id="recipe-price-craft-with-count">Цена за
                        <span id="recipe-price-craft-count"></span> шт.
                        <span id="recipe-price-craft-cost">{{number_format($recipePriceSell ?? 0, 0, ' ', ' ')}}</span>
                    </p>
                </div>
            @else
                <p>Цена: {{number_format($recipePriceSell, 0, ' ', ' ')}}</p>
            @endif
        </h3>

        @if(!$single->resources->isEmpty())
            <div class="no-gutters">
                @include('pages.recipes.table', [
                    'price' => 'price_sell',
                    'isCountMoreThenOne' => $isCountMoreThenOne,
                    'single' => $single,
                    'resource' => $resource ?? null,
                ])
            </div>
            <div class="nk-gap-1"></div>
    </div>

    @endif
    <div class="nk-gap-3"></div>
</div>

</div>

@endsection

