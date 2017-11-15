/**
 * Created by RUS9211689 on 15.11.2017.
 */
////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////
//////////////  local storage для SVG  /////////////////////////////////
module.exports = (function () {
    let request = new XMLHttpRequest();

    request.open('GET', '/svg/symbol_sprite.html', true);

    request.onload = function() {

        if (request.status >= 200 && request.status < 400 ) {
            let node = doc.createElement("div");

            node.innerHTML = request.responseText;
            doc.body.insertBefore(node, doc.body.firstChild);

            localStorage.setItem( 'inlineSVGdata',  request.responseText );
        }
    };

    request.send();
});

