<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('lib/jquery-3.2.1.min.js') }}"></script>
    <title>Document</title>
    <style>
        html, body {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            font-size: 15px;
            background: #EBEFF2;
        }
        .container {
            padding: 0 10px 10px 10px;
        }
        .problem-list {
            list-style: none;
            padding: 0;
        }

        .problem-list__item {
            background: #ffffff;
            border: 1px solid #aaa;
            border-radius: 5px;
            margin-bottom: 10px;
            padding: 10px;
            font-family: sans-serif;
        }

    </style>
</head>
<body>
<div class="container">
    <form action="{{ url('/test2') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <p><input name="rtf" type="file" required></p>
        <p>
            <button type="submit">Отправить</button>
        </p>
    </form>
    @yield('content')
</div>
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>