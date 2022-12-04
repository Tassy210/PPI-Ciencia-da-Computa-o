<?php

$servidor = "localhost"; 
$user = "root"; 
$senha = ""; 
$banco = "ppi"; 

$con = mysqli_connect($servidor, $user, $senha, $banco);

if(!$con){

    echo "não foi possivel conectar ao MySQL" . PHP_EOL;
	echo "Debugging erro:". mysqli_connect_error() . PHP_EOL;

}

?>