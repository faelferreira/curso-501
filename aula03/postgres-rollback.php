<?php
require 'conexao.php';
try{
		$dbPostgres->beginTransaction();
		

		$dados = ['usuario'=>'rafaFERREIRA',
		'senha'=>'123'];

		$sql = "insert into usuarios(usuario,senha) values (':user', ':pass')";
		$stmt = $dbPostgres->prepare($sql);
		
		$params = [
			':user' => $dados['usuario'],
			':pass' => $dados['senha']];
		$stmt->execute($params);
		$dbPostgres->commit();

		}catch(PDOException $e){
	$dbPostgres->rollback();
	echo "erro!!";
}