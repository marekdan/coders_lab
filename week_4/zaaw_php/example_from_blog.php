<?php

class webcatalog implements Iterator {

    private $data = array(); // tablica do skladowania danych
    private $ipointer = 0; // pomocniczy wskaznik dla metod iteratora

    /* * Funkcja sluzaca do dodawania stron do katalogu */
    public function addPage($url, $title, $mail, $description, $keywords) {
        $this->data[] = array("url"         => $url,
                              "title"       => $title,
                              "mail"        => $mail,
                              "description" => $description,
                              "keywords"    => $keywords,
        );
    }

    /* * Funkcja do usuwania stron na podstawie adresu URL */
    public function delPageByURL($url) {
        foreach ($this->data as $cnt => $item) {
            if ($item["url"] == $url) {
                unset($this->data[$cnt]);

                return true;
            }
        }

        return false;
    }

    /* * Przechodzimy do czesci wlasciwej, czyli implementacji iteratora */
    public function current() {
        return $this->data[$this->ipointer]["title"];
    }

    public function key() {
        return $this->data[$this->ipointer]["url"];
    }

    public function next() {
        $this->ipointer++;
    }

    public function rewind() {
        $this->ipointer = 0;
    }

    public function valid() {
        return ($this->ipointer < sizeof($this->data));
    }
}

//Teraz spójrzmy jak nasza przykładowa klasa działa:
$wc = new webcatalog();

/* * Dodajemy strony do naszego katalogu przy pomocy metody addPage */
$wc->addPage("http://luktom.net/", "luktom online blog",
    "Blog o sieciach komputerowych, routerach Cisco i webmasteringu",
    "sieci komputerowe, cisco, routery, webmastering, php");
$wc->addPage("http://ccie.pl", "Forum CCIE.pl", "Forum CCIE.pl", "cisco, ccna, ccnp, ccie, routery");

/* * Dzieki implementacji interfejsu Iterator, mozemy ladnie wyswietlic * dane, przy uzyciu konstrukcji foreach */
foreach ($wc as $url => $title) {
    print "$title ($url)<br/>";
}