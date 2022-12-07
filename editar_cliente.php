<html>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>

<body style="background-color: #000;">

<br>

<center>

<div class="container">

<nav class="navbar" style="background-color: #56676b;">
  <div class="container-fluid">
  <h4  style="color: #FFF;">Editar dados do Cliente</h4>
  <span class="navbar-text">
        <a href='home.php' style="color: #fff;">Voltar</a>
      </span>
  </div>
</nav>


<br><br>

<div class="card" style="background-color: #068a29;">

<?php

session_start();

include('functions/dbh.php');

$id = filter_input(INPUT_GET, 'id_cliente', FILTER_SANITIZE_NUMBER_INT);

$sql = mysqli_query($con, "SELECT * FROM cliente WHERE id_cliente = '$id'");

while($row = $sql->fetch_assoc()){

    $id = $row['id_cliente'];
    $nome = $row['nome'];
    $cpf  = $row['cpf'];
    $endereco = $row['endereco'];



?>

<form method="POST" action="functions/editar_action.php">

<input type="hidden" class="form-control" id = "id" name = "id" value = "<?= $row['id_cliente']; ?>"/>

<h6>Nome do cliente: </h6>
<div class="col-sm-3">
<input type="text" class="form-control" id = "teste" name = "teste" value = "<?= $row['nome']; ?>"/>
</div>

<br><br>

<h6>CPF do cliente: </h6>
<div class="col-sm-3">
<input type="text" class="form-control" id = "cpf" name = "cpf" value = "<?= $row['cpf']; ?>"/>
</div>

<br><br>

<h6>Endereço do cliente: </h6>
<div class="col-sm-3">
<input type="text" class="form-control" id = "endereco" name = "endereco" value = "<?= $row['endereco']; ?>"/>
</div>

<br><br>

<input class="btn btn-dark"  type="submit" value="Alterar"/>

</form>

</div>

</div>
</center>

<?php

}

?>

</body>

</html>
