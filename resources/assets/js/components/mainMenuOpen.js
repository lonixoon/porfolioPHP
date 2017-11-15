/**
 * Created by RUS9211689 on 15.11.2017.
 */
////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////
//////////////  Открывашка для главного меню  //////////////////////////
module.exports = (function() {
    let menuToggle = doc.querySelector('.main-nav__toggle'),
        menuClosed = doc.querySelector('.main-nav__list');

    if (menuToggle) {
        menuToggle.addEventListener('click', function (event) {
            event.preventDefault();
            menuClosed.classList.toggle('main-nav__list--opened');
            menuToggle.classList.toggle('main-nav__toggle--active');
        });
    }

    window.addEventListener('keydown', function(event) {
        if (event.keyCode === 27) {
            menuClosed.classList.remove('main-nav__list--opened');
            menuToggle.classList.toggle('main-nav__toggle--active');
        }
    });
});