
<?php
class Pedido{
	public function __construct($tipoFrete){
		if($tipoFrete == "normal"){
			echo "ferete normal";
		}else if($tipoFrete == "expresso"){
			echo "frete expresso";
		}else if($tipoFrete == "turbo")}
		echo "frete turbo";
	}else{ echo "frete invalido";
	}
	}
}
$pedido = new Pedido("Frete_epresso");