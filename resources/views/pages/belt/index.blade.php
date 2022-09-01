@extends('layouts.app')
@section('content')
    @if(isset($title))
@section('title', $title)
@endif
@section('description', 'Список всех поясов A и S грейда находится на одной странице, можно наглядно сравнить бонусы от различных орнаментов или заколок. Есть ПвП ориентированные вставки: Увеличение урона в ПвП, Уменьшение урона в ПвП. Есть ПвЕ варианты, которые не дают боевые бонусы, но так же приятны: Увеличение слотов в инвентаре, увеличение грузоподъёмности, Увеличение ХП/МП регена.')
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
