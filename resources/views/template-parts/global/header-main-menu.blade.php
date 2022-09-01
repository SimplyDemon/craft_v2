<nav class="nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-transparent nk-navbar-autohide">
    <div class="container">
        <div class="nk-nav-table">
            @if(!Route::is('index') )
                <a href="{{route('index')}}" class="nk-nav-logo">
                    @else
                        <div class="nk-nav-logo">
                            @endif
                            <img src="{{ asset('images/logo.webp' ) }}" alt="logo" width="90" height="21">
                        @if(!Route::is('index') )
                </a>
            @else
        </div>
        @endif
        <ul itemscope itemtype="http://schema.org/SiteNavigationElement" class="nk-nav nk-nav-right d-none d-lg-block"
            data-nav-mobile="#nk-nav-mobile">
            <li>
                <form action="{{route('search')}}" method="get">
                    @csrf
                    <div class="input-group">
                        <input type="text" class="form-control search-input" name="s" placeholder="Найти..."
                               aria-label="" autocomplete="off">
                    </div>
                </form>
                <div class="search_result">
                    <ul id="search_result-ul">

                        </ul>
                    </div>
                </li>

            <li class="{{Route::is('recipes.index') ? 'active' : ''}}">
                <a class="color-main-1-hover" itemprop="url" href="{{ route('recipes.index') }}">
                    Предметы
                </a>
            </li>
            <li class="{{Route::is('resources.index') ? 'active' : ''}}">
                <a class="color-main-1-hover" itemprop="url" href="{{ route('resources.index') }}">
                    Ресурсы
                </a>
            </li>
            <li class="nk-drop-item {{Route::is('jewelry.epic') || Route::is('jewelry.tw') || Route::is('bosses_respawn') || Route::is('non_craftable') || Route::is('belt') ? 'active' : ''}}">
                <a class="color-main-1-hover" itemprop="url" href="{{route('user')}}">
                    Разное
                </a>
                <ul itemscope itemtype="http://schema.org/SiteNavigationElement" class="dropdown">
                    <li class="{{Route::is('bosses_respawn') ? 'active' : ''}}">
                        <a class="color-main-1-hover" itemprop="url" href="{{route('bosses_respawn')}}">
                            Респ РБ
                        </a>
                    </li>
                    <li class="{{Route::is('non_craftable') ? 'active' : ''}}">
                        <a class="color-main-1-hover" itemprop="url" href="{{route('non_craftable')}}">
                            Предметы, которые не крафтятся
                        </a>
                    </li>
                    <li class="{{Route::is('jewelry.epic') ? 'active' : ''}}">
                        <a class="color-main-1-hover" itemprop="url" href="{{route('jewelry.epic')}}">
                            Эпик бижа
                        </a>
                    </li>
                    <li class="{{Route::is('jewelry.tw') ? 'active' : ''}}">
                        <a class="color-main-1-hover" itemprop="url" href="{{route('jewelry.tw')}}">
                            ТВ бижа
                        </a>
                    </li>
                    <li class="{{Route::is('belt') ? 'active' : ''}}">
                        <a class="color-main-1-hover" itemprop="url" href="{{route('belt')}}">
                            Пояса
                        </a>
                    </li>
                </ul>
            </li>
            @if($isAuth)
                <li class="nk-drop-item {{Route::is('user') || Route::is('user.price') || Route::is('conversations.index') ? 'active' : ''}}">
                    <a class="color-main-1-hover" itemprop="url" href="{{route('user')}}">
                        Личный кабинет
                    </a>
                    <ul itemscope itemtype="http://schema.org/SiteNavigationElement" class="dropdown">
                        <li class="{{Route::is('user') ? 'active' : ''}}">
                            <a class="color-main-1-hover" itemprop="url" href="{{route('user')}}">
                                Аккаунт
                                </a>
                            </li>
                            <li class="{{Route::is('user.price') ? 'active' : ''}}">
                                <a class="color-main-1-hover" itemprop="url" href="{{route('user.price')}}">
                                    Цены
                                </a>
                            </li>
                            <li class="{{Route::is('conversations.index') ? 'active' : ''}}">
                                <a class="color-main-1-hover" itemprop="url" href="{{route('conversations.index')}}">
                                    Поддержка
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>

            <ul class="nk-nav nk-nav-right nk-nav-icons">

                @if(!$isAuth)
                    <li class="single-icon">
                        <a href="#" class="nk-sign-toggle no-link-effect">
                            <img width="20" height="20" src="{{ asset('images/icon-login.svg' ) }}" alt="login">
                        </a>
                    </li>
                @endif

            </ul>
        </div>
    </div>
</nav>
