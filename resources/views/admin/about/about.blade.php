@extends('layouts.admin')

@section('content')
    <h2 class="admin-page__title">Обо мне</h2>
    <div class="admin-skills">
        <ul class="admin-skills__list">
            <li class="admin-skills__item">
                <h4 class="admin-skills__type">Frontend</h4>
                <ul class="admin-skills__inner-list">
                    <li class="admin-skills__inner-item"><span class="admin-skills__name">HTML5</span>
                        <input type="number" class="admin-skills__data"/><span>%</span>
                    </li>
                    <li class="admin-skills__inner-item"><span class="admin-skills__name">CSS3</span>
                        <input type="number" class="admin-skills__data"/><span class="admin-skills__pro">%</span>
                    </li>
                    <li class="admin-skills__inner-item"><span class="admin-skills__name">JavaScript</span>
                        <input type="number" class="admin-skills__data"/><span class="admin-skills__badge">%</span>
                    </li>
                </ul>
            </li>
            <li class="admin-skills__item">
                <h4 class="admin-skills__type">Backend</h4>
                <ul class="admin-skills__inner-list">
                    <li class="admin-skills__inner-item"><span class="admin-skills__name">PHP</span>
                        <input type="number" class="admin-skills__data"/><span class="admin-skills__pro">%</span>
                    </li>
                    <li class="admin-skills__inner-item"><span class="admin-skills__name">mySQL</span>
                        <input type="number" class="admin-skills__data"/><span class="admin-skills__pro">%</span>
                    </li>
                    <li class="admin-skills__inner-item"><span class="admin-skills__name">Node.js</span>
                        <input type="number" class="admin-skills__data"/><span class="admin-skills__pro">%</span>
                    </li>
                    <li class="admin-skills__inner-item"><span class="admin-skills__name">Mongo.db</span>
                        <input type="number" class="admin-skills__data"/><span class="admin-skills__pro">%</span>
                    </li>
                </ul>
            </li>
            <li class="admin-skills__item">
                <h4 class="admin-skills__type">WorkFlow</h4>
                <ul class="admin-skills__inner-list">
                    <li class="admin-skills__inner-item"><span class="admin-skills__name">Git</span>
                        <input type="number" class="admin-skills__data"/><span class="admin-skills__pro">%</span>
                    </li>
                    <li class="admin-skills__inner-item"><span class="admin-skills__name">Gulp</span>
                        <input type="number" class="admin-skills__data"/><span class="admin-skills__pro">%</span>
                    </li>
                    <li class="admin-skills__inner-item"><span class="admin-skills__name">Bower</span>
                        <input type="number" class="admin-skills__data"/><span class="admin-skills__pro">%</span>
                    </li>
                </ul>
            </li>
        </ul>
        <button type="submit" class="btn btn--green">Сохранить</button>
    </div>
@stop