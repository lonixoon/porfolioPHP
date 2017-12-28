<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    @include('layouts.css')
    <title>Портфолио</title>
</head>
<body class="page page--index">
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
<header class="page__header page__header--index page__header--hide">
    <div class="parallax">
        <div class="parallax__layer parallax__layer--mouse"><img src="{{ asset('img/parallax/layer_1.png') }}"></div>
        <div class="parallax__layer parallax__layer--mouse"><img src="{{ asset('img/parallax/layer_2.png') }}"></div>
        <div class="parallax__layer parallax__layer--mouse"><img src="{{ asset('img/parallax/layer_3.png') }}"></div>
        <div class="parallax__layer parallax__layer--mouse"><img src="{{ asset('img/parallax/layer_4.png') }}"></div>
        <div class="parallax__layer parallax__layer--mouse"><img src="{{ asset('img/parallax/layer_5.png') }}"></div>
        <div class="parallax__layer parallax__layer--mouse"><img src="{{ asset('img/parallax/layer_6.png') }}"></div>
        <div class="parallax__layer parallax__layer--mouse"><img src="{{ asset('img/parallax/layer_7.png') }}"></div>
        <div class="parallax__layer parallax__layer--mouse"><img src="{{ asset('img/parallax/layer_8.png') }}"></div>
    </div>
    <div class="authorization">
        <div class="authorization__wrap authorization__wrap--login-page">
            @include('auth.form-auth')
        </div>
    </div>
</header>
@include('layouts.js')
</body>
</html>