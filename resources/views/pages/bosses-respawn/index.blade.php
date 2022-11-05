@extends('layouts.app')
@section('content')
    @if(isset($title))
@section('title', $title)
@section('description', 'Таймеры показывают время респа Саб РБ (Кабрио, Халат, Кернон, Голконда) и Эпик РБ (Анатарас, Валакас, Баюм) на всех серверах Asterios. Shilen\'s Messenger Cabrio, Death Lord Hallate, Kernon, Longhorn Golkonda, Antharas, Valakas, Baium все они есть тут.')
@endif
<div class="nk-main">
    <div class="nk-box bg-dark-1 sd-background">
        <div class="nk-box">
            <div class="container">
                <div class="nk-gap-1"></div>
                <h1 class="nk-title align-center">
                    {{ $title ?? 'Респ РБ' }}
                </h1>
                <p>Удобный таймер сориентирует по времени респа сабкласс РБ на сервере Астериос, а так же некоторых Эпик
                    РБ.</p>
                <div class="nk-gap-1"></div>
            </div>
        </div>
        <div class="container text-center">
            @if($bossesX1 || $bossesX5 || $bossesX15)
                @include('pages.bosses-respawn.bosses')
            @endif
        </div>
    </div>
    <div class="nk-gap-6"></div>
</div>
@endsection
