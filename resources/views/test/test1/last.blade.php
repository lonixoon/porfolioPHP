@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p><a href="{{ url('/test1/create') }}">Оставить отзыв</a></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Последний отзыв</div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div><img src="{{ url($last_post->file_img or '') }}" alt="" width="100"></div>
                                <div>{{$last_post->file_name or 'Отзывов ещё нет'}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
