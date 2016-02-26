<?php

/*
ZADANIE 1
Klasy abstrakcyjne są to klasy z których nie można utworzyć obiektu i można w nich
definiować metody, używamy tych klas w silnie ze sobą powiązanych klasach,
klasy abstrakcyjne służą  do definiowania metod abstrakcyjnych, obiekty klas abstrakcyjnych tworzymy przez
utworzenie obiektu klas które ją dziedziczą

ZADANIE 2
Interfejsy są to takie schematy w których zamieszczamy metody aby było nam je łatwiej implementować do klas,
w których możemy wykorzystać mało powiązane ze sobą klasy, interfejsy służą do definiowania pustych metod które potem możemy wykorzystać w klasach dziedziczących,
dziedziczenie po interfejsie zmusza nas do dodania wszystkich metod które on zawiera.

ZADANIE 3
*/
?>

    <html>
    <head>
    </head>
    <body>
    <form method="POST">
        <label>
            <input type="text" name="name">
            <input type="text" name="surname">
            <input type="file" name="myFile">
        </label>
    </form>
    </body>
    </html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $filename = $_FILES['myFile']['name'];
    $addName = $filename . $_POST['name'] . $_POST['surname'];
    $uploadTo = './files' . $addName;

    if (move_uploaded_file($_FILES['myFile']['tmp_name'], $uploadTo)) {
        echo 'sukces';
    }
    else {
        echo 'porażka';
    }

}

/*
ZADANIE 4
Wyjątki są to błędy które wychwytujemy gdy zachodzi on w momencie
gdy zostały spełnione jakieś warunki


*/

function myFun($number) {
    if ($number == 1) {
        return $number;
    }
    else {
        throw new Exception;
    }
}

try {
    myFun($number);
} catch (Exception $e) {
    echo 'Złapano';
}

/*
ZADANIE 5
Programowanie w TDD polega na pisaniu testów pod program ktry chcemy utworzyć,
testowaniu zapytań, a następnie tworzeniu pogramau do momentu w którym zaczyna on działać,

- Poprawiaj gdy czerwone
- usuwaj gdy zielone

3 KROKI TO RED->GREEN->REFACTOR->RED... itd.


ZADANIE 6
*/

require_once('Product.php');

class ProductTest extends PHPUnit_Framework_TestCase {

    public function testProduct() {

        //nazwa $stockQty jest zdefiniowana w klasie a w funkcji getStockQty jest zapisana jako stockqty
        //co uniemożliwiało pobranie wartości
        $prod = new Product;

        $this->assertFalse(false, $prod->hasStock());
        $this->assertTrue(true, $prod->hasStock());

        /*
        Jako, że funckaj sell nie zwraca wartości nie mogę użyć czegoś takiego
        chyba, że dopiszę return do tej funkcji
        $quantity = 2;
        $this->assertEquals($prod->getStockQty()-2, $prod->sell($quantity));
        */
        $quantity = 2;
        $quantityBefore = $prod->getStockQty();
        $prod->sell($quantity);
        $this->assertEquals($quantityBefore, $prod->getStockQty() - $quantity);

        /*
        Jako, że funkcja buy nie zwraca wartości nie mogę użyć czegoś takiego
        chyba, że dopiszę return do tej funkcji
        $quantity = 3;
        $this->assertEquals($prod->getStockQty()+3, $prod->buy($quantity));
        */
        $quantity = 3;
        $quantityBefore = $prod->getStockQty();
        $prod->buy($quantity);
        $this->assertEquals($quantityBefore, $prod->getStockQty() + $quantity);

        /*
        funkcja nie zwróci wartości z użytą zmienną bo nie używa zmiennej $quantity w swoim ciele
        domyślnie będzie zawsze 0
        */
        $quantity = 5;
        $this->assertEquals(0, $prod->getPriceForQuantity($quantity));

        //skoro nastawiamy $product_code na 10 powinien zwrócic 10
        $product_code = 10;
        $prod->setProductCode($product_code);
        $this->assertEquals(10, $prod->getProductCode());

        /*
        Skoro ustawiam $unitPrice na 15 powinno zwrócic 15 jako tą sama wartość
        */
        $unitPrice = 15;
        $prod->setUnitPrice($unitPrice);
        $this->assertEquals($prod->getUnitPrice(), $unitPrice);

    }

}
