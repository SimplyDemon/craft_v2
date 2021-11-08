<!--
        START: Navbar

        Additional Classes:
            .nk-navbar-sticky
            .nk-navbar-transparent
            .nk-navbar-autohide
            .nk-navbar-light
            .nk-navbar-no-link-effect
    -->
<nav class="nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-transparent nk-navbar-autohide">
    <div class="container">
        <div class="nk-nav-table">

            <a href="{{route('index')}}" class="nk-nav-logo">
                <img src="{{ asset('vendor/images/logo.png' ) }}" alt="" width="90">
            </a>


            <ul class="nk-nav nk-nav-right d-none d-lg-block" data-nav-mobile="#nk-nav-mobile">
                <li class="{{Route::is('index') ? 'active' : ''}}">
                    <a href="{{route('index')}}">
                        Craft Calc
                    </a>
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
                        <span class="nk-icon-toggle">
                            <span class="nk-icon-toggle-front">
                                <span class="fa fa-sign-in"></span>
                            </span>
                            <span class="nk-icon-toggle-back">
                                <span class="nk-icon-close"></span>
                            </span>
                        </span>
                        </a>
                    </li>
                @endif

                <li class="single-icon">
                    <a href="#" class="nk-search-toggle no-link-effect">
                        <span class="nk-icon-search"></span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<!-- END: Navbar -->
