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
            header = $('header'),
            footer = $('footer'),
            // боковая панель
            sidebar = $('.page-nav__wrap'),
            // стрелка возле боковой панели
            toggle = $('.page-nav__toggle'),
            blog = $('.blog'),
            // начало касания
            touchStartX = 0,
            // конец касания
            touchEndX = 0,
            // длинна свапа для рабатывания скрипта
            threshold = 65;

        // toggle.on('click', function (event) {
        //
        //     event.preventDefault();
        //     toggle.toggleClass('page-nav__toggle--opened');
        //     sidebar.toggleClass('page-nav__wrap--opened');
        //
        // });
        // sidebar.on('click', function (event) {
        //
        //     toggle.removeClass('page-nav__toggle--opened');
        //     sidebar.removeClass('page-nav__wrap--opened');
        //
        // });

        // выез сайдбара по клику:
        // вещаем обработчик кликов на страницу
        $(doc).click(function (e) {
            // если клик произошол вне наших элементов или их потомков
            if (e.target !== sidebar[0] && !sidebar.has(e.target).length &&
                e.target !== toggle[0] && !toggle.has(e.target).length) {
                // удаляем класс
                toggle.removeClass('page-nav__toggle--opened');
                sidebar.removeClass('page-nav__wrap--opened');
                // если клик произошёл по стрекле
            } else if (e.target === toggle[0]) {
                // меняем класс
                toggle.toggleClass('page-nav__toggle--opened');
                sidebar.toggleClass('page-nav__wrap--opened');
            }
        });

        // отслеживаем начало касания
        body.on('touchstart', function (event) {
            let touch = event.originalEvent.touches[0] || event.originalEvent.changedTouches[0];
            touchStartX = touch.pageX;
        });

        // отслеживаем конец касания
        body.on('touchend', function (event) {
            let touch = event.originalEvent.touches[0] || event.originalEvent.changedTouches[0];
            touchEndX = touch.pageX;

            // если разность от конца до начала касание больше значения threshold
            if (touchEndX - touchStartX > threshold) {
                // добавляем класс
                sidebar.addClass('page-nav__wrap--opened');
                toggle.addClass('page-nav__toggle--opened');
                // если разность от конца до начала касание меньше отрицательного значения threshold
            } else if (touchEndX - touchStartX < -threshold) {
                // убераем класс
                sidebar.removeClass('page-nav__wrap--opened');
                toggle.removeClass('page-nav__toggle--opened');
            }
        });
    }
});