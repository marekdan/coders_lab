document.addEventListener('DOMContentLoaded', function () {

    //1
    var first = document.querySelector('.first');
    console.log('first');
    console.log(first);


    var firstChildren = first.firstElementChild;

    console.log('firstChildren');
    console.log(firstChildren);

    var third = firstChildren.children;
    console.log('firstChildren[2]');
    console.log(third[2]);


    //2
    console.log('ZADANIE 4 /2');

    var idSecond = document.querySelector('#second');
    var parentSecond = idSecond.parentElement;
    var parentChildren = parentSecond.children;
    console.log(parentChildren[3]);

    //3
    console.log('ZADANIE 4 /3');


    var ell = document.querySelector("[data-ex='third']");
    var elldziadek = ell.parentElement.parentElement;
    var lastDzieckoDziadka = elldziadek.lastElementChild;
    var elllastdziecko = lastDzieckoDziadka.firstElementChild;
    var childList = elllastdziecko.children.length;
    var middleKey = Math.ceil(childList / 2) - 1;
    elllastdziecko.children[middleKey]; //wybiera srodkowego
    console.log(elllastdziecko.children[middleKey]);

    //4
    console.log('ZADANIE 4 /4');

    var forth = document.querySelector('div.forth');
    var forthParent = forth.parentElement;
    var firstArticle = forthParent.querySelector('article');

    var counterP = 0;
    for (var i = 0; i < firstArticle.children.length; i++) {
        var currChildren = firstArticle.children[i];
        if (currChildren.tagName == 'P') {
            counterP++;

            if (counterP == 2) {
                console.log(currChildren);
                //w tym momencie w currChildren jest szukany element
                break;
            }
        }
    }


});