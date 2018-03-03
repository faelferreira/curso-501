<?php
class ValorNaoPodeSerNegativoException extends Exception{

} 
class ResultadoNaoPodeSerMaiorQue50Exception extends Exception{
	
}
class Calc{
	//nao permitir resultado maior que 50
	// nao permitir numero negativo

	public static function soma($a,$b){
		$resultado = $a + $b;
		if(($a < 0 ||$b < 0)||($resultado > 50)){
		throw new ValorNaoPodeSerNegativoException();	
		
			throw new ResultadoNaoPodeSerMaiorQue50Exception();
		}
			return $resultado;

	}
	//nao permitir resultado menor que zero
	public static function subt($a,$b){
		$resultado = $a - $b;
		if($resultado < 0){
			throw new ResultadoNaoPodeSerMenorQue0Exception();
		}
		return $resultado;
	}
	//nao permitir divisao por zero
	//nao permitir valor Indefinito $a == 0
	public static function divi($a,$b){
		$resultado =  $a / $b;
		if($b == 0){
			throw new NaoPodeDiviSaoPorZeroException();
		
			throw new NaoPodeValorInfinitivoException();
		}
		return $resultado;
	}
	//nao permitir multiplicacao por zero
	//nao permitir resultado maior que 50
	public static function mult($a,$b){
		$resultado = $a * $b;
		if($a ==0 || $b ==0){
			throw new NaoPermitidoMultiplicacaoPorZeroException();
		}
		if($resultado > 50){
			throw new NaoPermitirResultadoMaiorQue50Exception();
		}

		return $resultado;
	}

}
try{
	echo Calc::soma(55,4);
	echo "<br>";
	echo Calc::subt(0,-1);
	echo "<br>";
	echo Calc::divi(0,1);
	echo "<br>";
	echo Calc::mult(2,30);
}catch(ValorNaoPodeSerNegativoException $e){
echo "Erro soma";
}catch(ResultadoNaoPodeSerMaiorQue50Exception $e){
	echo "Erro Soma";
}catch(ResultadoNaoPodeSerMenorQue0Exception $e){
	echo "erro sub";
}catch(NaoPodeDiviSaoPorZeroException $e){
	echo "erro ";
}catch(NaoPodeValorInfinitivoException $e){
	echo "erro";
}