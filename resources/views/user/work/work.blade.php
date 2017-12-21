@extends('layouts.user')

@section('title')
    <svg class="page__icon-title">
        <use xlink:href="#icon-works_header"></use>
    </svg>
    <h1 class="page__title">Мои работы</h1>
@endsection

@section('content')
    <section class="my-work">
        <ul class="my-work__list">

            @foreach ($all_works as $value)
                <li class="my-work__item">
                    <div class="my-work__img"><img src="{{asset($value->work_photo)}}" alt="{{$value->work_name}}"></div>
                    <div class="my-work__info">
                        <div class="my-work__subtitle-wrap">
                            <h3 class="my-work__subtitle">{{$value->work_name}}</h3>
                        </div>
                        <p class="my-work__technologies">{{$value->work_technology}}</p><a
                                href="{{$value->work_url}}" target="_blank"
                                class="my-work__btn btn btn--green">Посмотреть сайт
                            <svg class="my-work__icon-link">
                                <use xlink:href="#icon-link"></use>
                            </svg>
                        </a>
                    </div>
                </li>
            @endforeach

        </ul>
        <div class="my-work__slider slider">
            <div class="slider__preload">

                @foreach ($all_works as $value)
                    {{--<li class="slider__preload-item">{{ $value->name }}</li>--}}
                    <div class="slider__preload-wrap">
                        <input id="{{ 'slide_' . $value->id }}" name="works" type="radio">
                        <label for="{{ 'slide_' . $value->id }}" class="radio slider__preload-item"></label>
                    </div>
                @endforeach

            </div>
            <div class="slider__button">
                <div class="slider__back">
                    <div class="slider__icon_arrow">
                        <svg class="slider__icon-portf_arrow_up">
                            <use xlink:href="#icon-portf_arrow_up"></use>
                        </svg>
                    </div>
                    <div class="slider__text">Назад</div>
                </div>
                <div class="slider__next">
                    <div class="slider__text">Вперёд</div>
                    <div class="slider__icon_arrow">
                        <svg class="slider__icon-portf_arrow_down">
                            <use xlink:href="#icon-portf_arrow_down"></use>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="section-2" class="feedback">
        <div class="feedback__section">
            <div class="feedback__title-wrap">
                <svg class="feedback__icon-about_header">
                    <use xlink:href="#icon-about_header"></use>
                </svg>
                <h2 class="feedback__title">Что обо мне<br> говорят</h2>
            </div>
            <ul class="feedback__list">

                @foreach ($all_feedback as $value)
                    <li class="feedback__item">
                        <p class="feedback__quote">{{ $value->user_text }}</p>
                        <div class="feedback__user-wrap">
                            {{--                        <img src="{{ asset('img/work/barbershop.png') }}" alt="{{ $value->user_name }}" class="feedback__avatar">--}}
                            {{--<div class="feedback__user-name-wrap">--}}
                            <p class="feedback__user-name">{{ $value->user_name }}</p>
                            <p class="feedback__user-position">{{ $value->user_position }}</p>
                            {{--</div>--}}
                        </div>
                    </li>
                @endforeach

            </ul>
        </div>
        <div id="section-3" class="feedback__section section-scroll">
            <form action="{{ url('/admin/work/saveFeedback') }}" method="post" class="feedback__form form">
                {{ csrf_field() }}
                <div class="form__title-wrap">
                    <h3 class="form__title">Добавить отзыв</h3>
                </div>
                <div class="form__body">
                    <input name="user_name" type="text" placeholder="Имя *" class="form__text form__text--name" required>
                    <input name="user_position" type="text" placeholder="Должность" class="form__text">
                    <input name="user_email" type="email" placeholder="Email" class="form__text form__text--email">
                    <textarea name="user_text" placeholder="Ваше сообщение *" class="form__text form__text--textarea"
                              required></textarea>
                </div>
                <div class="form__bottom">
                    <button type="submit" class="btn btn--authorization btn--green">Отправить</button>
                    <button type="reset" class="btn btn--authorization btn--green">Очистить</button>
                </div>
            </form>
        </div>
    </section>
@endsection