<?php

class Curso{
	private $nome;
	private $cargaHoraria;
	public function __construction(string $nome, int $horas){
		$this->nome = $nome;
		$this->cargaHoraria = $horas;
	}

	
}