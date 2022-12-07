<?php

session_start();

include('dbh.php');

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$sql = "DELETE FROM encomenda WHERE id = '$id'";

$resultado = mysqli_query($con,$sql);

header('location: ../dados_da_encomenda.php');

?>