(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
/**
 * Created by RUS9211689 on 15.11.2017.
 */
////////////////////////////////////////////////////////////////////////
//////////////  Отрисовка СВГ SVG по времени  //////////////////////////
//////////////  (положение экрана отслеживается)  //////////////////////
module.exports = (function () {
    $(window).scroll(function () {
        let svg = $('.who-am-i__icon-author-photo'); // ищем изображение
        // if (window.location.toString().indexOf('/about') > 0) {

        if (svg.length > 0) {

            let
                wScroll = $(window).scrollTop(), // слежение скрола от верха документа

                svgPath = $(svg).find('.who-am-i__icon-author-photo-body'), // ищем группы в нашем изображении
                svgPos = svg.offset().top, // отслеживаем положение svg от верха страницы
                windowMargin = $(window).height() / 2, // задаём запас что бы анимация начаналась заранее, когда останится пол окна
                startAnimate = Math.ceil(wScroll - svgPos + windowMargin); //выставляем точку начала анимации - от общего скрола отнимем позицию картинки и прибавим пол страницы


            // if (startAnimate > 0) { // старт анимации если мы докрутили до нужного места
            //     // console.log('start', startAnimate);
            //     svgPath.stop().animate(
            //         {
            //             'stroke-dashoffset' : '0'
            //         },

            //         3500,

            //         'linear',

            //         function () {
            //             console.log('Конец анимации');
            //         }
            //     );
            if (startAnimate > 0) { // старт анимации если мы докрутили до нужного места
                svgPath.css({
                    'stroke-dashoffset': '0'
                });

            } else {
                svgPath.css({
                    'stroke-dashoffset': '600'
                });
            }
        }
    });
});


////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////
//////////////  Отрисовка СВГ SVG по скролу  ///////////////////////////
// $(window).scroll(function() {

//     if (window.location.toString().indexOf('about.htm') > 0) {

//         let
//             wScroll = $(window).scrollTop(), // слежение скрола от верха документа
//             svg = $('.who-am-i__icon-author-photo'), // ищем изображение
//             svgPath = $(svg).find('.who-am-i__icon-author-photo-body'), // ищем группы в нашем изображении
//             svgPos = svg.offset().top, // отслеживаем положение svg от верха страницы
//             windowMargin = $(window).height() / 1.5, // задаём запас что бы анимация начаналась заранее, когда останится пол окна
//             startAnimate = Math.ceil(wScroll - svgPos + windowMargin), //выставляем точку начала анимации - от общего скрола отнимем позицию картинки и прибавим пол страницы
//             pixelsElapsed = svgPos - wScroll, // осталось до svg картинки
//             percentsElapsed =  Math.ceil(pixelsElapsed / (svgPos - (svgPos - windowMargin)) * 100), // сколько мы прошли в %
//             percentDraw = 600 / 100 * percentsElapsed; // на сколько мы нарисовали изображение в %

//         if (startAnimate > 0) { // старт анимации если мы докрутили до нужного места
//             svgPath.css({
//                 'stroke-dashoffset' : percentDraw
//             });

//             if (percentDraw <= 0) { // отменяем исчезание картинки при дальнейшим скроле
//                 svgPath.css({
//                     'stroke-dashoffset' : 0
//                 });
//             }
//         }

//         else { // полностью очищаем при обратной прокрутки (оставались баги)
//             svgPath.css({
//                 'stroke-dashoffset' : 600
//             });
//         }
//     }
// });
},{}],2:[function(require,module,exports){
/**
 * Created by RUS9211689 on 15.11.2017.
 */
////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////
//////////////  Заливка скилов skill fill  ////////////////////////////

module.exports = (function () {
    let skills = $('.skills__circle--green');

    if (skills.length > 0) {
        let renderSelectFluxes = function () {
            $.ajax({
                url: '/api/about',
                type: 'get'
            }).done(function (data) {
                let html5 = 282.743338824 / 100 * data['html5'];
                let css3 = 282.743338824 / 100 * data['css3'];
                let js = 282.743338824 / 100 * data['js'];
                let php = 282.743338824 / 100 * data['php'];
                let mysql = 282.743338824 / 100 * data['mysql'];
                let nodejs = 282.743338824 / 100 * data['nodejs'];
                let mongodb = 282.743338824 / 100 * data['mongodb'];
                let git = 282.743338824 / 100 * data['git'];
                let gulp = 282.743338824 / 100 * data['gulp'];
                let bower = 282.743338824 / 100 * data['bower'];

                $(window).scroll(function () { // отслеживаем скролл
                    let wScroll = $(window).scrollTop(), // измеряем срок от верха страницы
                        // skills = $('.skills__circle'),
                        skillsPos = skills.offset().top, // ищем позицию элемента от верха страницы
                        skillsMargin = $(window).height() / 1.8,  // вводим коэффиицент что бы зарисовка начиналась заранее
                        startAnimate = Math.ceil(wScroll - skillsPos + skillsMargin); // находим точку начала анимации

                    if (startAnimate < 0) { // условие которое дожно выполнятся для старта анимации
                        skills.css({ // изменяем css свойство
                            'stroke-dasharray': '0 282.743338824px'
                        });

                    } else {
                        $('.skills__circle--html').css({ // изменяем css свойство
                            'stroke-dasharray': html5 + ' 282.743338824px',
                        });
                        $('.skills__circle--css').css({ // изменяем css свойство
                            'stroke-dasharray': css3 + ' 282.743338824px',
                        });
                        $('.skills__circle--js').css({ // изменяем css свойство
                            'stroke-dasharray': js + ' 282.743338824px',
                        });
                        $('.skills__circle--php').css({ // изменяем css свойство
                            'stroke-dasharray': php + ' 282.743338824px',
                        });
                        $('.skills__circle--sql').css({ // изменяем css свойство
                            'stroke-dasharray': mysql + ' 282.743338824px',
                        });
                        $('.skills__circle--node').css({ // изменяем css свойство
                            'stroke-dasharray': nodejs + ' 282.743338824px',
                        });
                        $('.skills__circle--mongo').css({ // изменяем css свойство
                            'stroke-dasharray': mongodb + ' 282.743338824px',
                        });
                        $('.skills__circle--git').css({ // изменяем css свойство
                            'stroke-dasharray': git + ' 282.743338824px',
                        });
                        $('.skills__circle--gulp').css({ // изменяем css свойство
                            'stroke-dasharray': gulp + ' 282.743338824px',
                        });
                        $('.skills__circle--bower').css({ // изменяем css свойство
                            'stroke-dasharray': bower + ' 282.743338824px',
                        });

                    }
                });
            })
        };
        renderSelectFluxes();
    }
});
},{}],3:[function(require,module,exports){
/**
 * Created by RUS9211689 on 15.11.2017.
 */
////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////
///////////////////////  Флип flip блока  //////////////////////////////
module.exports = (function () {
    let
        loginBtn = doc.querySelector('.authorization-btn--auth'),
        indexBtn = doc.querySelector('.btn--authorization'),
        authorBlock = doc.querySelector('.flip__front'),
        loginForm = doc.querySelector('.flip__back'),
        flipper = ('flip__flipper');

    if (loginBtn) {
        loginBtn.addEventListener('click', function (event) {
            event.preventDefault();
            authorBlock.classList.add(flipper);
            loginForm.classList.remove(flipper);
            $(loginBtn).hide();
        });

        indexBtn.addEventListener('click', function (event) {
            event.preventDefault();
            authorBlock.classList.remove(flipper);
            loginForm.classList.add(flipper);
            $(loginBtn).show();
        });
    }
});
},{}],4:[function(require,module,exports){
/**
 * Created by RUS9211689 on 15.11.2017.
 */
////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////
//////////////  Открывашка для главного меню  //////////////////////////
module.exports = (function() {
    let menuToggle = doc.querySelector('.main-nav__toggle'),
        menuClosed = doc.querySelector('.main-nav__list');

    if (menuToggle) {
        menuToggle.addEventListener('click', function (event) {
            event.preventDefault();
            menuClosed.classList.toggle('main-nav__list--opened');
            menuToggle.classList.toggle('main-nav__toggle--active');
        });
    }

    window.addEventListener('keydown', function(event) {
        if (event.keyCode === 27) {
            menuClosed.classList.remove('main-nav__list--opened');
            menuToggle.classList.toggle('main-nav__toggle--active');
        }
    });
});
},{}],5:[function(require,module,exports){
/**
 * Created by RUS9211689 on 15.11.2017.
 */
////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////
//////////////  mouse parallax  ////////////////////////////////////////
module.exports = (function () {
    $(doc).ready(function () {

        let layer = $('.parallax').find('.parallax__layer--mouse'); // Выбираем все дивы parallax__layers в parallax

        $(window).on('mousemove', function (e) {
            let
                mouse_dx = (e.pageX), // Узнаём положение мышки по Х
                mouse_dy = (e.pageY), // Узнаём положение мышки по У
                // Т.к. мы делим экран на четыре части что бы в центре оказалась точка координат 0, то нам надо знать когда у нас будет -Х и +Х, -Y и +Y
                w05 = (window.innerWidth / 2), // делим экран по х
                h05 = (window.innerHeight / 2), // делим экран по y
                w = w05 - mouse_dx, // Вычисляем для x перемещения
                h = h05 - mouse_dy; // Вычисляем для y перемещения

            layer.map(function (key, value) { // Проходимся по всем элементам объекта (дивам .parallax__layers)
                let
                    // bottomPosition = (h05 * (key / 100)), // Вычисляем на сколько нам надо опустить вниз наш слой что бы при перемещении по Y не видно было краев
                    widthPosition = w * (key / 100), // Вычисляем коофицент смешения по X
                    heightPosition = h * (key / 100); // Вычисляем коофицент смешения по Y

                $(value).css({
                    // 'bottom': '-' + bottomPosition + 'px', // выставляем bottom (т.к. картинка с запасом по низу выравнивание не требуется)
                    'transform': 'translate3d(' + widthPosition + 'px, ' + heightPosition + 'px, 0)', // Используем translate3d для более лучшего рендеринга на странице
                });
            });
        });
    });
});
},{}],6:[function(require,module,exports){
/**
 * Created by RUS9211689 on 15.11.2017.
 */
////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////
//////////////  Визуализация пред загрузки страницы  ///////////////////

// module.export = window.addEventListener('load', function() {
//     // console.log("Cтраница полностью готова");
//     $('.page__header, .page__main, .page__footer').css('display', 'flex');
//     $('.preloader').hide();
// });

////////////////////////////////////////////////////////////////////////
////////////// Визуализация пред загрузки страницы /////////////////////
////////////// с отслеживаеним объектов ////////////////////////////////

// module.export = $(doc).ready(function () {

//     $(function () {
//         let imgs = []; // выводим адрес изображений в виде массива

//         $.each($('*'), function () { // цикл поиска всех элементов на странице
//             let $this = $(this),
//                 background = $this.css('background-image'), // ищем в css фоны всех элементов (включая элементы у которых фон none)
//                 img = $this.is('img'); // проверяем на соответствия элемента тегу img

//             if (background !='none') { // если фон не равен none то
//                 let path = background.replace('url("', ''). replace('")', ''); // убираем лишние символы

//                 imgs.push(path); // и сохраняем в массив
//             }

//             if (img) {
//                 let path = $this.attr('src'); // если элемент изображение, сохраняем его отрибут src

//                 if (path) {
//                     imgs.push(path); // если scr не пустой, сохраняем в массив
//                 }
//             }
//         });

//         let percent = 1;

//         for (let i = 0; i < imgs.length; i++) { // цикл для который проходит по массиву imgs
//             let image = $('<img>', { // создаём картинку
//                 attr: { // передаём атрибуты
//                     src : imgs[i]
//                 }
//             });

//             image.on('load', function() { // обработчик загрузки
//                 setPercent(imgs.length, percent); // изменяем ширину в соответствии с %
//                 percent++; // запускаем цикл
//             });
//         }

//         function setPercent(total, curent) { // считаем проценты загрузки
//             let percent = Math.ceil(curent / total * 100); // формула для расчёта процентов(Math.ceil округляет до целого в большую сторону)

//             if (percent >=100) {
//                 $('.page__header').css('display', 'flex');
//                 $('.page__main').css('display', 'flex');
//                 $('.page__footer').css('display', 'flex');
//                 $('.preloader').hide();
//             }

//             $('.preloader__bar').css({ // выбираем элемент прелодер
//                 // 'width' : percent + '%' // меняем значение шири на получившийся %
//             }).text(percent + '%'); // выводим % в тексте
//         }
//     });
// });
},{}],7:[function(require,module,exports){
/**
 * Created by RUS9211689 on 15.11.2017.
 */
////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////
//////////////  local storage для SVG  /////////////////////////////////
module.exports = (function () {
    let request = new XMLHttpRequest();

    request.open('GET', '/svg/symbol_sprite.html', true);

    request.onload = function() {

        if (request.status >= 200 && request.status < 400 ) {
            let node = doc.createElement("div");

            node.innerHTML = request.responseText;
            doc.body.insertBefore(node, doc.body.firstChild);

            localStorage.setItem( 'inlineSVGdata',  request.responseText );
        }
    };

    request.send();
});


},{}],8:[function(require,module,exports){
/**
 * Created by RUS9211689 on 15.11.2017.
 */
////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////
//////////////  scroll parallax праллакс по скроллу  ///////////////////
// module.exports = $(window).scroll(function() {
//     let wScroll = $(window).scrollTop(), // вычисляем растояние от верха страницы
//         layer = $('.parallax').find('.parallax__layer--scroll'); // Выбираем все дивы parallax__layers в parallax

//     layer.map(function (key, value) { // Проходимся по всем элементам объекта (дивам .parallax__layers)
//         let
//             // bottomPosition = (key / 14), // Вычисляем на сколько нам надо опустить вниз наш слой что бы при перемещении по Y не видно было краев
//             scrollPosition = wScroll * (key / 14); // Вычисляем коофицент смешения по Y

//             $(value).css({
//                 'transform': 'translate3d(0, ' + scrollPosition + 'px, 0)', // Используем translate3d для более лучшего рендеринга на странице
//             });

//             if (scrollPosition > 400) { // если картинка заканчивается
//                 $(value).css({
//                     // 'bottom': '-' + bottomPosition + 'px', // выставляем bottom (т.к. картинка с запасом по низу выравнивание не требуется)
//                     'transform': 'translate3d(0, 400px, 0)', // ограничим прокрутку
//                 });
//             }
//     });
// });
},{}],9:[function(require,module,exports){
/**
 * Created by RUS9211689 on 15.11.2017.
 */
////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////
///////  Приклеенное боковое меню и анимация сайт бара (sitebar) ///////
module.exports = (function () {
    let link = $('.page-nav__link');
    $('.page__fixed .page-nav .page-nav__wrap').hide();
    link.eq(0).addClass('page-nav__link--active');

    $(window).scroll(function () { // функция отслеживания скрола
        let pageBlog = $('.page__blog');

        // if ((window.location.toString().indexOf('blog') > 0)) { // находимся на странице Блог
        if (pageBlog.length > 0) {
            let
                // $this = $(this),
                wScroll = $(window).scrollTop(),  // проверка на сколько px мы проскролили страницу
                // sidebar = $('.page__static .page-nav__wrap'),
                blog = $('.blog'),
                article = $('.article__title'),
                stickyStart = blog.offset().top;  // отслеживаем положение меню от верха страницы
                // fixedSidebar = $('.page__fixed .page-nav'),
                // fixedMenu = fixedSidebar.find('.page-nav__wrap');


            if ($(window).width() >= 1200) {
                let pageStatic = $('.page__static'),
                    pageFixed = $('.page__fixed');

                if (wScroll >= stickyStart) { // если меню ниже чем верх страницы
                    pageStatic.addClass('page__fixed');
                    pageStatic.removeClass('page__static');

                } else {
                    pageFixed.addClass('page__static');
                    pageFixed.removeClass('page__fixed');
                }
            }
            // делаем циклом проверку, на положение всех заголовков статей, относительно текущего положения экрана
            // и добавляем класс актив ссылки на статью заголовок которой выше чем положение экрана
            for (let i = 0; i < article.length; i++) {
                let articlePos = article.eq(i).offset().top - 30; // определяем местоположение на странице всех заголовков статей и отнимаем 30px для запаса
                let linkNum = link.eq(i); // определяем все ссылки на статьи
                if (articlePos < wScroll) { // делаем проверку на положения экрана и положения заголовков всех статей
                    $(link).removeClass('page-nav__link--active'); // если занчение положения экрана больше (экран ниже) чем текущий заголовок
                    $(linkNum).addClass('page-nav__link--active'); // добавляем ссылке клас актив которая совпадает с номером в массиве article на который находится экран
                }
            }
        }
    });
});
},{}],10:[function(require,module,exports){
/**
 * Created by RUS9211689 on 15.11.2017.
 */
////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////
///////  Выезд сайдбара по свайпу для моб версии  //////////////////////
module.exports = (function () {
    let pageBlog = $('.page__blog');

    if ((pageBlog.length > 0) && ($(window).width() < 1200)) {

        let
            body = $('body'),
            sidebar = $('.page-nav__wrap'),
            toggle = $('.page-nav__toggle'),
            blog = $('.blog'),
            touchStartX = 0,
            touchEndX = 0,
            threshold = 50;

        toggle.on('click', function (event) {

            event.preventDefault();
            toggle.toggleClass('page-nav__toggle--opened');
            sidebar.toggleClass('page-nav__wrap--opened');

        });

        sidebar.on('click', function (event) {

            toggle.removeClass('page-nav__toggle--opened');
            sidebar.removeClass('page-nav__wrap--opened');

        });


        body.on('touchstart', function (event) {

            let touch = event.originalEvent.touches[0] || event.originalEvent.changedTouches[0];
            touchStartX = touch.pageX;

        });


        body.on('touchend', function (event) {

            let touch = event.originalEvent.touches[0] || event.originalEvent.changedTouches[0];
            touchEndX = touch.pageX;

            if (touchEndX - touchStartX > threshold) {
                sidebar.addClass('page-nav__wrap--opened');
                toggle.addClass('page-nav__toggle--opened');
            } else if (touchEndX - touchStartX < -threshold) {
                sidebar.removeClass('page-nav__wrap--opened');
                toggle.removeClass('page-nav__toggle--opened');
            }
        });
    }
});
},{}],11:[function(require,module,exports){
/**
 * Created by RUS9211689 on 15.11.2017.
 */
////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////
//////////////  Слайдер  ///////////////////////////////////////////////
module.exports = (function() {
    let
        slides = doc.querySelectorAll('.my-work__list .my-work__item'), // ищем все слайды
        slide = doc.querySelector('.my-work__list .my-work__item'), // ищем все слайды
        currentSlide = 0,
        next = doc.querySelectorAll('.slider__next'), // ищем кнопки next на всех слайдах
        back = doc.querySelectorAll('.slider__back'); // ищем кнопки back на всех слайдах

    // if (slides.length > 0) {
    //     let slideInterval = setInterval(backSlide, 5000); // делаем слайд шоу (если требуется)
    // }

    // показать первую работу при загрузки
    slide.classList.add('my-work__item--show');



    function nextSlide() { // перелистываение сладера вперед
        goToSlide(currentSlide + 1);
    }

    function backSlide() { // перелистываение сладера назад
        goToSlide(currentSlide - 1);
    }

    function goToSlide(n) { // функция перехода на другйо слайд
        slides[currentSlide].className = 'my-work__item'; // убераем первому слайду класс "my-work__item--show"
        currentSlide = (n + slides.length) % slides.length; // вычисляем номер следующего элемента массива
        slides[currentSlide].className = 'my-work__item my-work__item--show'; // добавляем ему класс "my-work__item--show"
    }

    for (let i = 0; i < next.length; i++) {
        next[i].addEventListener('click', function() {
            nextSlide();
        });
    }

    for (let i = 0; i < back.length; i++) {
        back[i].addEventListener('click', function() {
            backSlide();
        });
    }
});
},{}],12:[function(require,module,exports){
/**
 * Created by RUS9211689 on 15.11.2017.
 */
////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////
//////////////  Плавный скролл scroll до элемента страницы  ///////////////////
module.exports = (function () {
    $('a[href^="#"]').bind('click.smoothscroll', function (e) {  // ищем все ссылки с адресом #
        // и вешаем обработчик события которое срабатывает при клике мышкой
        e.preventDefault(); // отменяем переход по умолчанию

        let target = this.hash,
            $target = $(target);

        $('html, body').stop().animate(
            {
                'scrollTop': $target.offset().top // позиция элемента от верха страницы
            },

            500, // время анимации

            'swing',

            function () {
                window.location.hash = target;
            }
        );
    });
});
},{}],13:[function(require,module,exports){
doc = document;
let saveSvgToLocalStorageSVG = require('./components/saveSvgToLocalStorageSVG'),
    mainMenuOpen = require('./components/mainMenuOpen'),
    slider = require('./components/slider'),
    preloaderPage = require('./components/preloaderPage'),
    mouseParallax = require('./components/mouseParallax'),
    scrollParallax = require('./components/scrollParallax'),
    smoothScroll = require('./components/smoothScroll'),
    drawSvgByScroll = require('./components/drawSvgByScroll'),
    fillSkillByScroll = require('./components/fillSkillByScroll'),
    flipLoginBlock = require('./components/flipLoginBlock'),
    sidebarOutput = require('./components/sitebarOutput'),
    sidebarSticky = require('./components/sidebarSticky');


saveSvgToLocalStorageSVG();
mainMenuOpen();
slider();
mouseParallax();
smoothScroll();
drawSvgByScroll();
fillSkillByScroll();
flipLoginBlock();
sidebarOutput();
sidebarSticky();








},{"./components/drawSvgByScroll":1,"./components/fillSkillByScroll":2,"./components/flipLoginBlock":3,"./components/mainMenuOpen":4,"./components/mouseParallax":5,"./components/preloaderPage":6,"./components/saveSvgToLocalStorageSVG":7,"./components/scrollParallax":8,"./components/sidebarSticky":9,"./components/sitebarOutput":10,"./components/slider":11,"./components/smoothScroll":12}]},{},[13]);
