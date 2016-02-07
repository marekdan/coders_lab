$(function () {

    var afterThat = $('.box'); //do czego ma się odniesc boxa przy tworzeniu

    //za pomocą szerokosci
    var boxH = $('.box').height();
    var boxW = $('.box').width();

    var newBox2 = $('<div>').width(boxW).height(boxH).css('backgroundColor', 'green');
    afterThat.after(newBox2);


    //za pomocą tej samej klasy

    var newBox = $("<div class =' box'>");

    afterThat.after(newBox);
});
