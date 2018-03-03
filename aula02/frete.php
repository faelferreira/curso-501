<?php
interface FreteStrategy{
	public function calcular();
}
class FreteNormal implements FreteStrategy{
	public function calcular(){

		echo "<p>Frete normal</p>";
		return 2;
	}
}

class FreteExpresso implements FreteStrategy{
	public function calcular()
	{
		echo "<p>Frete expresso</p>";
		return 5;
	}
}
class FreteTurbo implements FreteStrategy{
	public function calcular(){
		echo "<p>Frete turbo</p>";
		return 10;
	}
}
class Pedido{
	private $freteStrategy;
	public  function __construct(FreteStrategy $freteStrategy){
		$this->freteStrategy;
	}
	public function calcularTotalPedido();
	$calcularTotalPedido = 0;
	return $totalPedido += $this-.freteTrategy->calcular();
}




pg.98