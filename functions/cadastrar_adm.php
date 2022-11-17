<?php 
session_start();

include("dbh.php");

$nome = $_POST['nome'];
$senha = $_POST['senha'];

$sql = "INSERT INTO usuario(nome, senha) VALUES ('$nome', '$senha') ";

$resultado = mysqli_query($con, $sql); 

if ($resultado) {

    header("location: ../login.php");

} else {

    echo "
    
    <script language='javascript' type='text/javascrit'>
    alert('Erro ao inserir registro');window.location.href='../cadastro.php'
     </script>
    ";

}


?>