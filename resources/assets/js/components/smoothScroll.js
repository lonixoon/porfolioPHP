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