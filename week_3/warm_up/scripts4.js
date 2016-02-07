$(function () {
    $('.pobieranieCzasu').on('click', function () {
        var toCalc=parseInt($('#timestamp').html());
        var dataToSend= {};
        dataToSend.timestamp = toCalc;

        //var dataToSend = {timestamp: toCalc};
        $.ajax({
            url: 'api2.php',
            type: 'POST', //pobierz metoda post
            data: dataToSend,
            dataType: 'json',
            success: function (result) {
                $('#aktualnyCzas').html(result.data);
                //$('#timestamp').html(result.czasTimetamp);
                //$('#data').html(result.losowaLiczba);
                console.log('sukces');
            },
            error: function () {
                console.log('wystapil blad');
            },
            complete: function () {
                console.log('zakonczono');
            }
        });
    });
});