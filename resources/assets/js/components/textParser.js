/**
 * Created by RUS9211689 on 05.12.2017.
 */
module.exports = (function () {
    let Parser = require("simple-text-parser");
    let parser = new Parser();

    // Define a rule using a regular expression
    parser.addRule(/Site  \d\d\d - - - - - - - - -/, function(match, replace) {
        return match;
    });



    // parser.addRule(/TADOS2P -   ADMN970B - 0/, function(match, replace) {
    //     // Return the tag minus the `#` and surrond with html tags
    //     return '';
    // });

    // let test = parser.render("Some text #iamahashtag foo bar.");
    let content = $('pre');
    let textContent = content.text();
    let test = parser.render(textContent);

    return content.html(test)
});