@extends('layouts.app', [
	'recipe' => $single,
	])
@section('content')
    @if(isset($title))
@section('title', $title . ' | Предметы')
@section('description',$single->description_seo_text)
@endif
@if(!empty($single->img))
    @section('seo-image', asset('storage') . '/' . $single->img)
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
                @include('shared.recipe.thumbnail', [
                 'single' => $single,
                ])
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
                        <div><img
                                class="rounded"
                                height="18px"
                                src="{{asset('storage') . '/' . \App\Models\Recipe::where('name', 'Soulshot (' .str_replace(['80', '-', '84'],'', $single->grade) .'-grade)')->first()->img}}"
                                alt="soul shot"> Физ атака:
                            <span class="nk-btn-color-main-1">{{$single->p_attack}}</span>
                        </div>
                    @endif

                    @if($single->m_attack)
                        <div><img
                                class="rounded"
                                height="18px"
                                src="{{asset('storage') . '/' . \App\Models\Recipe::where('name', 'Blessed Spiritshot (' .str_replace(['80', '-', '84'],'', $single->grade) .'-grade)')->first()->img}}"
                                alt="spirit shots"> Маг атака:

                            <span class="nk-btn-color-main-1">{{$single->m_attack}}</span>
                        </div>
                    @endif

                    @if($single->p_def)
                        <div><img
                                class="rounded"
                                height="18px"
                                src="{{asset('images/shield.webp' )}}"
                                alt="physic def">
                            Физ защита:
                            <span class="nk-btn-color-main-1">{{$single->p_def}}</span></div>
                    @endif

                    @if($single->m_def)
                        <div><img
                                class="rounded"
                                height="18px"
                                src="{{asset('images/magic_barrier.webp' )}}"
                                alt="magic def">
                            Маг защита:
                            <span class="nk-btn-color-main-1">{{$single->m_def}}</span></div>
                    @endif

                    @if($single->noble_stones_for_upgrade)
                        <span>Необходимо <img width="20" src="{{asset('images/noble_stone.webp' )}}"
                                              alt="noble stones">
                            <span class="nk-btn-color-main-1">{{$single->noble_stones_for_upgrade}}</span> для апгрейда.</span>
                    @endif

                    @if($single->description)
                        {!! $single->description !!}
                    @endif
                </div>
            </div>
            <div class="col-7 @if($single->recipes) recipe_recipe-container @endif">
                {!! $single->sa_html !!}

                @if($single->recipes)
                    @foreach($single->recipes as $contentRecipe)
                        <div class="recipe_recipe">
                            <a href="{{route('recipes.show', $contentRecipe)}}">
                                <img class="rounded" src="{{asset('storage') . '/' . $contentRecipe->img}}"
                                     alt="{{$contentRecipe->name}}" width="32">
                                <span>{{$contentRecipe->name}}</span>

                            </a>
                        </div>

                        @if ($loop->first)
                            <svg class="recipe_recipe-plus-img" width="30px" version="1.1" id="Capa_1"
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                 y="0px"
                                 viewBox="0 0 591.6 591.6" style="enable-background:new 0 0 591.6 591.6;"
                                 xml:space="preserve">
<g>
    <g>
        <path d="M581.4,244.8H346.8V10.2c0-5.712-4.488-10.2-10.2-10.2H255c-5.712,0-10.2,4.488-10.2,10.2v234.6H10.2
			C4.488,244.8,0,249.288,0,255v81.6c0,5.712,4.488,10.2,10.2,10.2h234.6v234.6c0,5.712,4.488,10.2,10.2,10.2h81.6
			c5.712,0,10.2-4.488,10.2-10.2V346.8h234.6c5.712,0,10.2-4.488,10.2-10.2V255C591.6,249.288,587.112,244.8,581.4,244.8z
			 M571.2,326.4H336.6c-5.712,0-10.2,4.488-10.2,10.2v234.6h-61.2V336.6c0-5.712-4.488-10.2-10.2-10.2H20.4v-61.2H255
			c5.712,0,10.2-4.488,10.2-10.2V20.4h61.2V255c0,5.712,4.488,10.2,10.2,10.2h234.6V326.4z"/>
        <path d="M303.96,33.66h-20.4c-2.856,0-5.1,2.244-5.1,5.1v204c0,2.856,2.244,5.1,5.1,5.1s5.1-2.244,5.1-5.1V43.86h15.3
			c2.856,0,5.1-2.244,5.1-5.1S306.816,33.66,303.96,33.66z"/>
    </g>
</g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
</svg>
                        @endif
                        @if($contentRecipe->pivot->is_duplicate)
                            <div class="recipe_recipe">
                                <a href="{{route('recipes.show', $contentRecipe)}}">
                                    <img width="32" class="rounded"
                                         src="{{asset('storage') . '/' . $contentRecipe->img}}"
                                         alt="{{$contentRecipe->name}}">
                                    <span>{{$contentRecipe->name}}</span>

                                </a>
                            </div>
                        @endif
                    @endforeach

                @endif
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
        @if($single->content)
            <p class="text-center">{!! $single->content !!}</p>
        @endif
    </div>

    <div class="nk-gap-6"></div>
</div>

@endsection
