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
                    <a href="{{route('recipes.index')}}" class="nk-btn nk-btn-lg nk-btn-color-main-1">
                        <span>Каталог предметов</span>
                    </a>
                    <a href="{{route('bosses_respawn')}}" class="nk-btn nk-btn-lg nk-btn-color-main-1 link-effect-1">
                        Респ РБ
                    </a>
                    <div class="nk-gap-4"></div>
                </div>
            </div>
        </div>
    </div>
</div>
