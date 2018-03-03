<?php
class Foo{
	public function __set($name, $value){
	$this->$name = $value;
	echo "$name->$value";
	}
	public function __get($name){
		echo "Retornando ".$name;
		return $this->$name;
	}
}
$a =new Foo();
$a->nomeCompleto = "rafael da Conceicão";
echo $a->nomeCompleto;

class Foi{
ptivate $dados = [];
	
	public function __set($name, $value){
	$this->dados[$name] = $value;
	}
	public function __get($name){
		
		return $this->dados;
	}
	public function getDados(){
		return $this->dados;
	}
}
$a =new Foi();
$a->nomeCompleto = "rafael da Conceicão";
echo $a->nomeCompleto;

