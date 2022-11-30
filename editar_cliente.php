<html>

<head>
</head>

<body>
<?php

session_start();

include_once("functions/dbh.php");

$id = filter_input(INPUT_GET, 'id_cliente', FILTER_SANITIZE_NUMBER_INT);

$resultado = mysqli_query($con, "SELECT * FROM cliente WHERE id_cliente = '$id'"); 

while($row = $resultado->fetch_assoc()){

    $id = $row['id_cliente'];
    $nome = $row['nome'];
    $cpf = $row['cpf'];
    $endereco = $row['endereco'];

   

}



?>


<form method="POST" action="functionos/update.php">

    <label>Nome: </label>
    <br>
    <input type='text' value = <?php echo $nome;?> ></input>
    <br><br>
    <label>Endereço: </label>
    <br>
    <input type='text' value = <?php echo $endereco;?> ></input>
    <br><br>
    <label>CPF: </label>
    <br>
    <input type='text'value = <?php echo $cpf;?> ></input>

</form>

</body>

</html>