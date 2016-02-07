document.addEventListener('DOMContentLoaded', function () {

    var submit = document.querySelector('.btn');
    var imgs = document.querySelectorAll('img');
    var options = document.querySelectorAll('option');


    submit.addEventListener('click', function (event) {
        event.preventDefault();

        if (options[0].selected == true) {
            imgs[0].style.display = 'none';
            imgs[1].style.display = 'none';
            imgs[2].style.display = '';
        }

        if (options[1].selected == true) {
            imgs[1].style.display = 'none';
            imgs[2].style.display = 'none';
            imgs[0].style.display = '';
        }

        if (options[2].selected == true) {
            imgs[0].style.display = 'none';
            imgs[2].style.display = 'none';
            imgs[1].style.display = '';
        }

    });
});

//if(options[0].innerHTML == 'Windows'){
//    imgs[0].style.display =  'none';
//    imgs[1].style.display =  'none';
//    imgs[2].style.display =  '';
//}
//
//if(options[1].innerHTML == 'Os X'){
//    imgs[1].style.display =  'none';
//    imgs[2].style.display =  'none';
//    imgs[0].style.display =  '';
//}
//
//if(options[2].innerHTML == 'Ubuntu'){
//    imgs[0].style.display =  'none';
//    imgs[2].style.display =  'none';
//    imgs[1].style.display =  '';
//}