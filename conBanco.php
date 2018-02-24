<?php

/*classe conta

//atributos//
numConta
saldo
titular
////////////
//metodos//
sacar
depositar
versaldo
verTitular
VerNumConta
gerarNumConta
//construtor = nome do titular,
saldo, cas não passe o saldo, saldo = 0,
Gerar numero da conta
/////////////////
//exibir na tela/////
o titular
o numero da conta
o saldo atual
///////////////////


*/
class ContaBanco{
	private $numConta;
	private $saldo;
	private $titular;

public function __construct(string $titular,float $saldo){

	echo $this->titular = $titular;
	echo "<hr>";
	echo $this->numConta = $this->gerarNumConta();
	echo "<hr>";
	echo $this->saldo = $saldo;
}

public function getNumConta(){
	return $this->NumConta;
}
public function setNumConta(int $numero){
	$this->numConta = $numero;
}
public function getSaldo(){
	return $this->saldo;
}
public function setSaldo(float $saldo){
	$this->saldo = $saldo;
}
public function getTitular(){
	return $this->titular;
}
public function setTitular(string $nome){
	$this->titular = $nome;
}

public function sacar(float $saque){
	if($this->getSaldo()== 0){
			echo "conta vazia impossivel sacar";
	}else{
		 $this->setSaldo($this->getSaldo()-$saque);
	}
}
public function depositar(float $deposito){

}
public function verSaldo(){

}
public function verTitular(){

}
public function verNumConta(){

}
public function gerarNumConta(){
return	$this->gerarConta = rand();

}

}

$conta1 = new ContaBanco("rafael",50.00);
//var_dump($conta1);
echo "<hr>";
