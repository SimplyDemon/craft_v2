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

$masterWorkText = null;
if ( $single->masterwork_description ) {
    $masterWorkText = '';
    if ( $single->rare_chance ) {
        $masterWorkText = 'Crafter level <b>85</b><br>';
        $masterWorkText .= 'Chance: <b>' . $single->rare_chance . '</b>%';
    }
    if ( $single->masterwork_name ) {
        $masterWorkText .= '<br><i>' . $single->masterwork_name . '</i>';
    }
    $masterWorkText .= '<br>' . $single->masterwork_description;
}
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
                <span class="nk-btn-style-1 nk-btn-md nk-btn-color-main-1" data-recipe-quantity="{{$single->craft_count}}">{{$single->craft_count}} шт.</span>
            @endif

            @if($recipePriceSell > 0)
                Цена: {{number_format($recipePriceSell, 0, ' ', ' ')}}
            @endif
        </h3>

        @if(!$single->resources->isEmpty())
            <div class="nk-tabs">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active color-main-1-important" href="#sell" role="tab" data-toggle="tab">Закупка ресурсов у торговцев</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link color-main-1-important" href="#buy" role="tab" data-toggle="tab">Сесть на закупку ресурсов</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade show active" id="sell">
                        <div class="nk-gap-1"></div>

                        <h2 class="nk-title h1">Закупка ресурсов у торговцев</h2>
                        <div class="nk-gap-2"></div>
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
                    <div role="tabpanel" class="tab-pane fade" id="buy">
                        <div class="nk-gap-1"></div>

                        <h2 class="nk-title h1">Сесть на закупку ресурсов</h2>
                        <div class="nk-gap-2"></div>
                        <div class="no-gutters">
                            @include('pages.recipes.table', [
                                'price' => 'price_buy',
                                'isCountMoreThenOne' => $isCountMoreThenOne,
                                'single' => $single,
                                'resource' => $resource ?? null,
                            ])
                        </div>

                        <div class="nk-gap-1"></div>
                    </div>
                </div>
            </div>

        @endif
        <div class="nk-gap-4"></div>
        <div class="nk-gap-3"></div>
    </div>

</div>

@endsection

@push('extra-scripts')
    <script>
        $( function() {
            $( '[data-toggle="tooltip"]' ).tooltip()
        } )
    </script>
@endpush
