@extends('layouts.app')
@section('content')
    @if(isset($title))
@section('title', $title)
@endif
<div id="chart-config"
     @if($priceHistoryDates)
     data-date="{{$priceHistoryDates}}"
     @endif

     @if($priceHistoryPrices)
     data-price="{{$priceHistoryPrices}}"
    @endif
></div>
<div class="nk-main">

    <div class="nk-box">
        <div class="container">
            <div class="nk-gap-1"></div>
            <h1 class="nk-title">{{ $single->name }}</h1>
            <div class="nk-gap-1"></div>
        </div>
    </div>
    <div class="container">
        <img width="50" src="{{asset('storage') . '/' . $single->img}}" alt="{{$single->name}}">
        <p>Цена: {{prettifyNumber($single->price_sell)}}</p>

        @if($single->recipe)
            <a href="{{ route( 'recipes.show', [ 'id' => $single->recipe->id ] ) }}">
                <h3>Рецепт</h3>
            </a>
        @endif
        <canvas id="price-chart"></canvas>
    </div>

    <div class="nk-gap-6"></div>
    <div class="nk-gap-3"></div>
</div>

@endsection

@push('extra-scripts')
    <script>

    </script>
@endpush