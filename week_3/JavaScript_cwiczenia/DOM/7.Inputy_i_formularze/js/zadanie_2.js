document.addEventListener('DOMContentLoaded', function () {

    var price = document.querySelector('#price'); //zmienna z ceną


    var checkboxes = document.querySelectorAll('input');
    console.log(checkboxes);

    for (var i = 0; i < checkboxes.length; i++) {
        checkboxes[i].addEventListener('click', function () {
            if (this.innerHTML === 'Wszystkie dodatki') {
                console.log('doda');
            }
            else if (this.innerHTML === 'Wyszczyść') {
                console.log('wysz');

            }
        });
    }
});


document.addEventListener('DOMContentLoaded', function () {

    var checkboxes = document.querySelectorAll('[type=checkbox]');
    for (var a = 0; a < checkboxes.length; a++) {
        checkboxes[a].addEventListener('click', function () {
            //sprawdzam czy checkbox jest normalnym z ceną
            if (this.hasAttribute('data-price')) {
                //jest z ceną wiec sprawdzam czy zaznaczony aby dodac lub odjąć od sumy
                //pobieram cenę
                var checkedPrice = decimals(parseFloat(this.dataset.price));
                var sum = document.getElementById('price');
                var suma = decimals(parseFloat(sum.innerHTML));
                if (this.checked) {
                    //dodaje do sumy
                    suma += checkedPrice;
                } else {
                    //odejmuje od sumy
                    suma -= checkedPrice;
                }

                //aktualizuje sume
                sum.innerHTML = decimals(suma) + 'zł';
            }
        });
    }

    var checkboxesSpecial = document.querySelectorAll('input:not([data-price])');
    checkboxesSpecial[0].addEventListener('click', function () {
        //klikniety pierwszy wiec zaznaczam wszystkie checkboxy które mają cenę
        for (var a = 0; a < checkboxes.length; a++) {
            //sprawdzam czy checkbox jest normalnym z ceną
            if (checkboxes[a].checked == false && checkboxes[a].hasAttribute('data-price')) {
                checkboxes[a].click();
            }
        }
    });
    checkboxesSpecial[1].addEventListener('click', function () {
        //klikniety pierwszy wiec zaznaczam wszystkie checkboxy które mają cenę
        for (var a = 0; a < checkboxes.length; a++) {
            //sprawdzam czy checkbox jest normalnym z ceną
            if (checkboxes[a].checked && checkboxes[a].hasAttribute('data-price')) {
                checkboxes[a].click();
            }
        }
    });

    var btn = document.querySelector('button');
    btn.addEventListener('click', function (e) {
        e.preventDefault();
        alert(document.getElementById('price').innerHTML);
    });
});

function decimals(number) {
    return Math.round(number * 100) / 100;
}