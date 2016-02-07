/**
 * Created by Jacek on 2016-01-12.
 */
document.addEventListener('DOMContentLoaded', function () {
    var button1 = document.querySelector('#button1 + p > .counter');
    var button2 = document.querySelector('#button2 + p > .counter');
    var button3 = document.querySelector('#button3 + p > .counter');

    var button1C = document.querySelector('#button1');
    var button2C = document.querySelector('#button2');
    var button3C = document.querySelector('#button3');

    var count1 = '';
    var count2 = '';
    var count3 = '';

    button1C.addEventListener('click', function (event) {
        count1 = button1.innerHTML;
        button1.innerHTML = parseInt(count1) + 1;
    });

    button2C.addEventListener('click', function (event) {
        count2 = button2.innerHTML;
        button2.innerHTML = parseInt(count2) + 1;
    });

    button3C.addEventListener('click', function (event) {
        count3 = button3.innerHTML;
        button3.innerHTML = parseInt(count3) + 1;
    });

});