<?php

session_start();

include('dbh.php');

$id = $_GET['id_cliente'];

$Cliente = mysqli_query($con, "DELETE FROM cliente WHERE `cliente`.`id_cliente` = $id");


?>