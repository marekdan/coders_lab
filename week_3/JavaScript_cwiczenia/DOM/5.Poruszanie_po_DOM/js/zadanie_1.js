document.addEventListener('DOMContentLoaded', function () {

    var allA = document.querySelectorAll('a');

    for (var i = 0; i < allA.length; i++) {

        allA[i].addEventListener('click', function () {

            if (this.nextElementSibling.style.display != 'none') {
                this.nextElementSibling.style.display = 'none';
            }
            else {
                this.nextElementSibling.style.display = '';
            }

        });
    }
});


