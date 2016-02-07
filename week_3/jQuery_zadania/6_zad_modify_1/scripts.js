$(function () {

    var button = $('input[type=submit]');

    $(button).on('click', function (event) {
        event.preventDefault();

        var name = $('#addUser');
        var age = $('#age');

        var afterThat = $('.main');
        var newLi = $('<li>');
        newLi.attr('data-age', age.val()).html(name.val());
        afterThat.append(newLi);

        if (newLi.attr('data-age') < 15) {
            newLi.css('color', 'green');
        }
        else if (newLi.attr('data-age') > 15 && newLi.attr('data-age') < 40) {
            newLi.css('color', 'blue');
        }
        else {
            newLi.css('color', 'brown');
        }

    });
});

