/**
 * Route for lotto.
 */
"use strict";

var express = require("express");
var router = express.Router();

router.get("/", (req, res) => {
    let data = {};

    for (var a = [], i = 0; i < 8; ++i) a[i] = i;

    // http://stackoverflow.com/questions/962802#962890
    function shuffle(array) {
        var tmp, current, top = array.length;
 /*       if (top) while (--top) {
            current = Math.floor(Math.random() * (top + 1));
            tmp = array[current];
            array[current] = array[top];
            array[top] = tmp;
        }*/
        array = Array.from({length: 7}, () => Math.floor(Math.random() * 35));
        return array;
    }

    a = shuffle(a);

    data.lotto = a;

    res.render("lotto", data);

});

module.exports = router;