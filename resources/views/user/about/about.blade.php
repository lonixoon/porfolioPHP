@extends('layouts.user')

@section('title')
    <svg class="page__icon-title">
        <use xlink:href="#icon-about_header"></use>
    </svg>
    <h1 class="page__title">Обо мне</h1>
@endsection

@section('content')
    <section class="about">
        <article class="who-am-i">
            <div class="who-am-i__author-photo">
                @include('user.about.include.author-photo')
            </div>
            <div class="who-am-i__title-wrap">
                <h3 class="who-am-i__title">Кто я</h3>
            </div>
            <p class="who-am-i__text">Я начинающий веб разработчик из Новосибирска. Учусь разрабатывать современные и
                удобные сайты. Мне нравятся интересные и сложные проекты.</p>
            <p class="who-am-i__text">Этот сайт я сделал в рамках учебного проекта. Чуть позже он наполнится контентом,
                а пока просто посмотрите как тут все красиво!</p>
        </article>
        <article class="skills">
            <div class="skills__title-wrap">
                <h3 class="skills__title">Чем я могу быть<br> вам полезен</h3>
            </div>
            <p class="skills__text">Больше меня привлекает Frontend, но я так же знаком и могу решать не сложные задачи
                по Backend.</p>
            <ul class="skills__list">
                <li class="skills__item">
                    <h4 class="skills__type">Frontend</h4>
                    <ul class="skills__inner-list">
                        <li class="skills__inner-item">
                            <svg class="skills__circle svg skills__circle--gray">
                                <circle r="45px" cx="55px" cy="55px"></circle>
                            </svg>
                            <svg class="skills__circle svg skills__circle--green skills__circle--html">
                                <circle r="45px" cx="55px" cy="55px"></circle>
                            </svg>
                            <span class="skills__name">HTML5</span>
                        </li>
                        <li class="skills__inner-item">
                            <svg class="skills__circle svg skills__circle--gray">
                                <circle r="45px" cx="55px" cy="55px"></circle>
                            </svg>
                            <svg class="skills__circle svg skills__circle--green skills__circle--css">
                                <circle r="45px" cx="55px" cy="55px"></circle>
                            </svg>
                            <span class="skills__name">CSS3</span>
                        </li>
                        <li class="skills__inner-item">
                            <svg class="skills__circle svg skills__circle--gray">
                                <circle r="45px" cx="55px" cy="55px"></circle>
                            </svg>
                            <svg class="skills__circle svg skills__circle--green skills__circle--js">
                                <circle r="45px" cx="55px" cy="55px"></circle>
                            </svg>
                            <span class="skills__name">JavaScript<br> &amp; jQuery</span>
                        </li>
                    </ul>
                </li>
                <li class="skills__item">
                    <h4 class="skills__type">Backend</h4>
                    <ul class="skills__inner-list">
                        <li class="skills__inner-item">
                            <svg class="skills__circle svg skills__circle--gray">
                                <circle r="45px" cx="55px" cy="55px"></circle>
                            </svg>
                            <svg class="skills__circle svg skills__circle--green skills__circle--php">
                                <circle r="45px" cx="55px" cy="55px"></circle>
                            </svg>
                            <span class="skills__name">PHP</span>
                        </li>
                        <li class="skills__inner-item">
                            <svg class="skills__circle svg skills__circle--gray">
                                <circle r="45px" cx="55px" cy="55px"></circle>
                            </svg>
                            <svg class="skills__circle svg skills__circle--green skills__circle--sql">
                                <circle r="45px" cx="55px" cy="55px"></circle>
                            </svg>
                            <span class="skills__name">mySQL</span>
                        </li>
                        <li class="skills__inner-item">
                            <svg class="skills__circle svg skills__circle--gray">
                                <circle r="45px" cx="55px" cy="55px"></circle>
                            </svg>
                            <svg class="skills__circle svg skills__circle--green skills__circle--node">
                                <circle r="45px" cx="55px" cy="55px"></circle>
                            </svg>
                            <span class="skills__name">Node.js<br> &amp; npm</span>
                        </li>
                        <li class="skills__inner-item">
                            <svg class="skills__circle svg skills__circle--gray">
                                <circle r="45px" cx="55px" cy="55px"></circle>
                            </svg>
                            <svg class="skills__circle svg skills__circle--green skills__circle--mongo">
                                <circle r="45px" cx="55px" cy="55px"></circle>
                            </svg>
                            <span class="skills__name">Mongo.db</span>
                        </li>
                    </ul>
                </li>
                <li class="skills__item">
                    <h4 class="skills__type">WorkFlow</h4>
                    <ul class="skills__inner-list">
                        <li class="skills__inner-item">
                            <svg class="skills__circle svg skills__circle--gray">
                                <circle r="45px" cx="55px" cy="55px"></circle>
                            </svg>
                            <svg class="skills__circle svg skills__circle--green skills__circle--git">
                                <circle r="45px" cx="55px" cy="55px"></circle>
                            </svg>
                            <span class="skills__name">Git</span>
                        </li>
                        <li class="skills__inner-item">
                            <svg class="skills__circle svg skills__circle--gray">
                                <circle r="45px" cx="55px" cy="55px"></circle>
                            </svg>
                            <svg class="skills__circle svg skills__circle--green skills__circle--gulp">
                                <circle r="45px" cx="55px" cy="55px"></circle>
                            </svg>
                            <span class="skills__name">Gulp</span>
                        </li>
                        <li class="skills__inner-item">
                            <svg class="skills__circle svg skills__circle--gray">
                                <circle r="45px" cx="55px" cy="55px"></circle>
                            </svg>
                            <svg class="skills__circle svg skills__circle--green skills__circle--bower">
                                <circle r="45px" cx="55px" cy="55px"></circle>
                            </svg>
                            <span class="skills__name">Bower</span>
                        </li>
                    </ul>
                </li>
            </ul>
        </article>
    </section>
    <section class="contacts">
        <div class="contacts__wrap">
            <div class="contacts__title-wrap">
                <h2 class="contacts__title">Контакты</h2>
            </div>
            <div class="contacts__body">
                <p class="contacts__item contacts__item--skype">skype_test
                    <svg class="contacts__icon">
                        <use xlink:href="#icon-skype"></use>
                    </svg>
                </p>
                <p class="contacts__item contacts__item--email">soinov.alexey@yandex.ru
                    <svg class="contacts__icon">
                        <use xlink:href="#icon-envelope"></use>
                    </svg>
                </p>
                <p class="contacts__item contacts__item--tel">+7&nbsp;999&nbsp;999&nbsp;99&nbsp;99
                    <svg class="contacts__icon">
                        <use xlink:href="#icon-phone"></use>
                    </svg>
                </p>
                <p class="contacts__item contacts__item--address">г.&nbsp;Новосибирск, ул.&nbsp;Ватутина, д.107
                    <svg class="contacts__icon">
                        <use xlink:href="#icon-map_marker"></use>
                    </svg>
                </p>
            </div>
        </div>
    </section>
@endsection