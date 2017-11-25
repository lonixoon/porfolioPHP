/**
 * Created by RUS9211689 on 19.11.2017.
 */
module.exports = (function () {
    function ScrollHandler(pageId) {
        // определяем секцию
        let page = $('#' + pageId);
        // находим верх секции
        let pageStart = page.offset().top;
        let pageJump = false;

        function scrollToPage() {
            pageJump = true;
            $('html, body').animate({
                scrollTop: pageStart
            }, {
                // скорость прокрутки
                duration: 600,
                complete: function () {
                    pageJump = false;
                }
            });
        }

        window.addEventListener('wheel', function (event) {
            let viewStart = $(window).scrollTop();
            if (!pageJump) {
                let pageHeight = page.height();
                let pageStopPortion = pageHeight / 2;
                let viewHeight = $(window).height();

                let viewEnd = viewStart + viewHeight;
                let pageStartPart = viewEnd - pageStart;
                let pageEndPart = (pageStart + pageHeight) - viewStart;

                let canJumpDown = pageStartPart >= 0;
                let stopJumpDown = pageStartPart > pageStopPortion;

                let canJumpUp = pageEndPart >= 0;
                let stopJumpUp = pageEndPart > pageStopPortion;

                let scrollingForward = event.deltaY > 0;
                if (( scrollingForward && canJumpDown && !stopJumpDown)
                    || (!scrollingForward && canJumpUp && !stopJumpUp)) {
                    event.preventDefault();
                    scrollToPage();
                }
            } else {
                event.preventDefault();
            }
        });
    }

    // опеределяем по классу section-scroll длину массива
    for (let i = 0; i < 10; i++) {
        new ScrollHandler('section-' + i);
    }



    // if ($('#header').length > 0 ||
    //     $('#section2').length > 0 ||
    //     $('#section3').length > 0 ||
    //     $('#section4').length > 0) {
    //     new ScrollHandler('header');
    //     new ScrollHandler('section2');
    //     new ScrollHandler('section3');
    //     new ScrollHandler('section4');
    // }

});