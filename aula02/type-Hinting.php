<?php

class Impressora{
	public function imptimir($doc){
	$conteudo = $doc->getConteudo();
	echo $conteudo;
	}
}
class DocGenerico{
	protected $conteudo;
	public function getConteudo(){
		return $this->conteudo;
	}
}
class Documento extends DocGenerico{

	public function __construct($conteudo){
		
		return $this->conteudo;
	}
}

class Planilha extends DocGenerico{
	public function __construct(array $linhas){
		$this->conteudo = "";
		foreach($linhas as $linha){
			$this->conteudo .=implode(';',$linha)."<br/>";
		}
	}

}
echo "<p>Planilha:</p>";
$array_planilha = array(array('oi','ola'));
$planilha = new Planilha($array_planilha);
$impressora = new Impressora();
$impressora->imprimir($planilha);

echo "<hr><p>Documanto:</p>";
$doc = new Documento('Ola');
$impressora->imprimir($doc);