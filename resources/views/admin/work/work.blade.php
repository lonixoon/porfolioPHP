@extends('layouts.admin')

@section('content')
    <h2 class="admin-page__title">Мои работы</h2>
    <div class="admin-my-work">
        <h3 class="admin-my-work__add">Добавить работу</h3>
        <form class="admin-my-work__form">
            <input type="text" placeholder="Название проекта" class="admin-my-work__text">
            <input type="text" placeholder="Технологии" class="admin-my-work__text">
            <label class="admin-my-work__attachment">Загрузить картинку
                <input type="file" accept="image/jpeg,image/png">
            </label>
            <button type="submit" class="admin-my-work__btn btn btn--green">Добавить</button>
        </form>
    </div>
@endsection