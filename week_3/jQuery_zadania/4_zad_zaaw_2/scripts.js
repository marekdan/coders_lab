$(function () {

    var buttons = $('button');

    buttons.on('click', function () {

        if ($(this).hasClass('added')) {
            $(this).removeClass('added');
            $(this).parent().parent().css('border-color', '');

        }
        else {
            $(this).addClass('added');
            $(this).parent().parent().css('border-color', 'green');
        }

    });

    //$('button').toggle(
    //    function() {
    //        $( this ).addClass( "added" );
    //        $(this).parent().parent().css('border-color', 'green');
    //    }, function() {
    //        $( this ).removeClass( "added" );
    //        $(this).parent().parent().css('border-color', '');
    //    }
    //);

});
