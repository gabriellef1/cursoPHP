<?php

class Pessoa{
    public $nome;
     //Atributo
    public function falar(){ //Método
        return "O meu nome é ".$this->nome;
    }
}

$meunome = new Pessoa();
$meunome->nome = "Gabrielle Fernandes";
echo $meunome->falar();

?>