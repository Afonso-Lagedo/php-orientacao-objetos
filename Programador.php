<?php 

class Programador extends Pessoa{//herdando da classe Pessoa

	public $linguagem;

	public function __construct($tmpNome, $tmpLinguagem)
	{
		$this->nome = $tmpNome;
		$this->linguagem = $tmpLinguagem;

		echo"<br>Objeto".__CLASS__."foi instanciado.<br>";
	}	

}
