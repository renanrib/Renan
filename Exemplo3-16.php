<?php

$nome = "Glaucio";

function teste() {

	global $nome; //tornar a variavel visivel a todos
	echo $nome;
}

function teste2(){

	$nome = "João";
	echo $nome." agora no teste 2";
}

teste();

echo "<br/>";

teste2();

?>