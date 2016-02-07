document.addEventListener('DOMContentLoaded', function () {

    var checkbox = document.querySelector('#invoice');

    var form= document.querySelector('#invoiceData');

    if(checkbox.checked == false){
        form.style.display = 'none';
    }

    checkbox.addEventListener('click', function () {
        if(checkbox.checked == false){
            form.style.display = 'none';
        }
        else{
            form.style.display = '';
        }

    });
});

// po zaladowaniu strony sprawdzic czy zaznaczony checkbox
// jak nie to ukryc formularz