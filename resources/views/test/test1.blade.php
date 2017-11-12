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
                    <div class="panel-heading">Наши отзывы</div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                @foreach ( $all_post as $value)
                                    <div class="alert alert-info col-md-3">
                                        <div><img src="{{ url($value->file_img) }}" alt="" width="100"></div>
                                        <div>{{ $value->file_name }}</div>
                                    </div>
                                    <div class="col-md-1"></div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
