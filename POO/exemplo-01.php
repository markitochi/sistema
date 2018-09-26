<?php

class Pessoa {

    public $nome; //Atributo
    
    public function falar(){ //Metodo

	return "O meu nome e ".$this->nome;
}


}

$glaucio = new Pessoa();
$glaucio->nome = "Glaucio Daniel";
echo $glaucio->falar();
