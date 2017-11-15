/**
 * Created by RUS9211689 on 15.11.2017.
 */
////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////
//////////////  scroll parallax праллакс по скроллу  ///////////////////
// module.exports = $(window).scroll(function() {
//     let wScroll = $(window).scrollTop(), // вычисляем растояние от верха страницы
//         layer = $('.parallax').find('.parallax__layer--scroll'); // Выбираем все дивы parallax__layers в parallax

//     layer.map(function (key, value) { // Проходимся по всем элементам объекта (дивам .parallax__layers)
//         let
//             // bottomPosition = (key / 14), // Вычисляем на сколько нам надо опустить вниз наш слой что бы при перемещении по Y не видно было краев
//             scrollPosition = wScroll * (key / 14); // Вычисляем коофицент смешения по Y

//             $(value).css({
//                 'transform': 'translate3d(0, ' + scrollPosition + 'px, 0)', // Используем translate3d для более лучшего рендеринга на странице
//             });

//             if (scrollPosition > 400) { // если картинка заканчивается
//                 $(value).css({
//                     // 'bottom': '-' + bottomPosition + 'px', // выставляем bottom (т.к. картинка с запасом по низу выравнивание не требуется)
//                     'transform': 'translate3d(0, 400px, 0)', // ограничим прокрутку
//                 });
//             }
//     });
// });