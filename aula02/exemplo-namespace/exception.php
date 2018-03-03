<?php


function divisao($a,$b){
	if($b == 0){
		throw new Exception("Nao permitido divisao por zero");
		
	}
	return $a/$b;
try{
	divisao(0,1);
}catch(Exception $e){
	echo "erro";

	echo $e->getMessage();
}
}