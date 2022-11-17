<html>

<head>
</head>

<body>

<?php

session_start();

include('functions/dbh.php');

$id = $_GET['id_cliente'];

$sql = mysqli_query($con, "SELECT * FROM cliente WHERE id_cliente = $id");


while($dados = $sql->fetch_assoc()){
  
    $nome = $dados['nome'];
    $cpf = $dados['cpf'];

    
    }


?>

<form method="" action ="">

<label>Nome do cliente</label>
<input type = "text" name="nome" value=<?php echo $nome ?> />
<br><br>
<label>CPF do cliente</label>
<input type = "text" name="cpf" />

<br><br>

<input type = "submit" value="Cadastrar"/>

</form>

</body>

</html>