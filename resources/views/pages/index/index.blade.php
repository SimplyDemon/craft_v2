@extends('layouts.app')
@section('content')
    <div class="nk-main">
        <!-- START: Header Title -->
        <div class="nk-header-title nk-header-title-lg nk-header-title-parallax nk-header-title-parallax-opacity">
            <div class="bg-image">
                <img src="{{ asset('images/index.webp' ) }}" alt="" class="jarallax-img">
            </div>
            <div class="nk-header-table">
                <div class="nk-header-table-cell">
                    <div class="container">
                        <div class="nk-header-text">
                            <h1 class="nk-title display-3">Craft Calc</h1>
                            <div class="nk-gap-2"></div>
                            <a href="{{route('recipes.index')}}" class="nk-btn nk-btn-lg nk-btn-color-main-1 link-effect-4">
                                <span>Каталог предметов</span>
                            </a>
                            <div class="nk-gap-4"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- END: Header Title -->

        <!-- START: Features -->
        <div class="container">
            <div class="nk-gap-6"></div>
            <div class="nk-gap-2"></div>
            <div class="row vertical-gap lg-gap">
                <div class="col-md-4">
                    <div class="nk-ibox">
                        <div class="nk-ibox-icon nk-ibox-icon-circle">
                            <span class="ion-ios-game-controller-b"></span>
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
                            <span class="ion-fireball"></span>
                        </div>
                        <div class="nk-ibox-cont">
                            <h2 class="nk-ibox-title">Цены уже установлены</h2>
                            Цены на все ресурсы заполнены сразу и обновляются периодично. Просто перейди на страницу вещи и увидишь актуальную стоимость крафта.
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="nk-ibox">
                        <div class="nk-ibox-icon nk-ibox-icon-circle">
                            <span class="ion-ribbon-a"></span>
                        </div>
                        <div class="nk-ibox-cont">
                            <h2 class="nk-ibox-title">Указывай свои цены</h2>
                            В личном кабинете изменяй цены на ресурсы на свои, что бы расчёт стоимости крафта был максимально точным.
                        </div>
                    </div>
                </div>
            </div>
            <div class="nk-gap-2"></div>
            <div class="nk-gap-6"></div>
        </div>
        <!-- END: Features -->

        <!-- START: About -->
        <div class="nk-box bg-dark-1">
            <div class="container text-center">
                <div class="nk-gap-6"></div>
                <div class="nk-gap-2"></div>
                <h2 class="nk-title h1">О сервисе</h2>
                <div class="nk-gap-3"></div>

                <p class="lead">Калькулятор крафта был создан для людей, которые увлекаются крафтом или решили освоить это ремесло. Насколько выгодно крафтить вещь или может лучше продать ресурсы и получишь больший профит? Ответы найдёшь на этом сайте.</p>
                <p class="lead">Сервис находится на стадии активной разработки, если нашли баг, несоответствие или есть пожелания - напишите об этом в
                    <a href="{{route('conversations.index')}}">поддержку</a>.</p>

                <div class="nk-gap-2"></div>
                <div class="row no-gutters">
                    <div class="col-md-4">

                    </div>
                    <div class="col-md-4">
                        <div class="nk-box-2">
                            <!-- START: Counter -->
                            <div class="nk-counter-3">
                                <div class="nk-count">{{\App\Models\Recipe::all()->count()}}</div>
                                <h3 class="nk-counter-title h4">Количество вещей</h3>
                                <div class="nk-gap-1"></div>
                            </div>
                            <!-- END: Counter -->
                        </div>
                    </div>
                    <div class="col-md-4">

                    </div>
                </div>
                <div class="nk-gap-4"></div>
            </div>
        </div>
        <!-- END: About -->
        <div class="nk-box">
            <div class="nk-gap-4"></div>
            <div class="container">
                <div class="text-center">
                    <h2 class="nk-title h1">В разработке</h2>
                    <div class="nk-title-sep-icon">
                        <span class="icon"><span class="ion-fireball"></span></span>
                    </div>
                </div>
            </div>

        <?php
        $inProgresses = [
            'Поправить баги бета версии.',
            'Выпустить стабильный продакшен',
            'Доработать чат.',
            'Книга рецептов - возможность добавлять рецепты в личный кабинет.',
            'Добавить блог для публикации статей, инфы о ченджлогах.',
        ];
        ?>

        <!-- START: Carousel -->
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
    </div>
@endsection
