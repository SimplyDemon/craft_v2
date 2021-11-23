@extends('layouts.app')
@section('content')

    <div class="nk-main">
        <div class="nk-header-title nk-header-title-lg nk-header-title-parallax nk-header-title-parallax-opacity">
            <div class="bg-image">
                <img src="{{ asset('images/index.webp' ) }}" alt="index" class="jarallax-img">
            </div>
            <div class="nk-header-table">
                <div class="nk-header-table-cell">
                    <div class="container">
                        <div class="nk-header-text">
                            <h1 class="nk-title display-3">{{$title ?? 'Калькулятор крафта Asterios'}}</h1>
                            <div class="nk-gap-2"></div>
                            <a href="{{route('recipes.index')}}" class="nk-btn nk-btn-lg nk-btn-color-main-1 link-effect-4">
                                <span>Каталог предметов</span>
                            </a>
                            <a href="#rb" class="nk-btn nk-btn-lg nk-btn-color-main-1 link-effect-1">
                                Респ РБ
                            </a>
                            <div class="nk-gap-4"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="container">
            <div class="nk-gap-6"></div>
            <div class="nk-gap-2"></div>
            <div class="row vertical-gap lg-gap">
                <div class="col-md-4">
                    <div class="nk-ibox">
                        <div class="nk-ibox-icon nk-ibox-icon-circle">
                            <span class="icon-game"></span>
                        </div>
                        <div class="nk-ibox-cont">
                            <h2 class="nk-ibox-title">Игровой сервер</h2>
                            Калькулятор сделан для сервера Asterios.tm
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="nk-ibox">
                        <div class="nk-ibox-icon nk-ibox-icon-circle">
                            <span class="icon-cog"></span>
                        </div>
                        <div class="nk-ibox-cont">
                            <h2 class="nk-ibox-title">Цены уже установлены</h2>
                            Цены на все ресурсы заполнены сразу и обновляются периодично, последнее обновление
                            <b class="color-main-1-important">23.11.2021 19:00</b>. Просто перейди на страницу вещи и увидишь актуальную стоимость крафта.
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="nk-ibox">
                        <div class="nk-ibox-icon nk-ibox-icon-circle">
                            <span class="icon-card"></span>
                        </div>
                        <div class="nk-ibox-cont">
                            <h2 class="nk-ibox-title">Указывай свои цены</h2>
                            В личном кабинете или на странице предмета изменяй цены на ресурсы на свои, что бы расчёт стоимости крафта был максимально точным.
                        </div>
                    </div>
                </div>
            </div>
            <div class="nk-gap-6"></div>
        </div>

        <div class="nk-box bg-dark-1 sd-background">
            <div class="container text-center">
                <div class="nk-gap-3"></div>
                <h2 class="nk-title h1">Калькулятор крафта Asterios</h2>
                <div class="nk-gap-3"></div>

                <p class="lead">Сервис был создан для людей, которые увлекаются крафтом или решили освоить это ремесло. Насколько выгодно крафтить вещь или может лучше продать ресурсы и получишь больший профит? Ответы найдёшь на этом сайте.</p>
                <p class="lead">Слишком скучный дизайн? Включи эпичную анимацию в
                    <a href="{{route('user')}}">личном кабинете</a>.</p>
                <p class="lead">Сервис находится на стадии активной разработки, если нашли баг, несоответствие или есть пожелания - напишите об этом в
                    <a href="{{route('conversations.index')}}">поддержку</a>.</p>


                @if($bossesX1)
                    <div class="nk-tabs" id="rb">
                        <ul class="nav nav-tabs rb-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active color-main-1-important" href="#server-x1" role="tab" data-toggle="tab">x1 - Prime</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link color-main-1-important" href="#server-x5" role="tab" data-toggle="tab">x5 - Asterios</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade show active" id="server-x1">
                                <div class="nk-gap-1"></div>

                                <h2 class="nk-title h1">x1 - Prime</h2>
                                <div class="nk-gap-2"></div>
                                <div class="no-gutters">

                                    @include('pages.index.bosses-tabs', [
                                        'bosses' => $bossesX1,
                                         'server' => 'x1',
                                    ])

                                </div>

                                <div class="nk-gap-1"></div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="server-x5">
                                <div class="nk-gap-1"></div>

                                <h2 class="nk-title h1">x5 - Asterios</h2>
                                <div class="nk-gap-2"></div>
                                <div class="no-gutters">

                                    @include('pages.index.bosses-tabs', [
                                          'bosses' => $bossesX5,
                                          'server' => 'x5',
                                      ])
                                </div>

                                <div class="nk-gap-1"></div>
                            </div>
                        </div>
                    </div>
            </div>
            @endif
        </div>
    </div>

    <div class="nk-box">
        <div class="nk-gap-4"></div>
        <div class="container">
            <div class="text-center">
                <h2 class="nk-title h1">В разработке</h2>
            </div>
        </div>

        <?php

        ?>

        <div class="nk-carousel-2 nk-carousel-x1" data-autoplay="12000" data-dots="true">
            <div class="nk-carousel-inner">
                @foreach($inProgresses as $inProgress)
                    <div>
                        <div>
                            <div class="row">
                                <div class="col-md-8 offset-md-2">
                                    <blockquote class="nk-testimonial">
                                        <div class="nk-testimonial-body">
                                            <em>{{$inProgress}}</em>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="nk-gap-6"></div>
    </div>

@endsection

@push('extra-scripts')
    <script src="/ScrollToPlugin.min.js"></script>
@endpush
