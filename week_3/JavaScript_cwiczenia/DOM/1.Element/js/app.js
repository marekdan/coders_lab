
document.addEventListener("DOMContentLoaded", function () {
    var homeElement = document.getElementById("home");// obiekt ktory ma id home
    var childElements = document.querySelector(".oferts").children; //tablica wszystkich dzieci pierwszego elementu o klasie oferts
    var banner = document.querySelector(".ban"); // obiekt pierwszego elementu o klasie ban
    var blocks = document.querySelectorAll(".blocks"); // tablica wszystkich elementow o klasie blocks

    /*
     Poniżej napisz kod rozwiązujący zadania
     */
    //zadanie 1

    console.log(homeElement.className);

    for (var a = 0; a < childElements.length; a++) {
        var currChild = childElements[a];
        console.log(currChild.className);

        //console.log(childElements[a].className);
    }

    console.log(banner.className);

    for (var i = 0; i < blocks.length; i++) {
        var currBlock = blocks[i];
        console.log(currBlock.classList);
        console.log(currBlock.className);

    }


    //zadanie 2
    console.log('ZADANIE 2');

    for (var k = 0; k < blocks.length; k++) {
        var currBlock = blocks[k];
        console.log(currBlock.innerHTML);
        console.log(currBlock.outerHTML);
        //console.log(blocks[i].innerHTML);
    }

    for (var l = 0; l < blocks.length; l++) {
        var currBlock = blocks[l];
        currBlock.innerHTML = 'Nowa wartość diva o klasie blocks';
    }


    //zadanie 3
    console.log('ZADANIE 3');

    console.log(homeElement.id);

});







