<?php

session_start();

include("dbh.php");

$codigo = $_POST['code'];
$origem = $_POST['origem'];
$cliente = $_POST['cliente'];
$endereco = $_POST['endereco'];

$sql = mysqli_query($con, "INSERT INTO encomenda(codigo, origem, id_cliente, endereco) VALUES ('$codigo','$origem','$cliente','$endreco')");

if($sql){

    echo " <script language='javascript' type='text/javascrit'>
    alert('Cadastro efetuado com sucesso!');window.location.href='../home.php'
    </script>
    ";
    
    } else {
    echo "
        <script language='javascript' type='text/javascrit'>
        alert('Erro ao inserir registro');window.location.href='../cadastrar_cliente.php'
         </script>
    
         ";
    
}

?>