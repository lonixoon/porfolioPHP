<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <script src="{{ asset('lib/jquery-3.2.1.min.js') }}"></script>
    <title>Портфолио</title>
</head>
<body class="page page--index">
<header class="page__header page__header--index">
    <div class="parallax">
        <div class="parallax__layer parallax__layer--mouse"><img src="{{ asset('img/parallax/layer_1.png') }}"/></div>
        <div class="parallax__layer parallax__layer--mouse"><img src="{{ asset('img/parallax/layer_2.png') }}"/></div>
        <div class="parallax__layer parallax__layer--mouse"><img src="{{ asset('img/parallax/layer_3.png') }}"/></div>
        <div class="parallax__layer parallax__layer--mouse"><img src="{{ asset('img/parallax/layer_4.png') }}"/></div>
        <div class="parallax__layer parallax__layer--mouse"><img src="{{ asset('img/parallax/layer_5.png') }}"/></div>
        <div class="parallax__layer parallax__layer--mouse"><img src="{{ asset('img/parallax/layer_6.png') }}"/></div>
        <div class="parallax__layer parallax__layer--mouse"><img src="{{ asset('img/parallax/layer_7.png') }}"/></div>
        <div class="parallax__layer parallax__layer--mouse"><img src="{{ asset('img/parallax/layer_8.png') }}"/></div>
    </div>
    <div class="authorization">
        <div class="authorization__wrap authorization__wrap--login-page">
            <form class="authorization__form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <div class="authorization__title-wrap">
                    <h1 class="authorization__title">Авторизуйтесь</h1>
                </div>
                <div class="authorization__login">
                    <div class="authorization__input-text-wrap">
                        <label class="authorization__icon-wrap" for="login">
                            <svg class="authorization__icon-login">
                                <use xlink:href="#icon-login"></use>
                            </svg>
                        </label>
                        <input class="authorization__input-text" type="email" name="email" placeholder="Логин"
                               id="email"
                               value="{{ old('email') }}" required>
                    </div>
                    <div class="authorization__input-text-wrap">
                        <label class="authorization__icon-wrap" for="password">
                            <svg class="authorization__icon-password">
                                <use xlink:href="#icon-password"></use>
                            </svg>
                        </label>
                        <input class="authorization__input-text" type="password" name="password"
                               placeholder="Пароль"
                               id="password" required>
                    </div>
                </div>
                <div class="authorization__test">
                    <input type="checkbox" id="human">
                    <label class="authorization__checkbox checkbox" for="human">Я человек</label>
                    <p class="authorization__test-robot">Вы точно не робот?</p>
                    <div class="authorization__radio">
                        <input type="radio" id="authorization-yes" name="authorization"/>
                        <label class="authorization__radio-btn radio" for="authorization-yes"
                               name="authorization">Да</label>
                        <input type="radio" id="authorization-no" name="authorization"/>
                        <label class="authorization__radio-btn radio" for="authorization-no">Не уверен</label>
                    </div>
                </div>
                <div class="authorization__btn">
                    <a class="btn btn--authorization btn--green" href="{{ url('/') }}">На главную</a>
                    <button type="submit" class="btn btn--authorization btn--green">Войти</button>
                </div>
            </form>
        </div>
    </div>
</header>
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>