<?php
	class Caneta{

		public $cor;
		public $marca;
		public $tampada;
		
	public function_construct(){
	echo ""
	}

	public function escrever(string $texto){
		echo "ecrevendo";
		echo $texto;
		}

	public function tampar(){
		$this->tampada = true;
	}
	public function destampar(){
		$this->tampada = false;
	}
	public function setCor($cor){
		$this->cor = "cor";
	} 
	public function getCor(){
		return $this->cor;
		
	}

	public function setMarca($marca){
		$this->marca="bic";
	}
	public function getMarca(){
		return $this->marca;
	} 

	} 

	$azul = new Caneta();
	$vermelha = new Caneta();

	$azul->setCor= ("azul");
	$azul->setMarca = ("bic");

	$vermelha->cor = "vermelha";
	$vermelha->marca = "Faber Castel";

	echo "<pre>";
	var_dump($azul);
	var_dump($vermelha);
	echo "<hr>";
	$azul->escrever("ola mundo");
	echo"<hr>";
	$vermelha->escrever("hello world");
	echo"<hr>";
	echo $azul->destampar();

	echo"<hr>";
	echo $azul->tampar();

	
