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