<?php

class Exec{
	public function execute($fn,array $args){
		call_user_func_array($sfn,$array);
	}
}

$exec = new Exec();
$exec->execute(function($valor.$valor2)){
	var_dump($valor);
	var_dump($valor2);

},array("oi","ola"));

echo "<hr>";
class Myclass{

	public function __invoke(){
		foreach (func_get_args() as $args){
			echo $arg;
		}
	}
}
Myclass(),["oi"]