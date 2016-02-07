# JacaScript - Ćwiczenia - Obiekty

Zadania wprowadzające do korzystania z twożenia i używania obiektów. 
Ćwiczenia powinny być rozwiązane w pliku app.js. 
Pamiętaj, żeby oddzielać ćwiczenia komentarzami i pisać czytelny i dobrze sformatowany kod. 


## Ćwiczenie 1

Stwórz obiekt samochód, utwórz dla niego odpowiednie atrybuty i metody. 
Samochód powinien trąbić (metoda która wypisuje w koncoli informacje o tym że samochód trąbi) i jeździć (metoda która wypisuje w koncoli informacje o tym że samochód jedzie), powinien posiadać informacje o kolorze, marce i numerze rejestracyjnym.
Wypisz wszystkie te informacje w konsoli.

Przykład:

"Samochód w kolorze: czerwony, marki: Mercedes, o numerze rejestracyjnym: WE 234L, jedzie sobie prosto"

"pip pip" 

## Ćwiczenie 2

Do obiektu samochód z ćwiczenia pierwzego dodaj tablicę z listą dat przeglądów. Dodaj ten nowy atrybut poza 
ciałem obiektu. Dodaj też metodę które dodaje wpis do tej tablicy (uzyj ```this```) i metodę która wyświetla wszystkie przeglądy samochodu (użyj ```this```)

## Ćwiczenie 3

Stwórz obiekt robot. Utwórz dla niego odpowienie atrybuty: name, age, oraz metodę: sayHello, której zadaniem będzie wypisanie
imienia robota. Następnie zmień imię robota np. robot.name = "Sony" i przetestuj jego metodę sayName() jeszcze raz.

## Ćwiczenie 4

Zaprojektuj następujące obiekty:

1. Obiekt student, który powinien mieć nastepujące atrybuty i metody: 
    * imie, 
    * nazwisko, 
    * wiek, 
    * rok studiów, 
    * tablicę z listą przedmiotów, 
    * tablice z listą ocen czyli indeks,  
    * zakuj() - wypisująca w konsoli string "zakuwam", 
    * odpowiedz() - wypisująca w konsoli string "odpowiadam", 

2. Obiekt egzaminator, który będzie miał następujące atrybuty i metody:
    * imie , 
    * nazwisko, 
    * nazwę przedmiotu, z którego egzaminuje,
    * pytaj() - wypisująca w konsoli string "pytam", 
    * wstaw_ocene() - - wypisująca w konsoli losową liczbę od 1-6

3. Obiekt egzamin, który będzie posiadał metodę:
    * start()- odpowiedzialną za przeprowadzenie egzaminu, czyli użycie obiektu student i egzaminator, 
     wywołanie metody pytaj()  z obiektu egzaminator , 
     wywołanie metody odpowiedz() z obiektu student, 
     oraz wywołanie metody wstaw_ocene  i wstawienie jej do indeksu studenta
     Wypisanie w konsoli jaką ocenę dostał student.
