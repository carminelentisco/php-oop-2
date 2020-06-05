<?php

include_once __DIR__ . '/Prodotto.php';

class Giochi extends Product {
    private $tipologia;
    private $età;
    private $numero_giocatori;

    public function __construct($_nome_prodotto, $_codice_prodotto, $_prezzo, $_tipologia, $_età, $_numero_giocatori) {
        
        parent::__construct($_nome_prodotto, $_codice_prodotto, $_prezzo);
        $this->tipologia = $_tipologia;
        $this->età = $_età;
        $this->numero_giocatori = $_numero_giocatori;
    }

    public function print($element) {
        
        echo $this->$element;
    }
}