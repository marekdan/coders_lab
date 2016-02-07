# JavaScript - Ćwiczenia - Funkcje

Zadania wprowadzające do tworzenia funkcji. 
Ćwiczenia powinny być rozwiązane w pliku app.js. 
Pamiętaj, żeby oddzielać ćwiczenia komentarzami i pisać czytelny i dobrze sformatowany kod. 


## Ćwiczenie 1
Napisz funkcję miksującą warzywa np. o nazwie miksowanie, która jako argument będzie przyjmowała warzywo.
Zadaniem funkcji jest zmiksowanie warzywa i zwrócenie zmiksowanej papki. Wypisz w konsoli (nie w funkcji, funkcja tylko zwraca)
tekst zwrócony przez funkcję.
Pamiętaj o stworzeniu odpowiedniego komentarza.

Przykład:
```
input -> "marchewka"
output -> "zmiksowana marchewka"
```

## Ćwiczenie 2
Napisz funkcję, która przyjmuje jako parametry dwie liczby i wyświetla większą z nich.

Przykład:
```
input -> 5, 29
output -> 29
```
## Ćwiczenie 3
Napisz funkcję, która przyjmuje jako parametry dowolną ilość liczb i wyświetla większą z nich. Skożystaj z zmiennej ```arguments```.

Przykład:
```
input -> 5, 29, 6, 4, 34, 56, 2, 3
output -> 56
```
## Ćwiczenie 3
Stwórz funkcję która będzie zwracała sumę 3 liczb przekazaną jako argumenty.

Przykład:
```
input -> 1,2,3
output -> 6
```
## Ćwiczenie 4
Stwórz funkcję anonimową i przypisz ją do zmiennej. Zadaniem funkcji jest wypisanie 10 razy 
"Wszędzie i zawsze pisząc kod używam funkcji oraz pilnuję, żeby nie tworzyć zmiennych globalnych".

## Ćwiczenie 5
Napisz funkcję ```rentCost(days)``` która będzie pobierać liczbę dni jako argument a następnie pnie wyliczać koszt wynajmu pokoju według podanego wzoru:
Wynajem trwa 1 dzień - koszt pokoju 200zł/dzień
Wynajem trwa 2-3 dni - koszt pokoju 180zł/dzień
Wynajem trwa 4-7 dni - koszt pokoju 160zł/dzień
Wynajem trwa 8+ dni - koszt pokoju 150zł/dzień.
 
Dodatkowo za każdy pełny tydzień przysługuje 50zł zniżki. 
Przykład:
```
input -> 8
output -> 1150
```

## Ćwiczenie 6
Napisz funkcję ```rockPaperScissors(player1, player2)``` która będzie pobierać dwa napisy i zwracać infromacje kto wygrał. Poprawne napisy przyjmowane przez funkcjię to: papier, nożyce, kamień.

Funkcja ma zwracać jeden z 4 napisów:
"Gracz 1 wygrał",
"Gracz 2 wygrał"
"Remis",
"Błędne informacje"

Przykład:
```
input -> 8
output -> 1150
```

## Ćwiczenie 7
Napisz funkcję ```calculateTip(amount, raiting)``` która będzie pobierać dwa kwotę i opis słowny obsługi. Funkcja ma zwracać albo kwotę napiwku, albo napis "Opis nieczytelny". opis może przyjmować następujące wartości:
"Bardzo dobra obsługa" => 25% napiwku,
"Dobra obsługa" => 20% napiwku,
"Średnia obsługa" =>15% napiwku,
"Zła obsługa" => 0% napiwku.

Przykład:
```
input -> 100, "Bardzo dobra obsługa"
output -> 25
```


