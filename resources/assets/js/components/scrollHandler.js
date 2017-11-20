/**
 * Created by RUS9211689 on 19.11.2017.
 */
module.exports = (function () {
    function ScrollHandler(pageId) {
        let page = $('#' + pageId);
        let pageStart = page.offset().top;
        let pageJump = false;

        function scrollToPage() {
            pageJump = true;
            $('html, body').animate({
                scrollTop: pageStart
            }, {
                duration: 1000,
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

    if ($('#header').length > 0) {
        new ScrollHandler('header');
    }
    if ($('#section2').length > 0) {
        new ScrollHandler('section2');
    }
});