doc = document;

let
    // сохранение SVG в LocalStorage
    saveSvgToLocalStorageSVG = require('./components/saveSvgToLocalStorageSVG'),
    // открывашка главного меню
    mainMenuOpen = require('./components/mainMenuOpen'),
    // слайде на странице work
    slider = require('./components/slider'),
    // предзагрузчик для страниц
    preloaderPage = require('./components/preloaderPage'),
    // эффект паралакса на главной странице
    mouseParallax = require('./components/mouseParallax'),
    // эффект паралакса по скроллу
    scrollParallax = require('./components/scrollParallax'),
    // плавный скролл до якоря
    smoothScroll = require('./components/smoothScroll'),
    // зарисовка SVG картинки при проуртки
    drawSvgByScroll = require('./components/drawSvgByScroll'),
    // заливка скилов при прокрутки
    fillSkillByScroll = require('./components/fillSkillByScroll'),
    // переворачивалка для формы на главной странице
    flipLoginBlock = require('./components/flipLoginBlock'),
    // выезжающий по свайпу сайдбар для мобильной версии
    sidebarOutput = require('./components/sitebarOutput'),
    // приклеенный сайдбар для блога
    sidebarSticky = require('./components/sidebarSticky'),
    // плавная прокрутка на 1 экран вниз
    scrollHandler = require('./components/scrollHandler');

// сохранение SVG в LocalStorage
saveSvgToLocalStorageSVG();
// открывашка главного меню
mainMenuOpen();
// слайде на странице work
slider();
// эффект паралакса на главной странице
mouseParallax();
// плавный скролл до якоря
smoothScroll();
// зарисовка SVG картинки при проуртки
drawSvgByScroll();
// заливка скилов при прокрутки
fillSkillByScroll();
// переворачивалка для формы на главной странице
flipLoginBlock();
// выезжающий по свайпу сайдбар для мобильной версии
sidebarOutput();
// приклеенный сайдбар для блога
sidebarSticky();
// плавная прокрутка на 1 экран вниз
scrollHandler();







