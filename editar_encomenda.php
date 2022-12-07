<html>

<head>
</head>

<body>

<?php

session_start();

include('functions/dbh.php');

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$sql = mysqli_query($con, "SELECT * FROM encomenda WHERE id = '$id'"); 

while($row = $sql->fetch_assoc()){

    $identificador = $row['id'];
    $nome = $row['nome'];
    $code = $row['codigo'];
    $origem = $row['origem'];
    $tamanho = $row['tamanho'];
    $peso = $row['peso'];
    $cliente = $row['cliente'];
    $endereco = $row['cliente_endereco'];

?>


<form method="POST" action="functions/editar_encomenda_action.php">

<input type="hidden" class="form-control" id = "id" name = "id" value = "<?= $row['id']; ?>"/>

<input type="text" id="teste" name="teste" value = "<?= $row['nome']; ?>"/>
<br><br>
<input type="text" id="codigo" name="codigo" value = "<?= $row['codigo']; ?>"/>
<br><br>
<input type="text" id="origem" name="origem" value = "<?= $row['origem']; ?>"/>
<br><br>
<input type="text" id="tamanho" name="tamanho" value = "<?= $row['tamanho']; ?>"/>
<br><br>
<input type="text" id="peso" name="peso" value = "<?= $row['peso']; ?>"/>
<br><br>
<input type="text" id="cliente" name="cliente" value = "<?= $row['cliente']; ?>"/>
<br><br>
<input type="text" id="endereco" name="endereco" value = "<?= $row['cliente_endereco']; ?>"/>

<br><br>

<input type="submit" value="Enviar"/>

</form>

<?php
}
?>

</body>

</html>