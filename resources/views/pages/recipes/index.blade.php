@extends('layouts.app')
@section('content')
    @if(isset($title))
@section('title', $title)
@endif
<div class="nk-main">

    <div class="nk-box">
        <div class="container">
            <div class="nk-gap-1"></div>
            <h1 class="nk-title">{{ $title ?? 'Все предметы' }}</h1>
            <div class="nk-gap-1"></div>
        </div>
    </div>

    <div class="container">
        <div class="row vertical-gap">
            <div class="col-3 col-categories">
                <aside class="nk-sidebar nk-sidebar-left nk-sidebar-sticky">

                    <div class="nk-social-menu d-lg-block">
                        <a href="#" id="reset" class="nk-btn nk-btn-circle nk-btn-color-main-1 reset">
                            Сбросить фильтр
                        </a>
                        <ul class="categories-main color-main-1">
                            <li>
                                <a href="#" data-category="any" class="category-active">
                                    Все предметы
                                </a>
                            </li>
                            @foreach($categories as $categoryName => $args)
                                <li>
                                    <a href="#" data-category-parent="{{$categoryName}}">
                                        {{$args['title']}}
                                    </a>
                                </li>
                                @if(isset($args['list']))
                                    <ul data-category-parent="{{$categoryName}}">
                                        @foreach( $args['list'] as $categorySlug => $categoryName)
                                            <li class="color-main-1 subcategory">
                                                <a href="#" data-category="{{$categorySlug}}">
                                                    {{$categoryName}}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                    <div class="nk-gap-4 d-none d-lg-block"></div>
                </aside>
                <!-- END: Sidebar -->
            </div>
            <div class="col-9 col-items">
                <div class="nk-gap-2 d-none d-lg-block"></div>
                <div class="nk-social-menu-inline">
                    <input type="search" class="form-control" id="item-search" placeholder="Поиск" aria-label="" autocomplete="off">
                    <ul class="grade">
                        <li class="nk-btn-color-warning">Грейд:</li>
                        <li class="active">
                            <a data-grade="any" href="#">Любой</a>
                        </li>
                        <li>
                            <a data-grade="b" href="#">B</a>
                        </li>
                        <li>
                            <a data-grade="a" href="#">A</a>
                        </li>
                        <li>
                            <a data-grade="s" href="#">S</a>
                        </li>
                        <li>
                            <a data-grade="s-80" href="#">S-80</a>
                        </li>
                        <li>
                            <a data-grade="s-84" href="#">S-84</a>
                        </li>

                    </ul>
                    <ul class="percent">
                        <li class="nk-btn-color-warning">Шанс:</li>
                        <li class="active">
                            <a data-percent="any" href="#">Любой</a>
                        </li>
                        <li>
                            <a data-percent="60" href="#">60%</a>
                        </li>
                        <li>
                            <a data-percent="70" data-toggle="tooltip" data-placement="top" title="Бижутерия" href="#">70%</a>
                        </li>
                        <li>
                            <a data-percent="100" data-toggle="tooltip" data-placement="top" title="Предметы B грейда, соски, ресуры" href="#">100%</a>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    @foreach( $recipes as $recipe)
                        <div class="col-4 item"
                             @if($recipe->name)
                             data-name="{{strtolower($recipe->name)}}"
                             @endif
                             @if($recipe->category)
                             @if($recipe->category->name === 'Other' || $recipe->category->name === 'Resource')
                             data-category-parent="{{strtolower($recipe->category->name)}}"
                             @endif
                             data-category="{{strtolower($recipe->category->name)}}"
                             @endif
                             @if($recipe->grade && $recipe->category->name !== 'Other')
                             data-grade="{{strtolower($recipe->grade)}}"
                             @endif
                             @if($recipe->percent)
                             data-percent="{{strtolower($recipe->percent)}}"
                             @endif

                             @if($recipe->category && $recipe->category->category)
                             @if($recipe->category->category->category)
                             data-category-parent="{{strtolower($recipe->category->category->category->name)}}"
                             @else
                             data-category-parent="{{strtolower($recipe->category->category->name)}}"
                            @endif
                            @endif
                        >
                            <img width="30" src="{{asset('storage') . '/' . $recipe->img}}" alt="img">
                            @if($recipe->masterworkText)
                                <span class="nk-btn nk-btn-style-1 nk-btn-xs nk-btn-color-main-1" style="font-size: 10px;" data-toggle="tooltip" data-html="true" data-placement="top" title="{{$recipe->masterworkText}}">MW</span>
                            @endif
                            <br>
                            @if($recipe->gradeImage)
                                <img src="{{$recipe->gradeImage}}" alt="grade">
                            @endif
                            <a href="{{ route( 'recipes.show', [ 'id' => $recipe->id ] ) }}">
                                {{$recipe->name}}
                            </a>
                        </div>
                    @endforeach
                </div>

                <div class="nk-gap-4"></div>
            </div>
        </div>
        <div class="nk-gap-4"></div>
    </div>

</div>

@endsection
