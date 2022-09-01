@extends('layouts.app')
@section('content')
    @if(isset($title))
@section('title', $title)
@endif
@section('description', 'Информация о всех ресурсах, которые пригодятся для крафта, динамика изменения цен, топ ресурсов, у которых больше всего выросла или упала цена.')
<div class="nk-main">

    <div class="nk-box">
        <div class="container">
            <div class="nk-gap-1"></div>
            <h1 class="nk-title">{{ $title ?? 'Все Ресурсы' }}</h1>
            <p>Цены на ресурсы сохраняются, можно посмотреть как менялась цена со временем. Так же показывается Топ изменения цен ресурсов с прошлого обновления цены.</p>
            <div class="nk-gap-1"></div>
        </div>
    </div>
    <div class="container">

        @include('pages.resources.index-price-difference', ['historyDifference' => $historyDifference])

        @if ($all)
            <div class="row">

                @foreach($all as $single)
                    <div class="col-4 pb-10">
                        <a href="{{ route( 'resources.show', [ 'id' => $single->id ] ) }}">
                            <img width="30" src="{{asset('storage') . '/' . $single->img}}" alt="{{$single->name}}">
                            {{$single->name}} ({{prettifyNumber($single->price_sell)}})
                        </a>

                    </div>
                @endforeach

            </div>
        @endif
        <div class="nk-gap-6"></div>
    </div>

</div>

@endsection
