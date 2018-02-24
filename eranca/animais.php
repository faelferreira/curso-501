<?php

class Animais{

	private $generico;
	private $cor;
}
class Cachorro extends Animais{
	public function setCor(string $cor){
	return	$this->setCor($cor);
	}
}
class Gato extends Animais{

}

echo "<pre>";
$dog = new Cachorro();
$cat = new Gato();
$dog-.setCor('azul');
var_dump($dog->generico);
var_dump($cat-> generico);
