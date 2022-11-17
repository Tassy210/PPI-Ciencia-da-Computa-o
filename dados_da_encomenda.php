<?php

session_start();

include("functions/dbh.php");


$resultado = mysqli_query($con, "SELECT * FROM encomenda");

while($row = $resultado->fetch_assoc()){

    $nome = $row['nome'];
    $code = $row['codigo'];
    $origem = $row['origem'];
    $cliente = $row['id_cliente'];
    $endereco = $row['endereco'];

    echo 
    "
    <br>
    $nome <br> 
    $code <br>
    $origem <br>
    $cliente <br>
    $endereco <br>
    
    
    ";

}




?>