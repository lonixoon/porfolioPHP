/**
 * Created by RUS9211689 on 15.11.2017.
 */
////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////
//////////////  Визуализация пред загрузки страницы  ///////////////////

module.exports = (function () {
    // $('.preloader__circle').removeClass('preloader__circle--big preloader__circle--middle preloader__circle--small');
    $('.preloader__circle--big').css({
        'stroke-dasharray': '439.82288 439.82288',
    });
    $('.preloader__circle--middle').css({
        'stroke-dasharray': '345.57512 345.57512',
    });
    $('.preloader__circle--small').css({
        'stroke-dasharray': '251.32736 251.32736',
    });
    window.addEventListener('load', function () {
        $('.page__header, .page__main, .page__footer').removeClass('page__header--hide page__main--hide page__footer--hide');
        $('.preloader').addClass('preloader--hide');
    })
});

////////////////////////////////////////////////////////////////////////
////////////// Визуализация пред загрузки страницы /////////////////////
////////////// с отслеживаеним объектов ////////////////////////////////

// module.exports = (function () {
//     let imgs = []; // массив для изображений
//
//     $.each($('*'), function () { // поиск всех элементов на странице
//         let $this = $(this),
//             background = $this.css('background-image'), // ищем в css фоны всех элементов (включая элементы у которых фон none)
//             img = $this.is('img'), // проверяем на соответствия элемента тегу img
//             img2 = $this.is('source');
//
//         if (background !=='none') { // если фон не равен none
//             let path = background.replace('url("', ''). replace('")', ''); // убираем лишние символы
//             imgs.push(path); // и добавляем в массив
//         }
//
//         if (img) { // если элемент изображение
//             let path = $this.attr('src'); // берем scr
//
//             if (path) { // если scr не пустой
//                 imgs.push(path); //  добавляем его в массив
//             }
//         }
//
//         if (img2 && ($(window).width() > 1200)) { // если элемент изображение
//             let path = $this.attr('srcset'); // берем srcset
//
//             if (path) { // если scr не пустой
//                 imgs.push(path); //  добавляем его в массив
//             }
//         }
//     });
//
//     let percent = 1;
//
//     for (let i = 0; i < imgs.length; i++) { // цикл для который проходит по массиву imgs
//         let image = $('<img>', {
//             attr: { // передаём атрибуты
//                 src : imgs[i]
//             }
//         });
//
//         image.on('load', function() { // обработчик загрузки
//             setPercent(imgs.length, percent); // изменяем ширину в соответствии с %
//             percent++; // запускаем цикл
//         });
//     }
//
//     function setPercent(total, current) { // считаем проценты загрузки
//         let percent = Math.ceil(current / total * 100); // формула для расчёта процентов(Math.ceil округляет до целого в большую сторону)
//
//         let
//             percentBig = 439.82288 / 100 * percent + ' 439.82288',
//             percentMiddle = 345.57512 / 100 * percent + ' 345.57512',
//             percentSmaill = 251.32736 / 100 * percent + ' 251.32736';
//
//         $('.preloader__circle--big').css({
//             'stroke-dasharray': percentBig,
//         });
//         $('.preloader__circle--middle').css({
//             'stroke-dasharray': percentMiddle,
//         });
//         $('.preloader__circle--small').css({
//             'stroke-dasharray': percentSmaill,
//         });
//         $('.preloader__text').text(percent); // выводим % в тексте
//
//         if (percent >=100) {
//             console.log(imgs);
//             $('.page__header, .page__main, .page__footer').removeClass('page__header--hide page__main--hide page__footer--hide');
//             $('.preloader').addClass('preloader--hide');
//         }
//     }
// });