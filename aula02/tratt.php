<?php


trat Log{
	public function secreveLog($msg){
		echo "Log da msg";

	}
}                       
class X{

}
class  y estends X{

	use Log;
	public function save(){
		$this->escreverLog("Trait");
	}
}

$y = new Y();
$y->save();