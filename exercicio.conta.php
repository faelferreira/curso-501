<?php
//conta
//titular
//saldo
//numConta
//com os atributos genericos
//contaCorrente herdar de conta
//metodos e atributos de cc
//chequeEspecial = boolean
//sacar - cobrar juros
//depositar - cobrar juros
//ContaPoupanca herdar de conta
//metodos e atributos de cp
//sacar - sem juros
//depositar - sem juros


class Conta3{
	
	private $titular;
	private $saldo;
	private $numConta;
	
	public function __construct(string $titular,float $saldo,int $numConta){
			$this->SetTitular($titular);
			$this->SetSaldo($saldo);
			$this->SetNumConta($numConta);
	}

	public function getSaldo(){
		return $this->saldo;
	}
	public function setSaldo(int $saldo){
		$this->saldo = $saldo;
	}
	public function getNumConta(){
		return $this->numConta;
	}
	public function setNumComta(){
		$this->Conta = $numConta;
	}

	public function setTitular(string $titular){
		$this->titular = $titular;
	}
	public function getTitular(){
		return $this->titular;

	}

	$cliente3 = new Conta3("rafael",100.00,456123);
}	


class ContaCorrente extends Conta3{


	public function sacar($valor){
		if($this->getSaldo() + 0.12 > $valor ){
			$juros = $saque * 0.12;
			$valor =(this->getSaldo()-$valor) -$juros;
			$this->setSaldo($valor);
			return $saque;
		}else{
			echo "saldo insuficiente";  
		}
		
	}
}
	public function depositar($valor){
		$saldo = $this->getSaldo() * 0.12;
		$this->setSaldo($this->getSaldo()+($valor - $saldo));
		
	}
	}

}
class ContaPoupanca extends Conta3{
	public function sacar($valor){
		$this->setSaldo($this->getSaldo()-$valor);
	}
	public function depositar($valor){
		$this->setSaldo($this->getSaldo()+$valor);
	}
}