<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('layouts.css')
    <script src="{{ asset('lib/jquery-3.2.1.min.js') }}"></script>
    <title>Портфолио</title>
</head>
<body class="page page--index">
<div class="preloader">
    <svg class="" xmlns="http://www.w3.org/2000/svg" width="144" height="144">
        <circle class="preloader__circle preloader__circle--big" opacity=".4" fill="none" stroke="#FFF" stroke-width="4"
                stroke-miterlimit="10"
                cx="72" cy="71.999"
                r="70"></circle>
        <circle class="preloader__circle preloader__circle--middle" opacity=".7" fill="none" stroke="#FFF"
                stroke-width="3.894"
                stroke-miterlimit="10" cx="72" cy="72"
                r="55"></circle>
        <circle class="preloader__circle preloader__circle--small" fill="none" stroke="#FFF" stroke-width="4"
                stroke-miterlimit="10" cx="72"
                cy="72" r="40"></circle>
        <text class="preloader__text" transform="translate(51.54 79.013)" fill="#FFF" font-family="sans-serif"
              font-size="24"></text>
    </svg>
</div>
<header class="page__header page__header--index page__header--hide">
    <div class="parallax">
        <div class="parallax__layer parallax__layer--mouse">
            <picture>
                <source srcset="{{ asset('img/parallax/layer_1.png') }}" media="(width: 1200px)">
                <img src="">
            </picture>
        </div>
        <div class="parallax__layer parallax__layer--mouse">
            <picture>
                <source srcset="{{ asset('img/parallax/layer_2.png') }}" media="(min-width: 1200px)">
                <img src="">
            </picture>
        </div>
        <div class="parallax__layer parallax__layer--mouse">
            <picture>
                <source srcset="{{ asset('img/parallax/layer_3.png') }}" media="(min-width: 1200px)">
                <img src="">
            </picture>
        </div>
        <div class="parallax__layer parallax__layer--mouse">
            <picture>
                <source srcset="{{ asset('img/parallax/layer_4.png') }}" media="(min-width: 1200px)">
                <img src="">
            </picture>
        </div>
        <div class="parallax__layer parallax__layer--mouse">
            <picture>
                <source srcset="{{ asset('img/parallax/layer_5.png') }}" media="(min-width: 1200px)">
                <img src="">
            </picture>
        </div>
        <div class="parallax__layer parallax__layer--mouse">
            <picture>
                <source srcset="{{ asset('img/parallax/layer_6.png') }}" media="(min-width: 1200px)">
                <img src="">
            </picture>
        </div>
        <div class="parallax__layer parallax__layer--mouse">
            <picture>
                <source srcset="{{ asset('img/parallax/layer_7.png') }}" media="(min-width: 1200px)">
                <img src="">
            </picture>
        </div>
        <div class="parallax__layer parallax__layer--mouse">
            <picture>
                <source srcset="{{ asset('img/parallax/layer_8.png') }}" media="(min-width: 1200px)">
                <img src="">
            </picture>
        </div>
    </div>
    @if (Route::has('login'))
        @auth
        <a class="authorization-btn authorization-btn--admin  btn btn--login" href="{{ url('/admin/about') }}">Администрирование</a>
        <a href="{{ route('logout') }}" class="authorization-btn authorization-btn--logout btn btn--login"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Выход</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    @else
        <a class="authorization-btn authorization-btn--auth btn btn--login"
           href="{{ url('/') }}">Авторизоваться</a>
        @endauth
    @endif
    <div class="flip">
        <div class="flip__wrap">
            <div class="author flip__front">
                <div class="author__wrap"><img class="author__photo author__photo--index"
                                               src="{{ asset('img/bg/my_photo.jpg') }}" alt="Алексей Сойнов">
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
                            <li class="main-nav__item">
                                <a class="btn btn--main-nav btn--green" href="{{ url('/work') }}">Мои работы</a>
                            </li>

                            <li class="main-nav__item">
                                <a class="btn btn--main-nav btn--green" href="{{ url('/about') }}">Обо мне</a>
                            </li>

                            <li class="main-nav__item">
                                <a class="btn btn--main-nav btn--green" href="{{ url('/blog') }}">Блог</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="authorization flip__back flip__flipper">
                <div class="authorization__wrap">
                    @include('auth.form-auth')
                </div>
            </div>
        </div>
    </div>
</header>
<script src="{{ asset('js/main.js') }}"></script>
{{--@include('layouts.js')--}}
</body>
</html>