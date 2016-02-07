/**
 * Created by Jacek on 2016-01-12.
 */
document.addEventListener('DOMContentLoaded', function () {

    var body = document.querySelector('body');

    body.addEventListener('click', function (inf) {
        console.log('kliknięto body');
        console.log(inf.target);
        console.log(inf.currentTarget);

        if (inf.target.tagName == 'button') {

        }

        if (inf.target.id == 'button1' || inf.target.id == 'button2' || inf.target.id == 'button3') {

        }

        var tab = ['button1', 'button2', 'button3']
        if (tab.indexOf(inf.target.id) >= 0) {

        }
    });
});