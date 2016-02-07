$(function () {

    var where = $('div');

    //sposob 1
    var newSpan = $("<span>Jestem tutaj...</span>");

    //sposob 2
    //var newSpan = $('<span>').html('Jestem tutaj...');

    var newSpan = $("<span>4 Jestem tutaj...</span>");
    where.after(newSpan);
    var newSpan = $("<span>3 Jestem tutaj...</span>");
    where.before(newSpan);
    var newSpan = $("<span>1 Jestem tutaj...</span>");
    where.append(newSpan);
    var newSpan = $("<span>2 Jestem tutaj...</span>");
    where.prepend(newSpan);

});

var newElement = $("<div class='new'> This is new element</div>");

firstOfBar.after(newElement);


var newDiv = $("<div>");

//<div>​</div>

var newDiv = $("<div>Text który wyświetlamy</div>");

// <div>​Text który wyświetlamy​</div>

var newDiv = $("<div class = 'class1 foo' id='newDiv'>");

//<div class=​"class1 foo" id=​"newDiv">​</div>

var newDiv = $("<div>", {id: "myId", class: "class1 class2"});

//<div id=​"myId" class=​"class1 class2">​</div>