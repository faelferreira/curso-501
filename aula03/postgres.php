<?php
	require "conexao.php";

	try{
		$dbPostgres->beginTransaction();
	//$sql = "insert into usuarios(usuario,senha) values('rafael','123')";
	$sql = "update usuarios set usuario = 'fael ',senha= '456' where usuario= 'fael ferreira' ";

	//$dbPostgres->exec($sql);
	//$sql = "insert into usuarios(usuario,senha) values('rafael','123')";
	$sql = "select * from usuarios";
	//$sql = "delete from usuarios where id = 2";
	$dbPostgres->exec($sql);

$dbPostgres->commit();

//$result = $dbPostgres->query($sql);

//$usuarios = $result->fetchAll(PDO::FETCH_ASSOC);
}catch(PDOException $e){
	$dbPostgres->rollback();
	echo "erro!!";
}
//echo "<pre>";
//print_r($usuarios);
