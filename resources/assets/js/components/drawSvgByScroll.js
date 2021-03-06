/**
 * Created by RUS9211689 on 15.11.2017.
 */
////////////////////////////////////////////////////////////////////////
//////////////  Отрисовка СВГ SVG по времени  //////////////////////////
//////////////  (положение экрана отслеживается)  //////////////////////
module.exports = (function () {
    $(window).scroll(function () {
        // ищем изображение
        let svg = $('.who-am-i__icon-author-photo');
        // ищем следующий блок для отмены анимации
        let nextBlock = $('#section-2');

        if (svg.length > 0) {

            let
                wScroll = $(window).scrollTop(), // слежение скрола от верха документа
                nextBlockPos = nextBlock.offset().top, // ищем позицию элемента от верха страницы
                svgPath = $(svg).find('.who-am-i__icon-author-photo-body'), // ищем группы в нашем изображении
                svgPos = svg.offset().top, // отслеживаем положение svg от верха страницы
                windowMargin = $(window).height() / 2, // задаём запас что бы анимация начаналась заранее, когда останится пол окна
                startAnimate = Math.ceil(wScroll - svgPos + windowMargin), //выставляем точку начала анимации - от общего скрола отнимем позицию картинки и прибавим пол страницы
                endAnimate = Math.ceil(wScroll - nextBlockPos + windowMargin); //выставляем точку конца анимации

            if (startAnimate > 0 && endAnimate < 0) { // старт анимации если мы докрутили до нужного места
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