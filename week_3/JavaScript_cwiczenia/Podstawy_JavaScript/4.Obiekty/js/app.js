//zadanie 1
console.log('zadanie 1');

var Car = function (col, newBrand, newNum) {
    this.color = col;
    this.brand = newBrand;
    this.num = newNum;
};

var audiAA = new Car('red', 'audi', 'WE34');

Car.prototype.beep = function () {
    console.log('beep, beep');
};

var km = 25;
Car.prototype.drive = function (km) {
    console.log('Samochod w kolorze: ' + this.color + ' marki: ' + this.brand + ' o numerze rej: ' + this.num + ' jedzie: ' + km + ' kilometrow');
};

audiAA.beep();
audiAA.drive(km);

//zadanie 2 - do skończenia
console.log('zadanie 2');

audiAA.przeglady = [];
console.log(audiAA.przeglady);

Car.prototype.addPrzeglady

var Car = function (name, marka, nrReg) {
    this.name = name;
    this.marka = marka;
    this.nrReg = nrReg;
};

Car.prototype.addPrzeglad = function (data) {
    this.przeglady.push(data);
};


//Car.checkDate = [];
//Car.prototype.addCheckDate = function(cDate){
//    this.checkDate.push(cDate);
//}
//audiAA.addCheckDate('11.11.11');
//
//Car.prototype.showCheckDate = function(){
//    console.log(this.checkDate);
//}
//audiAA.showCheckDate();