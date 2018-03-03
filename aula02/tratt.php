<?php


trat Log{
	public function secreveLog($msg){
		echo "Log da msg";

	}
}                       
class 2{

}
class  y estends x{

	use Log;
	public function save(){
		$this->escreverLog("Trait");
	}
}

$y = new Y();
$y->save();