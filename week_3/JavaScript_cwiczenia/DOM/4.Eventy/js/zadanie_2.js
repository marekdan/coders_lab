document.addEventListener('DOMContentLoaded', function () {

    var button = document.querySelector('#mainBtn')
    console.log(button);

    button.addEventListener('click', function (event){
        console.log('hurra dziala');
    })
});