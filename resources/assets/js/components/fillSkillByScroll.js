/**
 * Created by RUS9211689 on 15.11.2017.
 */
////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////
//////////////  Заливка скилов skill fill  ////////////////////////////

module.exports = (function () {
    let skills = $('.skills__circle--green');

    if (skills.length > 0) {
        let baseRadius = ' 282.743338824px';
        let percentRadius = 282.743338824 / 100;
        let SkillJson = $('#getSkills');
        let SkillData = JSON.parse(SkillJson.text());

        let getDataSkill = function (data) {
            let html5 = percentRadius * data['html5'];
            let css3 = percentRadius * data['css3'];
            let js = percentRadius * data['js'];
            let php = percentRadius * data['php'];
            let mysql = percentRadius * data['mysql'];
            let nodejs = percentRadius * data['nodejs'];
            let mongodb = percentRadius * data['mongodb'];
            let git = percentRadius * data['git'];
            let gulp = percentRadius * data['gulp'];
            let bower = percentRadius * data['bower'];

            $(window).scroll(function () { // отслеживаем скролл
                let wScroll = $(window).scrollTop(), // измеряем срок от верха страницы
                    // skills = $('.skills__circle'),
                    skillsPos = skills.offset().top, // ищем позицию элемента от верха страницы
                    skillsMargin = $(window).height() / 1.8,  // вводим коэффиицент что бы зарисовка начиналась заранее
                    startAnimate = Math.ceil(wScroll - skillsPos + skillsMargin); // находим точку начала анимации

                if (startAnimate < 0) { // условие которое дожно выполнятся для старта анимации
                    skills.css({ // изменяем css свойство
                        'stroke-dasharray': '0' + baseRadius
                    });

                } else {
                    $('.skills__circle--html').css({ // изменяем css свойство
                        'stroke-dasharray': html5 + baseRadius,
                    });
                    $('.skills__circle--css').css({ // изменяем css свойство
                        'stroke-dasharray': css3 + baseRadius,
                    });
                    $('.skills__circle--js').css({ // изменяем css свойство
                        'stroke-dasharray': js + baseRadius,
                    });
                    $('.skills__circle--php').css({ // изменяем css свойство
                        'stroke-dasharray': php + baseRadius,
                    });
                    $('.skills__circle--sql').css({ // изменяем css свойство
                        'stroke-dasharray': mysql + baseRadius,
                    });
                    $('.skills__circle--node').css({ // изменяем css свойство
                        'stroke-dasharray': nodejs + baseRadius,
                    });
                    $('.skills__circle--mongo').css({ // изменяем css свойство
                        'stroke-dasharray': mongodb + baseRadius,
                    });
                    $('.skills__circle--git').css({ // изменяем css свойство
                        'stroke-dasharray': git + baseRadius,
                    });
                    $('.skills__circle--gulp').css({ // изменяем css свойство
                        'stroke-dasharray': gulp + baseRadius,
                    });
                    $('.skills__circle--bower').css({ // изменяем css свойство
                        'stroke-dasharray': bower + baseRadius,
                    });
                }
            });
        };
        getDataSkill(SkillData);
    }
});