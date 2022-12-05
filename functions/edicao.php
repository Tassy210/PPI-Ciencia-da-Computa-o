<?php
session_start();

include("dbh.php");


$nome = $_POST['name'];
$endereco = $_POST['endereco'];
$cpf = $_POST['cpf'];



echo $nome;


 

?>
