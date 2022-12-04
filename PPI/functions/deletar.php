<?php

session_start();

include('dbh.php');

$id = filter_input(INPUT_GET, 'id_cliente', FILTER_SANITIZE_NUMBER_INT);

$sql = "DELETE FROM cliente WHERE id_cliente = '$id'";

$resultado = mysqli_query($con,$sql);

header('location: ../clientes.php');

?>