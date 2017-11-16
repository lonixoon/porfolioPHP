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