/**
 * Created by RUS9211689 on 15.11.2017.
 */
////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////
//////////////  Слайдер  ///////////////////////////////////////////////
module.exports = (function () {
    let
        slides = doc.querySelectorAll('.my-work__list .my-work__item'), // ищем все слайды
        slide = doc.querySelector('.my-work__list .my-work__item'), // ищем все слайды
        currentSlide = 0,
        next = doc.querySelectorAll('.slider__next'), // ищем кнопки next на всех слайдах
        back = doc.querySelectorAll('.slider__back'), // ищем кнопки back на всех слайдах
        input = doc.getElementsByName('works');


    // показать первую работу при загрузки
    if (slide) {
        slide.classList.add('my-work__item--show');
        radioCheckedDefault();
    }

    // if (slides.length > 0) {
    //     // let slideInterval = setInterval(backSlide, 500); // делаем слайд шоу (если требуется)
    // }

    function radioCheckedDefault() {
        input[0].checked = 'checked';
    }

    function radioChecked(i) {
        input[i].checked = 'checked';
    }

    function nextSlide() { // перелистываение сладера вперед
        goToSlide(currentSlide + 1);
    }

    function backSlide() { // перелистываение сладера назад
        goToSlide(currentSlide - 1);
    }

    function goToSlide(i) { // функция перехода на другйо слайд
        slides[currentSlide].className = 'my-work__item'; // убераем первому слайду класс "my-work__item--show"
        currentSlide = (i + slides.length) % slides.length; // вычисляем номер следующего элемента массива
        slides[currentSlide].className = 'my-work__item my-work__item--show'; // добавляем ему класс "my-work__item--show"
    }

    // кнопка вперёд
    next.forEach(function (item, i, arr) {
        next[i].addEventListener('click', function () {
            nextSlide();
            let active = $('.my-work__list .my-work__item').index($('.my-work__item--show'));
            radioChecked(active);
        });
    });
    // вариант с for:
    // for (let i = 0; i < next.length; i++) {
    //     next[i].addEventListener('click', function() {
    //         nextSlide();
    //         let active = $('.my-work__list .my-work__item').index($('.my-work__item--show'));
    //         radioChecked(active);
    //     });
    // }

    // кнопка назад
    for (let i = 0; i < back.length; i++) {
        back[i].addEventListener('click', function () {
            // переключаем слай по сабытию клик
            backSlide();
            // ищём с массиве элемент с класом active
            let active = $('.my-work__list .my-work__item').index($('.my-work__item--show'));
            // передаём index этого элемента в функцию переключить радиобатон
            radioChecked(active);
        });
    }

    // радиобатон
    for (let i = 0; i < input.length; i++) {
        input[i].addEventListener('click', function () {
            goToSlide(i);
        });
    }
});