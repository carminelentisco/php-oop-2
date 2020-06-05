<?php

include_once __DIR__ . '/Prodotto.php';

class Igene extends Product {
    private $tipologia;
    private $posizione;

    public function __construct($_nome_prodotto, $_codice_prodotto, $_prezzo, $_tipologia, $_posizione) {
        
        parent::__construct($_nome_prodotto, $_codice_prodotto, $_prezzo);
        $this->tipologia = $_tipologia;
        $this->posizione = $_posizione;
    }

    public function print($element) {
        
        echo $this->$element;
    }
}