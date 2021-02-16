<?php  

require "Pessoa.php";//trazer a classe php   require_once   também   once(ser usado uma ínica vez)
//pode-se usar o include também
require "Programador.php";


$programador = new Programador("Afonso", "PHP");//instância  considerando o construtor

echo $programador->getNome();

echo $programador::ESPECIE;
