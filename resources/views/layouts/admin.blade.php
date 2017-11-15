<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <script src="{{ asset('lib/jquery-3.2.1.min.js') }}"></script>
    <title>{{ config('app.name', 'Администрирование') }}</title>
</head>
<body class="admin-page">
<header class="admin-page__header">
    <div class="admin-navbar"><a href="{{ url('/') }}" class="admin-navbar__back-site">Вернуться на сайт</a>
        <h1 class="admin-navbar__tile">Панель администрирования</h1>
    </div>
    <nav class="admin-nav">
        <ul class="admin-nav__list">
            <li class="admin-nav__item"><a href="{{ url('/admin/about') }}">Обо мне</a></li>
            <li class="admin-nav__item"><a href="{{ url('/admin/work') }}">Мои работы</a></li>
            <li class="admin-nav__item"><a href="{{ url('/admin/blog') }}">Блог</a></li>
        </ul>
    </nav>
</header>
<main class="admin-page__main">
    @yield('content')
</main>
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>