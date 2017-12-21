@extends('layouts.admin')

@section('content')
    <h2 class="admin-page__title">Мои работы</h2>
    <div class="admin-my-work">
        <form action="{{ url('/admin/work/saveWork') }}" method="post" class="admin-my-work__form"
        enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="text" name="work_name" placeholder="Название проекта" class="admin-my-work__text" required>
            <input type="text" name="work_technology" placeholder="Технологии" class="admin-my-work__text" required>
            <input type="text" name="work_url" placeholder="Ссылка на работу" class="admin-my-work__text" required>
            <input class="admin-my-work__attachment" name="work_photo" type="file" accept="image/jpeg,image/png" required>
            <button type="submit" class="admin-my-work__btn btn btn--green">Добавить</button>
        </form>
    </div>
@endsection