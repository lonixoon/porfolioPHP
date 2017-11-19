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
                    <div class="my-work__img"><img src="{{ asset($value->photo) }}" alt="{{ $value->name }}"></div>
                    <div class="my-work__info">
                        <div class="my-work__subtitle-wrap">
                            <h3 class="my-work__subtitle">{{ $value->name }}</h3>
                        </div>
                        <p class="my-work__technologies">{{ $value->technology }}</p><a
                                href="#" target="_blank"
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
            <div class="slider__back">
                <svg class="slider__icon-portf_arrow_up">
                    <use xlink:href="#icon-portf_arrow_up"></use>
                </svg>
                <span class="slider__back-text">Назад</span>
            </div>
            <div class="slider__next">
                <span class="slider__next-text">Вперёд</span>
                <svg class="slider__icon-portf_arrow_down">
                    <use xlink:href="#icon-portf_arrow_down"></use>
                </svg>
            </div>
        </div>
    </section>
    <section class="feedback">
        <div class="feedback__title-wrap">
            <svg class="feedback__icon-about_header">
                <use xlink:href="#icon-about_header"></use>
            </svg>
            <h2 class="feedback__title">Что обо мне<br> говорят</h2>
        </div>
        <ul class="feedback__list">
            <li class="feedback__item">
                <p class="feedback__quote">
                    Доброго дня всем! Хочу похвалить за отлично проделанную работу!<br>
                    Уже обращались в эту компанию много лет назад и были вполне довольны результатами, поэтому когда в
                    очередной раз понадобился сайт, вновь и без сомнений, обратились к ним!
                </p>
                <div class="feedback__user-wrap"><img src="{{ asset('img/work/barbershop.png') }}" alt="Роман"
                                                      class="feedback__avatar">
                    <div class="feedback__user-name-wrap">
                        <p class="feedback__user-name">Роман</p>
                        <p class="feedback__user-position">Менеджер</p>
                    </div>
                </div>
            </li>
            <li class="feedback__item">
                <p class="feedback__quote">Всем привет! Хочу выразить благодарность чудесный сайт, который они сделали
                    мне, в довольно короткие сроки.</p>
                <div class="feedback__user-wrap"><img src="{{ asset('img/work/barbershop.png') }}" alt="Роман"
                                                      class="feedback__avatar">
                    <div class="feedback__user-name-wrap">
                        <p class="feedback__user-name">Вован</p>
                        <p class="feedback__user-position">крутой ИТшник</p>
                    </div>
                </div>
            </li>
        </ul>
        <form action="" class="feedback__form form">
            <div class="form__title-wrap">
                <h3 class="form__title">Связаться со мной</h3>
            </div>
            <div class="form__body">
                <input type="text" placeholder="Имя" required class="form__text form__text--name">
                <input type="text" placeholder="Должность" class="form__text">
                <input type="email" placeholder="Email" class="form__text form__text--email">
                <textarea placeholder="Ваше сообщение" required class="form__text form__text--textarea"></textarea>
            </div>
            <div class="form__bottom">
                <button type="submit" class="btn btn--authorization btn--green">Отправить</button>
                <button type="reset" class="btn btn--authorization btn--green">Очистить</button>
            </div>
        </form>
    </section>
@endsection