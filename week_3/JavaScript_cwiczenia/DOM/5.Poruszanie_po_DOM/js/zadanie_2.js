document.addEventListener('DOMContentLoaded', function () {

    var allA = document.querySelectorAll('a');

    for (var i = 0; i < allA.length; i++) {

        allA[i].addEventListener('click', function () {

            var randomColor = "#" + Math.floor(Math.random() * 16777215).toString(16);
            this.parentElement.style.backgroundColor = randomColor;
        });
    }
});