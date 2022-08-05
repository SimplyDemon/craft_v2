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
            <h1 class="nk-title">
                {{ $title ?? $single->name }}
            </h1>
        </div>
    </div>

    <div class="container">
        <div class="row recipe-info">
            <div class="col-5">
                <img
                    class="rounded
@if($single->favorite_text) recipe-info_favorite-img @elseif($single->is_available_for_sub_quest) recipe-info_sub-quest-img @endif
                        " width="50"
                    src="{{asset('storage') . '/' . $single->img}}" alt="show"
                    @if($single->favorite_text)data-toggle="tooltip" data-placement="top"
                    title="{{$single->favorite_text}}" @elseif($single->is_available_for_sub_quest)
                    data-toggle="tooltip" data-placement="top"
                    title="Оружие подходит для саб класс квеста." @endif

                >
                @if($single->gradeImage)
                    <img class="grade" src="{{$single->gradeImage}}" alt="grade">
                @endif
                @if($single->masterworkText)
                    <span class="nk-btn nk-btn-style-1 nk-btn-md nk-btn-color-main-1" style="font-size: 10px;"
                          data-toggle="tooltip" data-html="true" data-placement="top"
                          title="{{$single->masterworkText}}">{{$chanceText}}</span>
                @endif
                {!! $single->bonus_pvp_html !!}

                @if($isCountMoreThenOne)
                    <span class="nk-btn-style-1 nk-btn-md nk-btn-color-main-1"
                          data-recipe-quantity-base="{{$single->craft_count}}"
                          data-recipe-quantity="{{$single->craft_count}}">{{$single->craft_count}}</span>
                    <span> шт.</span>
                @endif
                <div class="recipe-main-info border rounded border-dark">
                    @if($single->percent === '100')
                        <div class="form-group" data-recipe-price="{{$recipePrice ?? 0}}">
                            <label for="recipe-price">Цена:</label>
                            <input id="recipe-price" class="form-control" type="number" step="1" min="0"
                                   value="{{$recipePrice ?? 0}}">
                            <p id="recipe-price-craft-with-count">Цена за
                                <span id="recipe-price-craft-count">1</span> шт.
                                <span id="recipe-price-craft-cost">{{prettifyNumber($recipePrice)}}</span>
                            </p>
                        </div>

                    @elseif($recipePrice && $recipePrice > 0)
                        <div>Цена: {{prettifyNumber($recipePrice)}}</div>
                    @endif

                    @if($single->crystals_text)
                        {!!$single->crystals_text !!}
                    @endif
                    @if($single->p_attack)
                        <div>Физ атака:
                            <img
                                height="18px"
                                src="{{asset('storage') . '/' . \App\Models\Recipe::where('name', 'Soulshot (' .str_replace(['80', '-', '84'],'', $single->grade) .'-grade)')->first()->img}}"
                                alt="soul shot">
                            <span class="nk-btn-color-main-1">{{$single->p_attack}}</span>
                        </div>
                    @endif

                    @if($single->m_attack)
                        <div>Маг атака:
                            <img
                                height="18px"
                                src="{{asset('storage') . '/' . \App\Models\Recipe::where('name', 'Blessed Spiritshot (' .str_replace(['80', '-', '84'],'', $single->grade) .'-grade)')->first()->img}}"
                                alt="spirit shots">
                            <span class="nk-btn-color-main-1">{{$single->m_attack}}</span>
                        </div>
                    @endif

                    @if($single->p_def)
                        <div>Физ защита: <span class="nk-btn-color-main-1">{{$single->p_def}}</span></div>
                    @endif

                    @if($single->m_def)
                        <div>Маг защита: <span class="nk-btn-color-main-1">{{$single->m_def}}</span></div>
                    @endif

                    @if($single->noble_stones_for_upgrade)
                        <span>Необходимо <img width="20" src="{{asset('images/noble_stone.webp' )}}" alt="noble stones">
                            <span class="nk-btn-color-main-1">{{$single->noble_stones_for_upgrade}}</span> для апгрейда.</span>
                    @endif
                </div>
            </div>
            <div class="col-7">
                {!! $single->sa_html !!}
            </div>
        </div>

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
