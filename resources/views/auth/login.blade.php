<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    @include('layouts.css')
    <title>Портфолио</title>
</head>
<body class="page page--index">
<header class="page__header page__header--index">
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