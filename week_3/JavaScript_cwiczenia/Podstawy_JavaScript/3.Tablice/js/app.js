//zadanie 1 for
console.log('zadanie 1 - for');

function printTable(tab) {

    if (tab.constructor === Array) {
        var leng = tab.length - 1;
        for (var i = 0; i <= leng; i++) {
            console.log(tab[i]);
        }
    }
    else {
        console.log('To nie jest tablica');
    }
}

console.log('Funkcja for: ');
var tab = 2;
printTable(tab);

console.log('Funkcja for: ');
var tab = [11, 2, 8, 22, 33, 5];
printTable(tab);


//zadane 1 foreach
console.log('zadanie 1 - foreach');

function printTableForE(tab) {

    if (tab.constructor === Array) {
        tab.forEach(function (element) {
            console.log(element);
        });
    }
    else {
        console.log('To nie jest tablica');
    }
}

console.log('Funkcja forEach test 1: ');
var tab = 2;
printTableForE(tab);

console.log('Funkcja forEach test 2: ');
var tab = [11, 2, 8, 22, 33, 5]
printTableForE(tab);


//zadanie 2
console.log('zadanie 2');

function addArray(tab) {
    var total = 0;
    for (var i = 0; i < tab.length; i++) {
        total += tab[i];
    }
    return total;
}

function multiplayArray(tab) {
    if (tab.constructor === Array) {
        var total = 1;
        for (var i = 0; i < tab.length; i++) {
            total *= tab[i];
        }
        return total;
    }
    else {
        console.log('To nie jest tablica');
    }
}

var tab = [1, 2, 3, 4, 5];
console.log('wynik dodawania to: ' + addArray(tab));

var tab = [1, 2, 3, 4];
console.log('wynik mnożenia to: ' + multiplayArray(tab));


//zadanie 3
console.log('ZADANIE 3');

tab = ['ala         a   s', 'alamakotaikotmalae', 'ala ma kota', 'napisma10znakow', 012345622891, 222, 'jeszcze1wyrazktory', '!@#$%t^&*(('];

function checktab(tab) {
    var truetab = [];
    var stringtab = [];

    for (var i = 0; i < tab.length; i++) {
        truetab[i] = false;

        if (tab[i].length >= 10) {

            var big = tab[i].toLowerCase;
            var short = tab[i].toUpperCase;
            if (big !== short) {

                var space = -1;
                space = tab[i].indexOf(" ");
                if (space == -1) {
                    truetab[i] = true;
                    stringtab.push(tab[i]);
                    console.log(tab[i]);
                }
            }
        }
    }

    console.log('tablica prawdy');
    truetab.forEach(function (ele) {
        console.log(ele);
    });

    console.log('tablica elementow');
    stringtab.forEach(function (elem) {
        console.log(elem);
    });

}

checktab(tab);


//zadanie 4
console.log('ZADANIE 4');

function reverseSorted(tab) {
    tab = tab.sort();
    tab = tab.reverse();
    return tab;
}

var tab = [1, 4, 5, 3, 2];
console.log(reverseSorted(tab));


//zadanie 5
console.log('ZADANIE 5');

function createMultiTable(num) {
    tab = [];
    table = [];
    for (var i = 0; i < num; i++) {
        for (var j = 0; j < num; j++) {
            table[j] = j;
        }
        tab[i] = table;
    }
    return tab;
}


//zadanie 6
console.log('ZADANIE 6 - for');

var size = 5;
var board = createMultiTable(size);

for (var i = 0; i < size; i++) {
    for (var j = 0; j < size; j++) {
        console.log(board[i][j]);
    }
}

console.log('ZADANIE 6 - foreach');

createMultiTable(5).forEach(function (element) {
    element.forEach(function (ele) {
        console.log(ele);
    });
});

