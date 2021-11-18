<nav class="nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-transparent nk-navbar-autohide">
    <div class="container">
        <div class="nk-nav-table">

            <a href="{{route('index')}}" class="nk-nav-logo">
                <img src="{{ asset('images/logo.webp' ) }}" alt="" width="90">
            </a>

            <ul class="nk-nav nk-nav-right d-none d-lg-block" data-nav-mobile="#nk-nav-mobile">
                <li class="{{Route::is('index') ? 'active' : ''}}">
                    <a href="{{route('index')}}">
                        Craft Calc
                    </a>
                </li>
                <li>
                    <form action="{{route('search')}}" method="get">
                        @csrf
                        <div class="input-group">
                            <input type="text" class="form-control search-input" name="s" placeholder="Найти..." aria-label="" aria-describedby="basic-addon1" autocomplete="off">
                        </div>
                    </form>
                    <div class="search_result">
                        <ul id="search_result-ul">

                        </ul>
                    </div>
                </li>
                <style>
                    .search_result {
                        position: absolute;
                        z-index: 2;
                        top: calc(100% - 5px);
                        left: 0;
                        width: 100%;
                        background-color: #0e0e0e;;
                        border-radius: 0 0 5px 5px;
                        overflow: hidden;
                    }
                </style>
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
                            <img width="20px" src="{{ asset('images/icon-login.svg' ) }}" alt="login">
                        </a>
                    </li>
                @endif

            </ul>
        </div>
    </div>
</nav>
