$(function(){

    var inputs = $('input');

    inputs.on('click', function(){
        $(this).css('box-shadow', 'inset 0 0 5px 5px #888');
    })

    inputs.on('mouseleave', function(){
        $('body').css('background-color', 'grey')
    })
});
