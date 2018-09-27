<?php

class Pessoa {

	public $nome = "Rasmus Lerdorf"; //todos podem visualizar
	protected $idade = 48; // as classes extendidas podem ver este atributo
	private $senha = "123456"; // somente a classe pai pode visualizar

public function verDados (){
	echo $this->nome . "<br>";
	echo $this->idade . "<br>";
	echo $this->senha . "<br>";
}

}

class Programador extends Pessoa {
	
public function verDados (){
	echo get_class($this) . "<br>";
	echo $this->nome . "<br>";
	echo $this->idade . "<br>";
	echo $this->senha . "<br>";
}

}
$objeto = new Programador();
//echo $objeto->nome;
$objeto->verDados();

