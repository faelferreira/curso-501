#Interfaces

-chamar Televisao
-implementar os seguintes metodos
	-aumentaVolume()
	-diminuiVolume()
	-trocaCanal($canal)
	-ligar()
	-desligar()

#class
-implementar interface televisao
-propriedades
	-$volume = 10
	-$canal = 5
	-testado = false //representa ligado ou desligado

#instanciar a class

<?php
echo"<br>";
echo"<br>";
echo"<br>";

interface Televisao{
	public function aumentaVolume();
	public function diminuiVolume();
	public function trocaCanal($novoCanal);                                                                                                   
	public function ligar();
	public function desligar();

}
class TV implements Televisao{
	private $volume = 10;
	private $canal = 5;
	private $testado = "false";

	public function aumentaVolume(){
		++$this->volume;
		echo "Aumentando volume : { $this->volume}<br/>";
	}

	public function diminuiVolume(){
		--$this->volume;
		echo "Diminuindo volume :{$this->volume}<br/>";
	}

	public function trocaCanal($novoCanal){
		$this->canal = $novoCanal;
		echo "Canal: {$this->canal}<br/>";
	}
	public function ligar(){
		$this->testado = true;
		echo "Ligado<br>";
	}
	public function desligar(){
		$this->testado = false;
		echo "Desligado<br>";
	}
}
$tv = new TV();
$tv->ligar();
$tv->aumentaVolume();
$tv->diminuiVolume();
$tv->trocaCanal(10);
$tv->desligar();
