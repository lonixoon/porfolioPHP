<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('lib/jquery-3.2.1.min.js') }}"></script>
    <title>Document</title>
</head>
<body>
<form action="{{ url('/test2/send') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <p><input name="rtf" type="file" required></p>
    <p><button type="submit">Отправить</button></p>
</form>
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>