@extends('layouts.app')
@section('content')
    @if(isset($title))
@section('title', ' - ' . $title)
@endif
<div class="nk-main">

    <div class="nk-box">
        <div class="container">
            <div class="nk-gap-5"></div>
            <h1 class="nk-title">{{ $title ?? 'Все вещи' }}</h1>
            <div class="nk-gap-4"></div>
        </div>
    </div>

        <div class="container">

            @if ($categories)
                <ul class="list-group">
                    @foreach($categories as $single)

                        <div class="nk-accordion" id="accordion-1" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="category-{{$single->id}}-heading">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion-1" href="#category-{{$single->id}}" aria-expanded="false" aria-controls="category-{{$single->id}}">
                                        {{$single->name}}
                                    </a>
                                </div>
                                <div id="category-{{$single->id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="category-{{$single->id}}-heading">
                                    <div class="nk-gap-1"></div>

                                    <li class="list-group-item">

                                        @if($single->subCategories)
                                            <ul class="list-group">
                                                @foreach( $single->subCategories as $subCategory)
                                                    <div class="nk-accordion" id="accordion-1" role="tablist" aria-multiselectable="true">
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="category-{{$subCategory->id}}-heading">
                                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion-1" href="#category-{{$subCategory->id}}" aria-expanded="false" aria-controls="category-{{$subCategory->id}}">
                                                                    {{$subCategory->name}}
                                                                </a>
                                                            </div>
                                                            <div id="category-{{$subCategory->id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="category-{{$subCategory->id}}-heading">
                                                                <div class="nk-gap-1"></div>

                                                                <li class="list-group-item">

                                                                    @if($subCategory->subCategories)
                                                                        @include('template-parts.recipes.index.categories-list', ['categories' => $subCategory->subCategories])
                                                                    @endif

                                                                    @if($subCategory->recipes)
                                                                        @include('template-parts.recipes.index.recipes-list', ['recipes' => $subCategory->recipes])
                                                                    @endif
                                                                </li>

                                                                <div class="nk-gap-1"></div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                @endforeach
                                            </ul>
                                        @endif
                                        @if($single->recipes)
                                            @include('template-parts.recipes.index.recipes-list', ['recipes' => $single->recipes])
                                        @endif
                                    </li>

                                    <div class="nk-gap-1"></div>
                                </div>
                            </div>
                        </div>

                    @endforeach
                </ul>
            @endif

            <div class="nk-gap-4"></div>
            <div class="nk-gap-3"></div>
        </div>

    </div>

@endsection
