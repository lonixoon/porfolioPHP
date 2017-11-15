@extends('layouts.admin')

@section('content')
    <h2 class="admin-page__title">Блог</h2>
    <div class="admin-blog">
        <h3 class="admin-blog__add">Добавить запись</h3>
        <form action="{{ url('/admin/blog/save') }}" method="post" class="admin-blog__form">
            {{ csrf_field() }}
            <input name="title" type="text" placeholder="Название" class="admin-blog__text">
            {{--<input type="date" placeholder="Дата" class="admin-blog__text" name="date">--}}
            <textarea name="text" placeholder="Содержание" class="admin-blog__text admin-blog__text--textarea"></textarea>
            <button type="submit" class="admin-blog__btn btn btn--green">Добавить</button>
        </form>
    </div>
@stop