<?php  

require "Pessoa.php";//trazer a classe php   require_once   também   once(ser usado uma ínica vez)
//pode-se usar o include também

$uma_pessoa = new Pessoa;//instância 

$uma_pessoa->setNome("Afonso"); // impressão pela chamada do método
echo $uma_pessoa->getNome();
