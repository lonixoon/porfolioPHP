/**
 * Created by RUS9211689 on 15.11.2017.
 */
////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////
//////////////  Слайдер  ///////////////////////////////////////////////
module.exports = (function() {
    let
        slides = doc.querySelectorAll('.my-work__list .my-work__item'), // ищем все слайды
        slide = doc.querySelector('.my-work__list .my-work__item'), // ищем все слайды
        currentSlide = 0,
        next = doc.querySelectorAll('.slider__next'), // ищем кнопки next на всех слайдах
        back = doc.querySelectorAll('.slider__back'); // ищем кнопки back на всех слайдах

    // if (slides.length > 0) {
    //     let slideInterval = setInterval(backSlide, 5000); // делаем слайд шоу (если требуется)
    // }

    // показать первую работу при загрузки
    slide.classList.add('my-work__item--show');



    function nextSlide() { // перелистываение сладера вперед
        goToSlide(currentSlide + 1);
    }

    function backSlide() { // перелистываение сладера назад
        goToSlide(currentSlide - 1);
    }

    function goToSlide(n) { // функция перехода на другйо слайд
        slides[currentSlide].className = 'my-work__item'; // убераем первому слайду класс "my-work__item--show"
        currentSlide = (n + slides.length) % slides.length; // вычисляем номер следующего элемента массива
        slides[currentSlide].className = 'my-work__item my-work__item--show'; // добавляем ему класс "my-work__item--show"
    }

    for (let i = 0; i < next.length; i++) {
        next[i].addEventListener('click', function() {
            nextSlide();
        });
    }

    for (let i = 0; i < back.length; i++) {
        back[i].addEventListener('click', function() {
            backSlide();
        });
    }
});