$(function () {

    //zadanie 2 wyszukiwanie
    //punkt a - ustawienie koloru na czerwony wszystkim linkom
    $('a').css('color', 'red');

    //punkt b - zmiana koloru czarnego dla pozostałych
    $(":not(a[href=#])").css('color', '');

    // punkt c - zmodyfikowany punkt a - ustawienie przez dodanie klasy
    $("a[href=#]").addClass('redLinks');


    //zadanie 1 eventy
    var buttonMenu = $("a[href=#]");

    buttonMenu.on('click', function () {
        $(this).css('color', 'blue');
    });


    //zadanie 2 eventy
    var button = $('button');
    var button1 = button[0];
    var button2 = button[1];
    var button3 = button[2];

    $(button1).on('click', function () {
        console.log('kliknieto mnie');
    });

    $(button2).one('click', function () {
        console.log('kliknieto mnie ale nie da sie drugi raz');
    });

    $(button3).one('click', function () {
        $(button).off('click');
    });


    //zadanie 3 eventy
    var allP = $('p');

    $(allP).on('click', function () {
        $(button1).click();
    });


    //zadanie 4 eventy
    buttonMenu.on('mouseenter', function (){
        console.log('Hurra');
    });


    //zadanie 1 - zaawansowane wyszukiwanie
    var plan = $('a[href=#Signup]');

    plan.on('mouseenter', function(){
        $(this).parent().parent().css('background-color', 'grey');
        $(this).parent().parent().children('.planFeatures').css('font-size', '20px');

        //pokazanie przez usuniecie klasy
        $(this).parent().parent().children('.planName').children('.price').removeClass('price');

        //pokazanie przez show
        //$(this).parent().parent().children('.planName').children('.price').show();


    });

});


