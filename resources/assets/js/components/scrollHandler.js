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
                // скорость анимации прокрутки
                duration: 600,
                complete: function () {
                    pageJump = false;
                }
            });
        }

        // добавляем событие на прокрутку колёсика мышки
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

    // вызываем функцию на каждый блок
    for (let i = 0; i < 6; i++) {
        if ($('section-' + i).length > 0) {
            new ScrollHandler('section-' + i);
        }
    }
});