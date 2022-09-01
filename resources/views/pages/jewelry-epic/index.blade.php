@extends('layouts.app')
@section('content')
    @if(isset($title))
@section('title', $title)
@endif
@section('description', 'Список всей Эпик бижутерии, которая выпадет со всех Эпик РБ. Бижа находится на одной странице и можно спокойно выбрать лучший вариант под себя и сравнить её с аналогами.')
<div class="nk-main">

    <div class="nk-box">
        <div class="container">
            <div class="nk-gap-5"></div>
            <h1 class="nk-title">{{ $title }}</h1>
        </div>
    </div>

    <div class="container">
        <p>
            {!! $content !!}
        </p>
        @if(!$recipes->isEmpty())

            @include('shared.recipe.list', [
               'recipes' => $recipes,
            ])
        @endif

        <div class="nk-gap-4"></div>
        <div class="nk-gap-3"></div>
    </div>

</div>

@endsection
