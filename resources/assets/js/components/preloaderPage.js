/**
 * Created by RUS9211689 on 15.11.2017.
 */
////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////
//////////////  Визуализация пред загрузки страницы  ///////////////////

// module.exports = (function () {
//     // $('.preloader__circle').removeClass('preloader__circle--big preloader__circle--middle preloader__circle--small');
//     $('.preloader__circle--big').css({
//         'stroke-dasharray': '439.82288 439.82288',
//     });
//     $('.preloader__circle--middle').css({
//         'stroke-dasharray': '345.57512 345.57512',
//     });
//     $('.preloader__circle--small').css({
//         'stroke-dasharray': '251.32736 251.32736',
//     });
//     window.addEventListener('load', function () {
//         $('.page__header, .page__main, .page__footer').removeClass('page__header--hide page__main--hide page__footer--hide');
//         $('.preloader').addClass('preloader--hide');
//     })
// });

////////////////////////////////////////////////////////////////////////
////////////// Визуализация пред загрузки страницы /////////////////////
////////////// с отслеживаеним объектов ////////////////////////////////

module.exports = (function () {
    let imgs = []; // выводим адрес изображений в виде массива

    $.each($('*'), function () { // цикл поиска всех элементов на странице
        let $this = $(this),
            background = $this.css('background-image'), // ищем в css фоны всех элементов (включая элементы у которых фон none)
            img = $this.is('img'); // проверяем на соответствия элемента тегу img

        if (background !='none') { // если фон не равен none то
            let path = background.replace('url("', ''). replace('")', ''); // убираем лишние символы
            imgs.push(path); // и сохраняем в массив
        }

        if (img) {
            let path = $this.attr('src'); // если элемент изображение, сохраняем его отрибут src

            if (path) {
                imgs.push(path); // если scr не пустой, сохраняем в массив
            }
        }
    });

    let percent = 1;

    for (let i = 0; i < imgs.length; i++) { // цикл для который проходит по массиву imgs
        let image = $('<img>', { // создаём картинку
            attr: { // передаём атрибуты
                src : imgs[i]
            }
        });

        image.on('load', function() { // обработчик загрузки
            setPercent(imgs.length, percent); // изменяем ширину в соответствии с %
            percent++; // запускаем цикл
        });
    }

    function setPercent(total, current) { // считаем проценты загрузки
        let percent = Math.ceil(current / total * 100); // формула для расчёта процентов(Math.ceil округляет до целого в большую сторону)
        let
            percentBig = 439.82288 / 100 * percent + ' 439.82288',
            percentMiddle = 345.57512 / 100 * percent + ' 345.57512',
            percentSmaill = 251.32736 / 100 * percent + ' 251.32736';

        $('.preloader__circle--big').css({
            'stroke-dasharray': percentBig,
        });
        $('.preloader__circle--middle').css({
            'stroke-dasharray': percentMiddle,
        });
        $('.preloader__circle--small').css({
            'stroke-dasharray': percentSmaill,
        });
        $('.preloader__text').text(percent); // выводим % в тексте

        if (percent >=100) {
            $('.page__header, .page__main, .page__footer').removeClass('page__header--hide page__main--hide page__footer--hide');
            $('.preloader').addClass('preloader--hide');
        }
    }
});

// module.exports = $(doc).ready(function () {
//
//     $(function () {
//         let imgs = []; // выводим адрес изображений в виде массива
//
//         $.each($('*'), function () { // цикл поиска всех элементов на странице
//             let $this = $(this),
//                 background = $this.css('background-image'), // ищем в css фоны всех элементов (включая элементы у которых фон none)
//                 img = $this.is('img'); // проверяем на соответствия элемента тегу img
//
//             if (background !='none') { // если фон не равен none то
//                 let path = background.replace('url("', ''). replace('")', ''); // убираем лишние символы
//
//                 imgs.push(path); // и сохраняем в массив
//             }
//
//             if (img) {
//                 let path = $this.attr('src'); // если элемент изображение, сохраняем его отрибут src
//
//                 if (path) {
//                     imgs.push(path); // если scr не пустой, сохраняем в массив
//                 }
//             }
//         });
//
//         let percent = 1;
//
//         for (let i = 0; i < imgs.length; i++) { // цикл для который проходит по массиву imgs
//             let image = $('<img>', { // создаём картинку
//                 attr: { // передаём атрибуты
//                     src : imgs[i]
//                 }
//             });
//
//             image.on('load', function() { // обработчик загрузки
//                 setPercent(imgs.length, percent); // изменяем ширину в соответствии с %
//                 percent++; // запускаем цикл
//             });
//         }
//
//         function setPercent(total, curent) { // считаем проценты загрузки
//             let percent = Math.ceil(curent / total * 100); // формула для расчёта процентов(Math.ceil округляет до целого в большую сторону)
//
//             if (percent >=100) {
//                 $('.page__header').css('display', 'flex');
//                 $('.page__main').css('display', 'flex');
//                 $('.page__footer').css('display', 'flex');
//                 $('.preloader').hide();
//             }
//
//             $('.preloader__bar').css({ // выбираем элемент прелодер
//                 // 'width' : percent + '%' // меняем значение ширины на получившийся %
//             }).text(percent + '%'); // выводим % в тексте
//         }
//     });
// });