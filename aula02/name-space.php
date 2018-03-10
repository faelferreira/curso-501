<?php
namespace Model;

class liente{
	private $nome;
	public function __construct($nome){
		$this->nome=$nome;
	}
	public function mostraName(){
		echo 'bem vindo, ',$this->nome;
	}
}