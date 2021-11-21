<footer class="nk-footer nk-footer-parallax nk-footer-parallax-opacity">
    <img class="nk-footer-top-corner" src="{{ asset('images/footer-corner.webp' ) }}" alt="footer-corner">


    <div class="container">
        <div class="nk-gap-2"></div>
        <div class="nk-footer-logos">
            <a href="{{route('index')}}">
                <img class="nk-img" src="{{ asset('images/logo.webp' ) }}" alt="craft_logo" width="120" height="28">
            </a>
        </div>
        <div class="nk-gap"></div>

        <p>
            &copy; 2021
        </p>

        <div class="nk-gap-4"></div>
    </div>
</footer>

<div class="nk-sign-form">
    <div class="nk-gap-5"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4 col-md-6 offset-md-3">
                <div class="nk-sign-form-container">
                    <div class="nk-sign-form-toggle h3">
                        <a href="#" class="nk-sign-form-login-toggle active">Войти</a>
                        <a href="#" class="nk-sign-form-register-toggle">Зарегистрироваться</a>
                    </div>
                    <div class="nk-gap-2"></div>

                    <form method="post" class="nk-sign-form-login active" action="{{ route('login') }}">
                        @csrf
                        <input class="form-control" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email">
                        <div class="nk-gap-2"></div>

                        <input class="form-control" type="password" placeholder="Пароль" name="password"
                               required autocomplete="current-password">
                        <div class="nk-gap-2"></div>

                        <div class="form-check float-left">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="remember"
                                       id="remember" {{ old('remember') ? 'checked' : '' }}>
                                Запомнить меня
                            </label>
                        </div>
                        <button class="nk-btn nk-btn-color-white link-effect-4 float-right">Log In</button>

                        <div class="clearfix"></div>
                        <div class="nk-gap-1"></div>
                    </form>

                    <form class="nk-sign-form-register" method="POST" action="{{ route('register') }}">
                        @csrf
                        <input class="form-control" type="text" placeholder="Имя" name="name"
                               value="{{ old('name') }}" required autocomplete="name" autofocus>
                        <div class="nk-gap-2"></div>

                        <input class="form-control" type="email" placeholder="Email" name="email"
                               value="{{ old('email') }}" required autocomplete="email">
                        <div class="nk-gap-2"></div>

                        <input class="form-control" type="password" placeholder="Пароль" name="password" required autocomplete="new-password">
                        <div class="nk-gap-2"></div>

                        <input class="form-control" type="password" placeholder="Подтвердите пароль" name="password_confirmation" required autocomplete="new-password">
                        <div class="nk-gap-2"></div>
                        <button class="nk-btn nk-btn-color-white link-effect-4 float-right">Регистрация</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div class="nk-gap-5"></div>
</div>
