@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <p><a href="{{ url('/test1') }}">Перейти к отзывам</a></p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Форма обратной связи</div>

                    <div class="panel-body">
                        {{--                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">--}}
                        <form class="form-horizontal" method="POST" action="{{ url('/test1/send') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="file_name" class="col-md-4 control-label">Название</label>

                                <div class="col-md-6">
                                    <input id="file_name" type="text" class="form-control" name="file_name" required
                                           autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="file_img" class="col-md-4 control-label">Загрузить картинку</label>

                                <div class="col-md-6">
                                    <input id="file_img" type="file" class="form-control" name="file_img">
                                    @foreach($errors->all() as $error)
                                        <div class="text-danger">{{$error}}</div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">Отправить</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
