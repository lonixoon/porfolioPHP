/**
 * Created by RUS9211689 on 15.11.2017.
 */
////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////
///////////////////////  Флип flip блока  //////////////////////////////
module.exports = (function () {
    let
        loginBtn = doc.querySelector('.authorization-btn--auth'),
        indexBtn = doc.querySelector('.btn--authorization'),
        authorBlock = doc.querySelector('.flip__front'),
        loginForm = doc.querySelector('.flip__back'),
        flipper = ('flip__flipper');

    if (loginBtn) {
        loginBtn.addEventListener('click', function (event) {
            event.preventDefault();
            authorBlock.classList.add(flipper);
            loginForm.classList.remove(flipper);
            $(loginBtn).hide();
        });

        indexBtn.addEventListener('click', function (event) {
            event.preventDefault();
            authorBlock.classList.remove(flipper);
            loginForm.classList.add(flipper);
            $(loginBtn).show();
        });
    }
});