<?php
/*
	Classe Conta
Atributos

    numConta - Número da Conta
    saldo - Saldo da Conta
    titular - Títular da Conta
    tipo - Tipo da conta, CC ou CP
    status - Status, aberto(true) ou fechado (false)

Métodos

    gets e sets. Status, Titular

    abrirConta(Tipo, Titular)

    Se CC = Saldo 100; Se CP = Saldo 150; Status = true;

    fecharConta

    Não pode ter dinheiro na Conta Não pode estar devendo o banco. Status = false;

    sacar

    Verifica se Conta está aberta. Verificar a quantidade do saldo.

    depositar

    Verifica se Conta está aberta.

    verSaldo

    Verifica se Conta está aberta.

    verTitular
    verNumConta
    gerarNumConta - usar rand()

Contrutor

    Nome do Titular, Tipo da Conta
    Executar a funcao abrirConta();

Exibir na tela;

    o Titular
    o Número da Conta
    o Saldo atual*/

    class conta{
        private $numConta;
        private $saldo;
        private $titular;
        private $tipo;
        private $status; 

        public function __construction(){
            return this->saldo;
        }


        public function setStatus(int $status){
            $this->Status = $status;
        }
        public function getStatus(){
            return $this->getStatus;
        }

        public function getTitular()){
            return $this->getTitular;
        }
        public function setTitular(float $saldo){
            $this->titular = $titular;
        }
    
        public function abrirConta($tipo,$titular){
            if($this->getTipo == cc){
                $this->setSaldo = 100.00;
                  $this->status = true;
            }if($this->getTipo == cp ){
                $this->setSaldo  =150.00
                $this->status = true;
            }
        }
        public function sacar(int $valor){
            if($this->getTipo()){
                if($this->verSaldo() = $valor){
                    $this->valor = $valor;
                }else{
                    echo "saldo insuficiente";
                }
            }else{
                echo "a conta esta fechada";
            }
        }
        public function depositar(float $depositar){
            if($this->getStatus()){
                $this->setSaldo = $depositar;
            }
        }
        public function verSaldo(float $saldo){
            if($this->getStatus()){
                $saldo = $this->getSaldo();
                return $saldo;
            }else{
                echo "conta fechada";
            }

        }
        public function verTitular(string $titular){
            
        }
        

    }