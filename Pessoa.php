<?php  

class Pessoa{ //criando classe

	//public: acessado por qualquer um
	//private: acessado apenas dentro da classe 
	//protected: acessado pela classe e classes que herdam
	protected $nome;//atributos


	public function __construct($tmpNome)
	{
		$this->nome = $tmpNome;
	}
	
	public function setNome($novoNome){ //set alteração
		$this->nome = $novoNome;
	}

	public function getNome(){// get acessando o nome
		return $this->nome;
	}
	

}
