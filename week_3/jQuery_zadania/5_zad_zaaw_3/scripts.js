$(function () {

    var expands = $('a.expand');
    expands.on('click', function (event) {
        event.preventDefault();
        $(this).parent().next('.container').slideDown('slow');
    });

    //zamykanie tylko tego jednego
    //var close = $('.close');
    //close.on('click', function(){
    //    $(this).parent().hide();
    //});

    //zamykanie wszystkich
    var close = $('.close');
    close.on('click', function(){
        close.parent().slideUp('slow');
    });
});
