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
                        <li class="page-nav__item"><a href="#fish-text" class="page-nav__link page-nav__link--active">Рыбный
                                текст</a></li>
                        <li class="page-nav__item"><a href="#verter" class="page-nav__link">Страдания юного Вертера</a>
                        </li>
                        <li class="page-nav__item"><a href="#kafka" class="page-nav__link">Кафка</a></li>
                    </ul>
                </div>
            </aside>
        </div>
        <section class="blog">
            <article id="fish-text" class="blog__item article">
                <h3 class="article__title">Рыбный текст</h3>
                <time datetime="2017-06-15" class="article__time">15 июня 2017</time>
                <div class="article__body">
                    Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные
                    тексты. Вдали от всех живут они в буквенных домах на берегу Семантика большого языкового океана.
                    Маленький ручеек журчит по всей стране и обеспечивает ее всеми необходимыми правилами. Эта
                    парадигматическая страна, в которой жаренные члены предложения залетают прямо в рот. Даже всемогущая
                    пунктуация не имеет власти над рыбными текстами, ведущими безорфографичный образ жизни. Однажды одна
                    маленькая строчка рыбного текста по имени Lorem ipsum решила выйти в большой мир грамматики. Великий
                    Оксмокс предупреждал ее о злых запятых, диких знаках вопроса и коварных точках с запятой, но текст
                    не дал сбить себя с толку. Он собрал семь своих заглавных букв, подпоясал инициал за пояс и пустился
                    в дорогу. Взобравшись на первую вершину курсивных гор, бросил он последний взгляд назад, на силуэт
                    своего родного города Буквоград, на заголовок деревни Алфавит и на подзаголовок своего переулка
                    Строчка. Грустный реторический вопрос скатился по его щеке и он продолжил свой путь. По дороге
                    встретил текст рукопись.
                </div>
            </article>
            <article id="verter" class="blog__item article">
                <h3 class="article__title">Страдания юного Вертера</h3>
                <time datetime="2017-06-15" class="article__time">15 июня 2017</time>
                <div class="article__body">Душа моя озарена неземной радостью, как эти чудесные весенние утра, которыми
                    я наслаждаюсь от всего сердца. Я совсем один и блаженствую в здешнем краю, словно созданном для
                    таких, как я. Я так счастлив, мой друг, так упоен ощущением покоя, что искусство мое страдает от
                    этого. Ни одного штриха не мог бы я сделать, а никогда не был таким большим художником, как в эти
                    минуты. Когда от милой моей долины поднимается пар и полдневное солнце стоит над непроницаемой чащей
                    темного леса и лишь редкий луч проскальзывает в его святая святых, а я лежу в высокой траве у
                    быстрого ручья и, прильнув к земле, вижу тысячи всевозможных былинок и чувствую, как близок моему
                    сердцу крошечный мирок, что снует между стебельками, наблюдаю эти неисчислимые, непостижимые
                    разновидности червяков и мошек и чувствую близость всемогущего, создавшего нас по своему подобию,
                    веяние вселюбящего, судившего нам парить в вечном блаженстве, когда взор мой туманится и все вокруг
                    меня и небо надо мной запечатлены в моей душе, точно образ возлюбленной, - тогда, дорогой друг, меня
                    часто томит мысль: "Ах! Как бы выразить, как бы вдохнуть в рисунок то, что так полно, так трепетно
                    живет во мне, запечатлеть отражение моей души, как душа моя - отражение предвечного бога!"
                </div>
            </article>
            <article id="kafka" class="blog__item article">
                <h3 class="article__title">Кафка</h3>
                <time datetime="2017-06-15" class="article__time">15 июня 2017</time>
                <div class="article__body">Проснувшись однажды утром после беспокойного сна, Грегор Замза обнаружил, что
                    он у себя в постели превратился в страшное насекомое. Лежа на панцирнотвердой спине, он видел,
                    стоило ему приподнять голову, свой коричневый, выпуклый, разделенный дугообразными чешуйками живот,
                    на верхушке которого еле держалось готовое вот-вот окончательно сползти одеяло. Его многочисленные,
                    убого тонкие по сравнению с остальным телом ножки беспомощно копошились у него перед глазами. «Что
                    со мной случилось?» – подумал он. Это не было сном. Его комната, настоящая, разве что слишком
                    маленькая, но обычная комната, мирно покоилась в своих четырех хорошо знакомых стенах. Над столом,
                    где были разложены распакованные образцы сукон – Замза был коммивояжером, – висел портрет, который
                    он недавно вырезал из иллюстрированного журнала и вставил в красивую золоченую рамку. На портрете
                    была изображена дама в меховой шляпе и боа, она сидела очень прямо и протягивала зрителю тяжелую
                    меховую муфту, в которой целиком исчезала ее рука. Затем взгляд Грегора устремился в окно, и
                    пасмурная погода – слышно было, как по жести подоконника стучат капли дождя – привела его и вовсе в
                    грустное настроение. «Хорошо бы еще немного поспать и забыть всю эту чепуху», – подумал он, но это
                    было совершенно неосуществимо
                </div>
            </article>
        </section>
    </div>
@stop