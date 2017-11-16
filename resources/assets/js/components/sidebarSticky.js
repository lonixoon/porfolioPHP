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