/**
 * Created by Jacek on 2016-01-11.
 */

document.addEventListener("DOMContentLoaded", function () {
    /*
     Poniżej napisz kod rozwiązujący zadania
     */

    //zadanie 1 /1
    var edge = document.querySelector('.edge');
    var ff = document.querySelector('.firefox');

    edge.style.backgroundImage = 'url("assets/img/edge.png")';
    ff.style.backgroundImage = 'url("assets/img/firefox.png")';


    //zadanie 1 /2
    var linkChrome = document.querySelector('div.chrome+a');
    var linkEdge = document.querySelector('div.edge+a');
    var linkFF = document.querySelector('div.firefox+a');
    console.log(linkChrome);
    console.log(linkEdge);
    console.log(linkFF);

    linkChrome.innerHTML = 'Chrome';
    linkEdge.setAttribute('href', 'https://www.microsoft.com/pl-pl/windows/microsoft-edge');
    linkFF.setAttribute('href', 'https://www.mozilla.org/pl/firefox/new/');
    linkFF.innerHTML = 'Firefox';


    //zadanie 1 /3
    var chrome = document.querySelector('.chrome');
    chrome.style.width = '100px';

    //zadanie 2
    var sName = document.querySelector('span#name');
    var sColor = document.querySelector('span#fav_color');
    var sMeal = document.querySelector('span#fav_meal');
    console.log(sName);
    console.log(sColor);
    console.log(sMeal);
    sName.innerHTML = 'Marek Daniłowicz';
    sColor.innerHTML = 'Czarny';
    sMeal.innerHTML = 'Kurczak';

    //zadanie 3 /1
    var ulClass = document.querySelector('.ex3 > ul');
    ulClass.classList.add("menu");

    //zadanie 3 /2
    var liClass = ulClass.querySelectorAll('li');
    for (var it = 0; it < liClass.length; it++) {
        liClass[it].classList.add('menuElement');
    }

    //zadanie 3 /3
    var takeError = document.querySelectorAll('.error');
    for (var jk = 0; jk < takeError.length; jk++) {
        takeError[jk].classList.remove('error');
    }


    //zadanie 4 /1

    var exForLi = document.querySelectorAll('.ex4 li');

    for (var kl = 0; kl < exForLi.length; kl++) {
        exForLi[kl].dataset.id = (kl + 1);

        //zadanie 4 /2
        exForLi[kl].setAttribute('data-id', kl + 1);
    }
    console.log(exForLi);


});