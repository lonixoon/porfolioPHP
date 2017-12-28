<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('layouts.css')
    <title>{{ config('app.name', 'Портфолио') }}</title>
</head>
<body class="page">
<div class="preloader">
    <div class="preloader__circle"></div>
    {{--<svg class="" xmlns="http://www.w3.org/2000/svg" width="144" height="144">--}}
        {{--<circle class="preloader__circle preloader__circle--big" opacity=".4" fill="none" stroke="#FFF" stroke-width="4" stroke-miterlimit="10"--}}
                {{--cx="72" cy="71.999"--}}
                {{--r="70"></circle>--}}
        {{--<circle class="preloader__circle preloader__circle--middle" opacity=".7" fill="none" stroke="#FFF" stroke-width="3.894"--}}
                {{--stroke-miterlimit="10" cx="72" cy="72"--}}
                {{--r="55"></circle>--}}
        {{--<circle class="preloader__circle preloader__circle--small" fill="none" stroke="#FFF" stroke-width="4" stroke-miterlimit="10" cx="72"--}}
                {{--cy="72" r="40"></circle>--}}
        {{--<text class="preloader__text" transform="translate(51.54 79.013)" fill="#FFF" font-family="sans-serif" font-size="24"></text>--}}
    {{--</svg>--}}
</div>
<header id="section-0" class="page__header page__header--inner-page page__header--hide">
    <div class="social">
        <ul class="social__list">
            <li class="social__item"><a href="http://vk.com/lonixon" target="_blank"
                                        class="social__link social__link--vk">Вконтакте
                    <svg class="social__icon">
                        <use xlink:href="#icon-vk"></use>
                    </svg>
                </a>
            </li>
            <li class="social__item"><a href="https://github.com/lonixoon" target="_blank"
                                        class="social__link social__link--gh">Гитхаб
                    <svg class="social__icon">
                        <use xlink:href="#icon-github"></use>
                    </svg>
                </a>
            </li>
            <li class="social__item"><a href="#" class="social__link social__link--in">Ин
                    <svg class="social__icon">
                        <use xlink:href="#icon-in"></use>
                    </svg>
                </a>
            </li>
        </ul>
    </div>
    <nav class="main-nav main-nav--inner-page">
        <button type="button" class="main-nav__toggle"><span>Меню</span></button>
        <ul class="main-nav__list main-nav__list--full-screen">
            <li class="main-nav__item main-nav__item--inner-page"><a href="{{ url('/work') }}">Мои работы</a></li>
            <li class="main-nav__item main-nav__item--inner-page"><a href="{{ url('/blog') }}">Блог</a></li>
            <li class="main-nav__item main-nav__item--inner-page"><a href="{{ url('/about') }}">Обо мне</a></li>
            <li class="main-nav__item main-nav__item--inner-page"><a href="{{ url('/') }}">На главную</a></li>
        </ul>
    </nav>
    <div class="author author--inner-page">
        <div class="author__inner-page-wrap">
            <img src="{{ asset('img/bg/my_photo.jpg') }}" alt="Сойнво Алексей" class="author__photo">
            <p class="author__name">Сойнов Алексей</p>
            <p class="author__title">Личный сайт веб разработчика</p>
        </div>
    </div>
    <a href="#main" class="arrow-down">
        <svg class="arrow-down__icon arrow-down__icon--down">
            <use xlink:href="#icon-arrow_down"></use>
        </svg>
    </a>
    <div class="page__title-wrap">
        <svg class="page__icon-corner">
            <use xlink:href="#icon-corner"></use>
        </svg>
        @yield('title')
    </div>
</header>
<main id="main" class="page__main page__main--hide">
    <div id="section-1" class="page__section"></div>
    @yield('content')
    <a href="#section-0" class="arrow-down arrow-down--up">
        <svg class="arrow-down__icon arrow-down__icon--up">
            <use xlink:href="#icon-arrow_down"></use>
        </svg>
    </a>
</main>
<footer class="page__footer page__footer--hide">
    <nav class="main-nav main-nav--footer">
        <ul class="main-nav__list main-nav__list--footer">
            <li class="main-nav__item"><a href="{{ url('/work') }}" class="main-nav__link">Мои работы</a></li>
            <li class="main-nav__item"><a href="{{ url('/blog') }}" class="main-nav__link">Блог</a></li>
            <li class="main-nav__item"><a href="{{ url('/about') }}" class="main-nav__link">Обо мне</a></li>
            <li class="main-nav__item"><a href="{{ url('/') }}" class="main-nav__link">На главную</a></li>
        </ul>
    </nav>
    <div class="social social--footer">
        <ul class="social__list social__list--footer">
            <li class="social__item"><a href="http://vk.com/lonixon" target="_blank"
                                        class="social__link social__link--vk">Вконтакте
                    <svg class="social__icon social__icon--round">
                        <use xlink:href="#icon-vk_round"></use>
                    </svg>
                </a></li>
            <li class="social__item"><a href="https://github.com/lonixoon" target="_blank"
                                        class="social__link social__link--gh">Гитхаб
                    <svg class="social__icon social__icon--round">
                        <use xlink:href="#icon-github_round"></use>
                    </svg>
                </a></li>
            <li class="social__item"><a href="#" class="social__link social__link--in">Ин
                    <svg class="social__icon social__icon--round">
                        <use xlink:href="#icon-in_round"></use>
                    </svg>
                </a></li>
        </ul>
    </div>
    <div class="about-footer">
        <p class="about-footer__text">Я веб разработчик из Новосибирска.
            <br> Этот сайт делаю в рамках учебного проекта.</p>
        <p class="about-footer__text">Свёрстано мной.</p>
    </div>
</footer>
@include('layouts.js')
</body>
</html>