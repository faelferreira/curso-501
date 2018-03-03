<?php
class Aluno{
	public $nome;
}
$rafael = new Aluno();
$rafael->nome ="Rafael";
echo $rafael->nome;

$joao = $rafael;
echo $joao->nome;

$joao->nome = "joao";

echo $joao->nome;
echo $rafael->nome;
