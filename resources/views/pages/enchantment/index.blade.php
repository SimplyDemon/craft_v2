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
            <style>
                .swiper-button-next, .swiper-button-prev {
                    color: aqua;
                    top: 152px;
                    margin-top: 0;
                }

                .swiper-pagination {
                    position: inherit;
                    width: 80% !important;
                    margin: 30px auto 30px;
                }

                .enchantment-item {
                    margin-top: 10px;
                    border: 2px solid #8b5151;
                    padding: 10px;
                    display: inline-block;
                }

                .enchantment-item-container {
                    text-align: center;
                }

                .recipes-list__enchant-button:focus {
                    outline: none;
                }

                .enchantment-item-container {
                    display: flex;
                    justify-content: center;
                }

                .enchantment-item-container__reset {
                    align-self: center;
                }

                .enchantment-item__change {
                    display: flex;
                    align-items: baseline;
                    justify-content: space-around;
                }

                .enchantment-item__change-value {
                    width: 50%;
                }

                .enchantment-item__color-green {
                    color: #17ea17;
                }
            </style>
            <div class="weapon-types">
                <button class="nk-btn nk-btn-lg nk-btn-color-main-1 enchantment-category-button" data-key="sword">
                    <span>Мечи</span>
                </button>
                <button
                    class="nk-btn nk-btn-lg nk-btn-color-main-1 enchantment-category-button" data-key="swordTwoHands">
                    Мечи двуручные
                </button>
                <button class="nk-btn nk-btn-lg nk-btn-color-main-1 enchantment-category-button" data-key="blunt">
                    Ударное
                </button>
                <button class="nk-btn nk-btn-lg nk-btn-color-main-1 enchantment-category-button"
                        data-key="bluntTwoHands">
                    Ударное двуручное
                </button>
                <button class="nk-btn nk-btn-lg nk-btn-color-main-1 enchantment-category-button" data-key="bow">
                    Луки
                </button>
                <button class="nk-btn nk-btn-lg nk-btn-color-main-1 enchantment-category-button" data-key="dagger">
                    Кинжалы
                </button>
                <button class="nk-btn nk-btn-lg nk-btn-color-main-1 enchantment-category-button" data-key="polearm">
                    Копья
                </button>
                <button class="nk-btn nk-btn-lg nk-btn-color-main-1 enchantment-category-button" data-key="fist">
                    Кастеты
                </button>
                <button class="nk-btn nk-btn-lg nk-btn-color-main-1 enchantment-category-button" data-key="dualSword">
                    Дуал мечи
                </button>
                <button class="nk-btn nk-btn-lg nk-btn-color-main-1 enchantment-category-button" data-key="dualDagger">
                    Дуал дагеры
                </button>
                <button class="nk-btn nk-btn-lg nk-btn-color-main-1 enchantment-category-button" data-key="magic">
                    Магическое оружие
                </button>
            </div>
            <div class="recipe-list">
                @foreach($recipesWeapon as $key => $recipes)
                    @include('pages.enchantment.parts.index.recipe-list', [
                       'key' => $key,
                       'recipes' => $recipes,
                    ])
                @endforeach
            </div>
            <div class="enchantment-item-container">
                <div class="">
                    <div class="enchantment-item">
                        <div>
                            <a class="enchantment-item__url" href="https://craft.test/recipes/blood-brother">
                                <img class="rounded enchantment-item__img" width="32"
                                     src="https://craft.test/storage/uploads/item/weapon/sword/Blood Brother.webp"
                                     alt="Blood Brother">
                                <span class="enchantment-item__title">Blood Brother</span>
                            </a>

                            <img class="enchantment-item__grade-img"
                                 src="https://craft.test/storage/uploads/grade/S.png" alt="grade">
                        </div>

                        <div>
                            <img class="rounded enchantment-item__soulshot-img" height="18px"
                                 src="https://craft.test/storage/uploads/other/Soulshot (S-grade).webp" alt="soul shot">
                            Физ
                            атака:
                            <span class="nk-btn-color-main-1 enchantment-item__p-attack">405</span>
                            <span class="enchantment-item__p-attack-extra enchantment-item__color-green"></span>
                        </div>
                        <div>
                            <img class="rounded enchantment-item__spiritshot-img" height="18px"
                                 src="https://craft.test/storage/uploads/other/Blessed Spiritshot (S-grade).webp"
                                 alt="spirit shots"> Маг атака:

                            <span class="nk-btn-color-main-1 enchantment-item__m-attack">151</span>
                            <span class="enchantment-item__m-attack-extra enchantment-item__color-green"></span>
                        </div>
                        <div class="form-group enchantment-item__change">
                            <label class="enchantment-item__change-label" for="enchantment-change-value">Заточка
                                +</label>
                            <input id="enchantment-change-value" class="enchantment-item__change-value form-control"
                                   type="number" min="0" max="16" value="0">
                        </div>
                        <div class="form-group enchantment-item__chance">
                            <span class="enchantment-item__chance-text">Вероятность: <span
                                    class="enchantment-item__chance-value"></span>%</span>
                        </div>
                    </div>
                </div>
            </div>
            <button class="sd-test">1111111</button>
            <div class="nk-gap-4"></div>
            <div class="nk-gap-3"></div>
        </div>

    </div>

@endsection
