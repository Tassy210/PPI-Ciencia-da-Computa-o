<?php

session_start();

include('dbh.php');

$identificador = $_POST['id'];
$teste = $_POST['teste'];
$code = $_POST['codigo'];
$origem = $_POST['origem'];
$tamanho = $_POST['tamanho'];
$peso = $_POST['peso'];
$cliente = $_POST['cliente'];
$endereco = $_POST['endereco'];

$sql = mysqli_query($con, "UPDATE encomenda SET nome='$teste', codigo='$code', origem='$origem', tamanho = '$tamanho', peso = '$peso', cliente = '$cliente', cliente_endereco = '$endereco' WHERE id = '$identificador'");

if ($sql) {
    header("location:../dados_da_encomenda.php");
    } else {
        echo "
            <script language='javascript' type='text/javascrit'>
            alert('Erro ao inserir registro');window.location.href='../editar_cliente.php'
             </script>
        
             ";
        }
        
?>