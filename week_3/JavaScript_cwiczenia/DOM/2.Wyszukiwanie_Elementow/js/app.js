document.addEventListener("DOMContentLoaded", function () {
    /*
     Poniżej napisz kod rozwiązujący zadania
     */

    console.log('ZADANIE 1------------------------------------');
    //zadanie 1  //1
    var byId = document.getElementById('home');
    console.log(byId);

    var byIdTwo = document.querySelector('#home');
    console.log(byIdTwo);

    //zadanie 1  //2
    var firstLi = document.querySelector('li:not([data-direction])');
    console.log(firstLi);


    //zadanie 1  //3
    var myBlock = document.querySelector('.block');
    console.log(myBlock);


    console.log('ZADANIE 2-----------------------------------');

    var navLi = document.querySelectorAll('nav li');
    console.log('elementow li w nav jest: ' + navLi.length);

    var pInDiv = document.querySelectorAll('div p');
    console.log('elementow p w div: ' + pInDiv.length);

    var divArt = document.querySelectorAll('article div');
    console.log('div w art: ' + divArt.length);


    console.log('ZADANIE 3 ---------------------------------');
    // tag orticle o klasie first
    var articleFirst = document.querySelector('article.first');
    console.log(articleFirst);

    // elementy h1 w tagu article
    var hOneTag = articleFirst.querySelectorAll('h1');
    console.log(hOneTag.length);

    //wyszystkie elementy o klasie offerts
    var allOfferts = articleFirst.querySelectorAll('.oferts');
    console.log(allOfferts.length);
    for (var i = 0; i < allOfferts.length; i++) {
        console.log(allOfferts[i].tagName);
    }


    //wszystkie divy i przeiteruj nazwy klas
    var allDivs = articleFirst.querySelectorAll('div');
    console.log(allDivs.length);
    for (var l = 0; l < allDivs.length; l++) {
        console.log(allDivs[l].className);
    }


    console.log('ZADANIE Dodatkowe----------------------------');

    var LiInNav = document.querySelectorAll('nav li');
    var notData = LiInNav.querySelectorAll(':not([data-direction=top])');
    for (var k = 0; k < notData.length; k++) {
        notData[k].setAttribute('data-direction', "top");
    }

});










