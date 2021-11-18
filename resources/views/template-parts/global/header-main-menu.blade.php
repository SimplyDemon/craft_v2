<nav class="nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-transparent nk-navbar-autohide">
    <div class="container">
        <div class="nk-nav-table">

            <a href="{{route('index')}}" class="nk-nav-logo">
                <img src="{{ asset('images/logo.webp' ) }}" alt="logo" width="90">
            </a>

            <ul class="nk-nav nk-nav-right d-none d-lg-block" data-nav-mobile="#nk-nav-mobile">
                <li class="{{Route::is('index') ? 'active' : ''}}">
                    <a href="{{route('index')}}">
                        Калькулятор крафта
                    </a>
                </li>
                <li>
                    <form action="{{route('search')}}" method="get">
                        @csrf
                        <div class="input-group">
                            <input type="text" class="form-control search-input" name="s" placeholder="Найти..." aria-label="" autocomplete="off">
                        </div>
                    </form>
                    <div class="search_result">
                        <ul id="search_result-ul">

                        </ul>
                    </div>
                </li>

                <li class="{{Route::is('recipes.index') ? 'active' : ''}}">
                    <a href="{{ route('recipes.index') }}">
                        Вещи
                    </a>
                </li>
                @if($isAuth)
                    <li class="nk-drop-item {{Route::is('user') || Route::is('user.price') || Route::is('conversations.index') ? 'active' : ''}}">
                        <a href="{{route('user')}}">
                            Личный кабинет
                        </a>
                        <ul class="dropdown">
                            <li class="{{Route::is('user') ? 'active' : ''}}">
                                <a href="{{route('user')}}">
                                    Аккаунт
                                </a>
                            </li>
                            <li class="{{Route::is('user.price') ? 'active' : ''}}">
                                <a href="{{route('user.price')}}">
                                    Цены
                                </a>
                            </li>
                            <li class="{{Route::is('conversations.index') ? 'active' : ''}}">
                                <a href="{{route('conversations.index')}}">
                                    Поддержка
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>

            <ul class="nk-nav nk-nav-right nk-nav-icons">

                <li class="single-icon d-lg-none">
                    <a href="#" class="no-link-effect" data-nav-toggle="#nk-nav-mobile">
                        <span class="nk-icon-burger">
                            <span class="nk-t-1"></span>
                            <span class="nk-t-2"></span>
                            <span class="nk-t-3"></span>
                        </span>
                    </a>
                </li>

                @if(!$isAuth)
                    <li class="single-icon">
                        <a href="#" class="nk-sign-toggle no-link-effect">
                            <img width="20" src="{{ asset('images/icon-login.svg' ) }}" alt="login">
                        </a>
                    </li>
                @endif

            </ul>
        </div>
    </div>
</nav>
