<?php

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