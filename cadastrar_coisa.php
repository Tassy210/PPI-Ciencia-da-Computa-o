<?php

session_start();

include('functions/dbh.php');

?>

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
  <h4  style="color: #FFF;">Cadastro de Encomenda</h4>
  <span class="navbar-text">
        <a href='home.php' style="color: #fff;">Voltar</a>
      </span>
  </div>
</nav>

<br><br>

<div class="card" style="background-color: #068a29;">

<form method="POST" action ="functions/cadastrar_encomenda.php">

<h6>Nome: </h6>
<div class="col-sm-3">
<input type = "text" class="form-control" name="nome" />
</div>
<br><br>
<h6>Código: </h6>
<div class="col-sm-3">
<input type = "text" class="form-control" name="code" value="<?php echo substr(uniqid(rand()), 0, 5);?>"/>
</div>
<br><br>
<h6>Origem: </h6>
<div class="col-sm-3">
<input type = "text" class="form-control" name="origem" />
</div>
<br><br>
<h6>Tamanho: </h6>
<div class="col-sm-3">
<input type = "text" class="form-control" name="tamanho" />
</div>
<br><br>
<h6>Peso: </h6>
<div class="col-sm-3">
<input type = "text" class="form-control" name="peso" />
</div>
<br><br>
<h6>Cliente: </h6>
<div class="col-sm-3">
<select id ="clientes" class="form-select" name="cliente">
    <option>Selecione</option>

    <?php
           
           $consulta = "SELECT * FROM cliente ORDER BY nome";

           $ver = $con->query($consulta);

           while($dados = mysqli_fetch_array($ver)){
           
           $nome = $dados["nome"];
           $ID_pessoa = $dados['id_cliente'];

            echo"<option value=".$nome.">".$nome."</option>";

            }
         
           ?>

</select>
</div>


<br><br>

<input type = "submit" class="btn btn-dark" value="Cadastrar"/>

</div>

</div>
</center>

</form>

</body>

</html>

