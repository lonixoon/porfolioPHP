@extends('layouts.user')

@section('title')
    <svg class="page__icon-title page__icon-title--blog">
        <use xlink:href="#icon-blog_header"></use>
    </svg>
    <h1 class="page__title">Блог</h1>
@stop

@section('content')
    <div class="page__blog">
        <div class="page__static">
            <aside class="page-nav">
                <div class="page-nav__toggle"></div>
                <div class="page-nav__wrap">
                    <ul class="page-nav__list">

                        @foreach($all_article as $value)
                            <li class="page-nav__item">
                                <a href="#{{ $value->id }}"
                                   class="page-nav__link page-nav__link">{{ $value->title }}</a>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </aside>
        </div>
        <section class="blog">

            @foreach ($all_article as $value)
                <article id="{{ $value->id }}" class="blog__item article">
                    <h3 class="article__title">{{ $value->title }}</h3>
                    <time datetime="{{ $value->updated_at }}" class="article__time">{{ $value->updated_at }}</time>
                    <div class="article__body">{{ $value->text }}</div>
                </article>
            @endforeach

        </section>
    </div>
@endsection