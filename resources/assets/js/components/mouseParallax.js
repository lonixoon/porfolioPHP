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