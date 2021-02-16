<?php  

require "Pessoa.php";//trazer a classe php   require_once   também   once(ser usado uma ínica vez)
//pode-se usar o include também

$uma_pessoa = new Pessoa;//instância 
$uma_pessoa->nome = "Afonso";
$uma_pessoa->idade  = "27";


$uma_pessoa->falarNome(); // impressão pela chamada do método
$uma_pessoa->falarIdade();