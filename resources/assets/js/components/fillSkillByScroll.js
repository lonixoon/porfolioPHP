/**
 * Created by RUS9211689 on 15.11.2017.
 */
////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////
//////////////  Залисвка скилов skill fill  ////////////////////////////

module.exports = (function () {
    let skills = $('.skills__circle');

    if (skills.length > 0) {
        skills.css({ // изменяем css свойство
            'stroke-dasharray': '0 282.743338824px'
        });

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

        } else if (startAnimate > 0) {
            skills.css({ // изменяем css свойство
                'stroke-dasharray': '',
            });
        }
    });
}
})
;