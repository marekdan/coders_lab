//zadanie 1
console.log('zadanie 1');

function mix(name) {
    result = " zmiksowana " + name; //dodaje do nazwy warzywa zmiksowana
    return result;
}

console.log(mix('marchewka'));


//zadnaie 2
console.log('zadanie 2');

function max(numberA, numberB) {
    if (numberA > numberB) {
        return numberA;
    }
    return numberB;
}

console.log(max(5, 7));


//zadanie 3.1
console.log('zadanie 3.1');

function biggest() {
    var max = arguments[0];
    for (var i = 1; i < arguments.length; i++) {
        if (arguments[i] > max) {
            max = arguments[i];
        }
    }
    return max;
}

console.log(biggest(1, -2, -111, 4, 5, -66, -88, 45, 33, 11, 25));


//zadanie 3.2
console.log('zadanie 3.2');

function total(numA, numB, numC) {
    var result = numA + numB + numC;
    return result;
}

console.log(total(1, 5, 3));


//zadanie 4
console.log('zadanie 4');

var funct = function () {
    for (var i = 0; i < 10; i++) {
        console.log("Wszędzie i zawsze pisząc kod używam funkcji oraz pilnuję, żeby nie tworzyć zmiennych globalnych");
    }
}

funct();


//zadanie 5
console.log('zadanie 5');

function rentCost(days) {

    var week = 0;
    var cost = 0;

    for (var i = 1; i <= days; i++) {
        if (i % 7 == 0) {
            week++;
        }
    }
    if (days == 1) {
        cost = days * 200;
    }
    else if (days >= 2 && days <= 3) {
        cost = days * 180;
    }
    else if (days >= 4 && days <= 7) {
        cost = days * 160 - (week * 50);
    }
    else if (days >= 8) {
        cost = days * 150 - (week * 50);
    }
    else {
        console.log('Zle dane');
    }
    return cost;
}

console.log(rentCost(8));


//zadanie 6
console.log('zadanie 6');

function rockPaperScissors(playerA, playerB) {

    if (playerA == playerB) {
        return 'Remis'
    }
    else if (playerA == 'papier' && playerB == 'kamien') {
        return 'Wygrał gracz 1';
    }
    else if (playerA == 'papier' && playerB == 'nozyce') {
        return 'Wygrał gracz 2';
    }
    else if (playerA == 'nozyce' && playerB == 'papier') {
        return 'Wygral gracz 1';
    }
    else if (playerA == 'nozyce' && playerB == 'kamien') {
        return 'Wygral gracz 2';
    }
    else if (playerA == 'kamien' && playerB == 'nozyce') {
        return 'Wygral gracz 1';
    }
    else if (playerA == 'kamien' && playerB == 'papier') {
        return 'Wygral gracz 2';
    }
    else {
        return 'Zle dane';
    }

}

var playerA = 'nozyce';
var playerB = 'nozyce';
console.log('Wynik: ' + rockPaperScissors(playerA, playerB));


//zadanie 7
console.log('zadanie 7');

function calculateTip(amount, rating) {
    var tip = 0;
    if (rating == "Bardzo dobra obsługa") {
        tip = amount * 0.25;
    }
    else if (rating == "Dobra obsługa") {
        tip = amount * 0.20;
    }
    else if (rating == "Średnia obsługa") {
        tip = amount * 0.15;
    }
    else if (rating == "Zła obsługa") {
        tip = amount * 0;
    }
    return tip;
}

console.log('Napiwek wynosi: ' + calculateTip(100, "Zła obsługa"));








