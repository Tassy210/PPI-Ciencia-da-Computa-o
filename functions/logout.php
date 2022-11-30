<?php 
session_start();
session_destroy();
$_SESSION['r']='n';
echo"<script language='javascript' type='text/javascript'>
alert('Voce foi deslogado!');window.location.
href='../login.php'</script>";
?>