/**
 * Created by RUS9211689 on 15.11.2017.
 */
////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////
//////////////  Заливка скилов skill fill  ////////////////////////////

module.exports = (function () {
    let
        skillBlock = $('.skills'),
        skills = $('.skills__circle--green');

    if (skills.length > 0) {
        // ищем следующий блок для отмены анимации
        let nextBlock = $('#section-2');
        // устанавливаем базовую длинну окружности
        let baseRadius = ' 282.743338824px';
        // получаем базовую длинну окружности в процентах
        let percentRadius = 282.743338824 / 100;
        // находим элемент с данными из базы
        let SkillElement = $('#getSkills');
        // забирам из элемента тест и парсим в JSON
        let SkillJson = JSON.parse(SkillElement.text());

        // переводим данные из базы в длинну окружности в px
        let getDataSkill = function (data) {
            let
                html5 = percentRadius * data['html5'] + baseRadius,
                css3 = percentRadius * data['css3'] + baseRadius,
                js = percentRadius * data['js'] + baseRadius,
                php = percentRadius * data['php'] + baseRadius,
                mysql = percentRadius * data['mysql'] + baseRadius,
                nodejs = percentRadius * data['nodejs'] + baseRadius,
                mongodb = percentRadius * data['mongodb'] + baseRadius,
                git = percentRadius * data['git'] + baseRadius,
                gulp = percentRadius * data['gulp'] + baseRadius,
                bower = percentRadius * data['bower'] + baseRadius;
            return [html5, css3, js, php, mysql, nodejs, mongodb, git, gulp, bower];
        };
        // передаём в функцию данные из базы в JSON
        getDataSkill = getDataSkill(SkillJson);

        $(window).scroll(function () { // отслеживаем скролл
            let
                wScroll = $(window).scrollTop(), // измеряем позицию от верха страницы
                skillsPos = skillBlock.offset().top, // ищем позицию элемента от верха страницы
                nextBlockPos = nextBlock.offset().top, // ищем позицию элемента от верха страницы
                skillsMargin = $(window).height() / 2,  // вводим коэффиицент что бы зарисовка начиналась заранее
                startAnimate = Math.ceil(wScroll - skillsPos + skillsMargin), // находим точку начала анимации
                endAnimate = Math.ceil(wScroll - nextBlockPos + skillsMargin); // находим точку конца анимации

            // условие которое дожно выполнятся для очистики скила
            if (startAnimate < 0 || endAnimate >= 0) {
                skills.css({ // изменяем css свойство
                    'stroke-dasharray': '0' + baseRadius
                });
            } else { // изменяем css свойство для всех элементов
                $('.skills__circle--html').css({
                    'stroke-dasharray': getDataSkill[0],
                });
                $('.skills__circle--css').css({
                    'stroke-dasharray': getDataSkill[1],
                });
                $('.skills__circle--js').css({
                    'stroke-dasharray': getDataSkill[2],
                });
                $('.skills__circle--php').css({
                    'stroke-dasharray': getDataSkill[3],
                });
                $('.skills__circle--sql').css({
                    'stroke-dasharray': getDataSkill[4],
                });
                $('.skills__circle--node').css({
                    'stroke-dasharray': getDataSkill[5],
                });
                $('.skills__circle--mongo').css({
                    'stroke-dasharray': getDataSkill[6],
                });
                $('.skills__circle--git').css({
                    'stroke-dasharray': getDataSkill[7],
                });
                $('.skills__circle--gulp').css({
                    'stroke-dasharray': getDataSkill[8],
                });
                $('.skills__circle--bower').css({
                    'stroke-dasharray': getDataSkill[9],
                });
            }
        });
    }
});