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
<div class="card" style="background-color: #068a29;">

<form method="POST" action ="functions/cadastro_cliente.php">

<h6>Nome do cliente: </h6>
<div class="col-sm-3">
<input type = "text" class="form-control" name="nome" />
</div>
<br><br>
<h6>CPF do cliente: </h6>
<div class="col-sm-3">
<input type = "text" class="form-control" name="cpf" />
</div>
<br><br>
<h6>Endereço do cliente: </h6>
<div class="col-sm-3">
<input type = "text" class="form-control" name="endereco" />
</div>

<br><br>

<input class="btn btn-dark" type = "submit" value="Cadastrar"/>

</div>

</div>
</center>

</form>

</body>

</html>