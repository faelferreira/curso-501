<?php
class Foo{
	public function __construction(){
	echo "construido";
	}
	public function __destruir(){
	echo "destruido";
	}
}

$a = new Foo();
unset($a);
