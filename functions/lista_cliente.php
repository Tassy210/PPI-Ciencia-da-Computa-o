<?php

session_start();

include("dbh.php");


$resultado = mysqli_query($con, "SELECT * FROM cliente"); 

while($row = $resultado->fetch_assoc()){

    $id = $row['id_cliente'];
    $nome = $row['nome'];
    $cpf = $row['cpf'];
    $endereco = $row['endereco'];

    echo '
    <tr>
    <td>'. $nome . '<br>'.$cpf. '<br>'.$endereco. "</td> 
    <br>
    <a href='editar_cliente.php?id_cliente=$id'>Editar</a> <a href='functions/deletar.php?id_cliente=$id'>Excluir</a><br><br>"; 

}



?>

<html>



</html>