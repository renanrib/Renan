<?php

$nome = "Hcode";
$site = "www.hconte.com.br";

$ano = 1990; //se por "" vira texto
$salario = 5000.99;
$bloqueado = false;
//////////////////////////////////////////////////////
$frutas = array("abacaxi", "laranja", "manga");

echo $frutas[2]; 

echo "<br/>";


$nascimento = new DateTime();

//var_dump($nascimento);

//////////////////////////////////////////////////////
$arquivo = fopen("Exemplo3.php", "r");

echo "<br/>";

var_dump($arquivo);

echo "<br/>";

$nulo = null;
$vazio = "";


?>