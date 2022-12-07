<?php

session_start(); 

include("dbh.php"); 


$id = $_POST['id'];
$teste = $_POST['teste'];
$teste2 = $_POST['cpf'];
$teste3 = $_POST['endereco'];


$query = mysqli_query($con, "UPDATE cliente SET nome='$teste', cpf='$teste2', endereco='$teste3' WHERE id_cliente='$id'");

if ($query) {
    header("location:lista_cliente.php");
    } else {
        echo "
            <script language='javascript' type='text/javascrit'>
            alert('Erro ao inserir registro');window.location.href='../editar_cliente.php'
             </script>
        
             ";
        }
        


?>