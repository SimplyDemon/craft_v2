@extends('layouts.app')
@section('content')
    @if(isset($title))
@section('title', $title)
@section('description', 'Таймеры показывают время респа нубл и эпик РБ на всех серверах.')
@endif
<div class="nk-main">
    <div class="nk-box bg-dark-1 sd-background">
        <div class="nk-box">
            <div class="container">
                <div class="nk-gap-1"></div>
                <h1 class="nk-title align-center">
                    {{ $title ?? 'Респ РБ' }}
                </h1>
                <p>Таймер респавна Рейд Боссов переехал на отдельную страницу, т.к. основной сайт астериоса был заблокирован Роскомнадзором, и что бы получать информацию из ленты, необходимо использовать прокси, что замедляет работу сайта. На данный момент информация обновляется каждые 10 минут и во время обновления информации данная страница загружается достаточно долго, прошу относиться к этому факту с пониманием.</p>
                <div class="nk-gap-1"></div>
            </div>
        </div>
        <div class="container text-center">
            @if($bossesX1 && $bossesX5)
                @include('pages.bosses-respawn.bosses')
            @endif
        </div>
    </div>
    <div class="nk-gap-6"></div>
</div>
@endsection
