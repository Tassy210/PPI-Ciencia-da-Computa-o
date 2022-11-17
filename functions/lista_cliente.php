<?php

session_start();

include("dbh.php");


$resultado = mysqli_query($con, "SELECT id_cliente, nome, cpf FROM cliente"); 

while($row = $resultado->fetch_assoc()){

    $id = $row['id_cliente'];
    $nome = $row['nome'];
    $cpf = $row['cpf'];

    echo $nome . " <a href='editar_cliente.php'>Editar</a> <a href='functions/deletar.php'>Excluir</a><br><br>"; 

}



?>

<html>



</html>