<?php

class Conta{
public $numConta;
private $saldo;
 


public function sacar(float $saque){
	echo "estou sacando". $saque."<br>";


}
public function depositar(float $deposito){
	echo "estou depositando $deposito<br>";

}
public function verSaldo(){
	return $this->saldo;
}

}

$conta = new Conta();


$conta->numConta = "123456";
$conta->saldo = 100;

echo "<hr><br>";
echo "o numero da conta e ".$conta->numConta." e o saldo e ". $conta->saldo;
echo"<hr>";

echo $conta->sacar($conta->saldo);

echo $conta->depositar($conta->saldo);