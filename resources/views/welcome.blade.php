<!DOCTYPE html>
<html lang="lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <link href="{{ url('css/styles.min.css') }}" rel="stylesheet"/>
    <script src="{{ url('lib/jquery-3.2.1.slim.min.js') }}"></script>
    <title>Портфолио</title>
</head>
<body class="page page--index">
<header class="page__header page__header--index">
    <div class="parallax">
        <div class="parallax__layer parallax__layer--mouse"><img src="{{ url('img/parallax/layer_1.png') }}"/></div>
        <div class="parallax__layer parallax__layer--mouse"><img src="{{ url('img/parallax/layer_2.png') }}"/></div>
        <div class="parallax__layer parallax__layer--mouse"><img src="{{ url('img/parallax/layer_3.png') }}"/></div>
        <div class="parallax__layer parallax__layer--mouse"><img src="{{ url('img/parallax/layer_4.png') }}"/></div>
        <div class="parallax__layer parallax__layer--mouse"><img src="{{ url('img/parallax/layer_5.png') }}"/></div>
        <div class="parallax__layer parallax__layer--mouse"><img src="{{ url('img/parallax/layer_6.png') }}"/></div>
        <div class="parallax__layer parallax__layer--mouse"><img src="{{ url('img/parallax/layer_7.png') }}"/></div>
        <div class="parallax__layer parallax__layer--mouse"><img src="{{ url('img/parallax/layer_8.png') }}"/></div>
    </div>
    @if (Route::has('login'))
        @auth
        <a class="authorization-btn btn btn--login" href="{{ url('/authorization.html') }}">Администрирование</a>
        <a href="{{ route('logout') }}" class="authorization-btn btn btn--login"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Выход</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    @else
        <a class="authorization-btn btn btn--login" href="{{ url('/authorization.html') }}">Авторизоваться</a>
        @endauth
    @endif
    <div class="flip">
        <div class="flip__wrap">
            <div class="author flip__front">
                <div class="author__wrap"><img class="author__photo author__photo--index"
                                               src="{{ url('img/bg/my_photo.jpg') }}" alt="Алексей Сойнов"/>
                    <p class="author__name author__name--index">Сойнов Алексей</p>
                    <p class="author__title">Личный сайт веб разработчика</p>
                    <div class="social">
                        <ul class="social__list social__list--index">
                            <li class="social__item"><a class="social__link social__link--vk"
                                                        href="http://vk.com/lonixon" target="_blank">Вконтакте
                                    <svg class="social__icon social__icon--green">
                                        <use xlink:href="#icon-vk"></use>
                                    </svg>
                                </a></li>
                            <li class="social__item"><a class="social__link social__link--gh"
                                                        href="https://github.com/lonixoon" target="_blank">Гитхаб
                                    <svg class="social__icon social__icon--green">
                                        <use xlink:href="#icon-github"></use>
                                    </svg>
                                </a></li>
                            <li class="social__item"><a class="social__link social__link--in" href="#">Ин
                                    <svg class="social__icon social__icon--green">
                                        <use xlink:href="#icon-in"></use>
                                    </svg>
                                </a></li>
                        </ul>
                    </div>
                    <nav class="main-nav">
                        <ul class="main-nav__list main-nav__list--index-page">
                            <li class="main-nav__item"><a class="btn btn--main-nav btn--green" href="my-work.html">Мои
                                    работы</a></li>
                            <li class="main-nav__item"><a class="btn btn--main-nav btn--green" href="about.html">Обо
                                    мне</a></li>
                            <li class="main-nav__item"><a class="btn btn--main-nav btn--green" href="blog.html">Блог</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="authorization flip__back flip__flipper">
                <div class="authorization__wrap">
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
                                       value="{{ old('email') }}" required/>
                            </div>
                            <div class="authorization__input-text-wrap">
                                <label class="authorization__icon-wrap" for="password">
                                    <svg class="authorization__icon-password">
                                        <use xlink:href="#icon-password"></use>
                                    </svg>
                                </label>
                                <input class="authorization__input-text" type="password" name="password"
                                       placeholder="Пароль"
                                       id="password" required/>
                            </div>
                        </div>
                        <div class="authorization__test">
                            <input type="checkbox" id="human"/>
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
                        <div class="authorization__btn"><a class="btn btn--authorization btn--green"
                                                           href="{{ url('/') }}">На
                                главную</a>
                            <button type="submit" class="btn btn--authorization btn--green">Войти</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
<script src="{{ url('js/main.min.js') }}"></script>
</body>
</html>