<?php 
session_start();

include("dbh.php");


$nome = $_POST['nome'];
$codigo = $_POST['code'];
$origem = $_POST['origem'];
$tamanho = $_POST['tamanho'];
$peso = $_POST['peso'];
$cliente = $_POST['cliente'];
$endereco = $_POST['endereco'];

$sql = "INSERT INTO encomenda(nome, codigo, origem, tamanho, peso, id_cliente, cliente_endereco) VALUES('$nome', '$codigo','$origem','$tamanho','$peso','$cliente','$endereco')";


$resultado = mysqli_query($con, $sql); 

if ($resultado) {

header("location:../home.php");
} else {
echo "Deu merda

     ";
}

?>