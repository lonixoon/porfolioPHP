doc = document;
let saveSvgToLocalStorageSVG = require('./components/saveSvgToLocalStorageSVG'),
    mainMenuOpen = require('./components/mainMenuOpen'),
    slider = require('./components/slider'),
    preloaderPage = require('./components/preloaderPage'),
    mouseParallax = require('./components/mouseParallax'),
    scrollParallax = require('./components/scrollParallax'),
    smoothScroll = require('./components/smoothScroll'),
    drawSvgByScroll = require('./components/drawSvgByScroll'),
    fillSkillByScroll = require('./components/fillSkillByScroll'),
    flipLoginBlock = require('./components/flipLoginBlock'),
    sidebarOutput = require('./components/sitebarOutput'),
    sidebarSticky = require('./components/sidebarSticky');


saveSvgToLocalStorageSVG();
mainMenuOpen();
slider();
mouseParallax();
smoothScroll();
drawSvgByScroll();
fillSkillByScroll();
flipLoginBlock();
sidebarOutput();
sidebarSticky();







