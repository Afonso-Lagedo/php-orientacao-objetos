<?php  

class Pessoa{ //criando classe
	public $nome;//atributos
	public $idade;


	public function falarNome(){//métodos
		echo $this->nome;
	}

		public function falarIdade(){//métodos
		echo $this->idade;
	}

}

$uma_pessoa = new Pessoa;//instância 
$uma_pessoa->nome = "Afonso";
$uma_pessoa->idade  = "27";

var_dump($uma_pessoa);// impressão da classe 

$uma_pessoa->falarNome(); // impressão pela chamada do método
