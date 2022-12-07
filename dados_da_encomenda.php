<html>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>

<body style="background-color: #000;">

<br><br>

<center>

<div class="container">

<nav class="navbar" style="background-color: #56676b;">
  <div class="container-fluid">
  <h4  style="color: #FFF;">Lista de encomendas</h4>
  <span class="navbar-text">
        <a href='home.php' style="color: #fff;">Voltar</a>
      </span>
  </div>
</nav>

</div>

</center>

<br>

<div class="container">

<?php

session_start();

include("functions/dbh.php");


$resultado = mysqli_query($con, "SELECT * FROM encomenda");

while($row = $resultado->fetch_assoc()){

    $id = $row['id'];
    $nome = $row['nome'];
    $code = $row['codigo'];
    $origem = $row['origem'];
    $cliente = $row['cliente'];
    $endereco = $row['cliente_endereco'];


    echo '
    <ul class="list-group">
    <li class="list-group-item"> 
    <h5>'.$nome.' <a class="btn-sm btn-primary" href="editar_encomenda.php?id='.$id.'"><i class="bi bi-pencil"></i></a> <a class="btn-sm btn-danger" href="functions/deletar_encomenda.php?id='.$id.'"><i class="bi bi-trash"></i></a></h5>
    <br> <b>Códgio da Encomenda: </b>'.$code.'
    <br> <b>Origem: </b>'.$origem.'
    <br> <b>Cliente: </b>'.$cliente.'
    <br> <b>Endereço: </b>'.$endereco.'
    </li> 
    </ul>
    <br>
    '; 

}

?>

</div>

</body>

</html>