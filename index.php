<?php  

require "Pessoa.php";//trazer a classe php   require_once   também   once(ser usado uma ínica vez)
//pode-se usar o include também


$pessoa = new Pessoa("Afonso");//instância  considerando o construtor

echo $pessoa->getNome();


