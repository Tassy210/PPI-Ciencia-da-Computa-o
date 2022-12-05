<?php

session_start();

?>

<html>

<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

</head>

<body style="background-color: #000;">
    
<center>

<div class="container">

<br>

<nav class="navbar" style="background-color: #56676b;">
  <div class="container-fluid">
  <h4  style="color: #FFF;">Painel do administrador!</h4>
  <span class="navbar-text">
    <a href="functions/logout.php" style="color: #FFF;">Logout</a>
      </span>
  </div>
</nav>


<br><br>

<div class="row">


<div class="col-sm-2">
<div class="card" style="background-color: #068a29;">
<div class="card-body">
<a href="cadastrar_cliente.php" class="btn btn-outline-dark">Cadastrar Cliente</a>
</div>
</div>
</div>


<div class="col-sm-2">
<div class="card" style="background-color: #068a29;">
<div class="card-body">
<a href="cadastrar_coisa.php" class="btn btn-outline-dark">Cadastrar Encomenda</a>
</div>
</div>
</div>



<div class="col-sm-2">
<div class="card" style="background-color: #068a29;">
<div class="card-body">
<a href="functions/lista_cliente.php" class="btn btn-outline-dark">Lista de Clientes</a>
</div>
</div>
</div>


<div class="col-sm-2">
<div class="card" style="background-color: #068a29;">
<div class="card-body">
<a href="dados_da_encomenda.php" class="btn btn-outline-dark">Lista de Encomendas</a>
</div>
</div>
</div>  

</div>



</div>
</div>
</div>

<br><br><br>    

</center>

</body>

</html>