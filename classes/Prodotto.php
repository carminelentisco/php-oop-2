<?php 

class Product {
    
    protected $nome_prodotto;
    protected $codice_prodotto;
    protected $prezzo;

    public function __construct($_nome_prodotto, $_codice_prodotto, $_prezzo) {
        
        $this->nome_prodotto = $_nome_prodotto;
        $this->codice_prodotto = $_codice_prodotto;
        $this->prezzo = $_prezzo;
    }
}


