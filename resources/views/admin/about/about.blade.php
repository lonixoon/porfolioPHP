@extends('layouts.admin')

@section('content')
    <h2 class="admin-page__title">Обо мне</h2>
    <div class="admin-skills">
        <form action="{{ url('/admin/about/save') }}" method="post">
            {{ csrf_field() }}
            <ul class="admin-skills__list">
                <li class="admin-skills__item">
                    <h4 class="admin-skills__type">Frontend</h4>
                    <ul class="admin-skills__inner-list">
                        <li class="admin-skills__inner-item"><span class="admin-skills__name">HTML5</span>
                            <input name="html5" value="{{ $last_skills->html5 }}" type="number" min="0" max="100"
                                   step="5" class="admin-skills__data"/><span>%</span>
                        </li>
                        <li class="admin-skills__inner-item"><span class="admin-skills__name">CSS3</span>
                            <input name="css3" value="{{ $last_skills->css3 }}" type="number" min="0" max="100" step="5"
                                   class="admin-skills__data"/><span class="admin-skills__pro">%</span>
                        </li>
                        <li class="admin-skills__inner-item"><span class="admin-skills__name">JavaScript</span>
                            <input name="js" value="{{ $last_skills->js }}" type="number" min="0" max="100" step="5"
                                   class="admin-skills__data"/><span class="admin-skills__badge">%</span>
                        </li>
                    </ul>
                </li>
                <li class="admin-skills__item">
                    <h4 class="admin-skills__type">Backend</h4>
                    <ul class="admin-skills__inner-list">
                        <li class="admin-skills__inner-item"><span class="admin-skills__name">PHP</span>
                            <input name="php" value="{{ $last_skills->php }}" type="number" value="" min="0" max="100"
                                   step="5" class="admin-skills__data"/><span class="admin-skills__pro">%</span>
                        </li>
                        <li class="admin-skills__inner-item"><span class="admin-skills__name">mySQL</span>
                            <input name="mysql" value="{{ $last_skills->mysql }}" type="number" min="0" max="100"
                                   step="5" class="admin-skills__data"/><span class="admin-skills__pro">%</span>
                        </li>
                        <li class="admin-skills__inner-item"><span class="admin-skills__name">Node.js</span>
                            <input name="nodejs" value="{{ $last_skills->nodejs }}" type="number" min="0" max="100"
                                   step="5" class="admin-skills__data"/><span class="admin-skills__pro">%</span>
                        </li>
                        <li class="admin-skills__inner-item"><span class="admin-skills__name">Mongo.db</span>
                            <input name="mongodb" value="{{ $last_skills->mongodb }}" type="number" min="0" max="100"
                                   step="5" class="admin-skills__data"/><span class="admin-skills__pro">%</span>
                        </li>
                    </ul>
                </li>
                <li class="admin-skills__item">
                    <h4 class="admin-skills__type">WorkFlow</h4>
                    <ul class="admin-skills__inner-list">
                        <li class="admin-skills__inner-item"><span class="admin-skills__name">Git</span>
                            <input name="git" value="{{ $last_skills->git }}" type="number" min="0" max="100" step="5"
                                   class="admin-skills__data"/><span class="admin-skills__pro">%</span>
                        </li>
                        <li class="admin-skills__inner-item"><span class="admin-skills__name">Gulp</span>
                            <input name="gulp" value="{{ $last_skills->gulp }}" type="number" min="0" max="100" step="5"
                                   class="admin-skills__data"/><span class="admin-skills__pro">%</span>
                        </li>
                        <li class="admin-skills__inner-item"><span class="admin-skills__name">Bower</span>
                            <input name="bower" value="{{ $last_skills->bower }}" type="number" min="0" max="100"
                                   step="5" class="admin-skills__data"/><span class="admin-skills__pro">%</span>
                        </li>
                    </ul>
                </li>
            </ul>
            <button type="submit" class="btn btn--green">Сохранить</button>
        </form>
    </div>
@stop