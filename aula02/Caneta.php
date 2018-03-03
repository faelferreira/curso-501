<?php
class Caneta{
	private Static $tamanho = 10;
	private $cor;

	public function __construction($cor){
		$this->$cor = $cor;
	}
	public function getCor(){
		return $this->$cor;
	}
	public function getTamanho(){
		return self ::$tamanho;
	}
}
//echo Caneta::$tamanho;
$azul = new Caneta('azul');
$preta = new Caneta('preta');
$vermelha = new Caneta('vermelha');

echo $azul->getTamanho();
echo "<br>";
Caneta::$tamanho = 50;
echo $preta0>getTamanho();
echo '<br>';
