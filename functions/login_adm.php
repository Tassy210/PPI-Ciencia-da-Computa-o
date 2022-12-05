<?php

session_start();

include("dbh.php");

$nome = $_POST['nome'];
$senha = $_POST['senha'];

if(empty($nome) or empty($senha)){

    $_SESSION['ERROS'] = "Campos não podem se nulos";
    header("location:login.php");
    exit();

} else {

    $nome = mysqli_escape_string($con, $nome); 
    $senha = mysqli_escape_string($con, $senha); 

    $query = "SELECT * FROM usuario WHERE nome = '{$nome}' AND senha = '{$senha}' ";

    $resultado = mysqli_query($con, $query);

    $row = mysqli_num_rows($resultado);

    $user = mysqli_fetch_array($resultado);

    if ($row == 1){
        $_SESSION['email'] = $nome;
          $_SESSION['usuario'] = $user['id'];
        
           header('location:../home.php'); 
       

} else{
   
    $_SESSION['ERROS'] = "Email ou Senha incorretos";
    header('../location:login_adm.php');
    
    }
}


?>s