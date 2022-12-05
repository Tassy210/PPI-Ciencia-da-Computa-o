<?php 
session_start();

include("dbh.php");


$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];

$sql = "INSERT INTO cliente(nome, cpf, endereco) VALUES ('$nome', '$cpf','$endereco') ";


$resultado = mysqli_query($con, $sql); 

if ($resultado) {

header("location:../home.php");
} else {
echo "
    <script language='javascript' type='text/javascrit'>
    alert('Erro ao inserir registro');window.location.href='../cadastrar_cliente.php'
     </script>

     ";
}

?>