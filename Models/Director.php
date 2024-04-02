<?php 

class Director { 
    public $nome;
    public $cognome;
    public $nazionalita;

    function __construct($nome, $cognome, $nazionalita) {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->nazionalita = $nazionalita;
    }

    public function getDirector() {
        return $this->nome . " " . $this->cognome . "<br>" . $this->nazionalita ;
    }
}


?>