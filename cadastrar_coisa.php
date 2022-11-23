<?php

session_start();

include("functions/dbh.php");

?>

<html>

<head>
    
</head>

<body>

<a href="home.php"> <--Voltar</a>

<br><br>

<form method="POST" action="functions/cadastrar_encomenda.php">

<label>Nome: </label>
    <input type="text" name="nome" />
    <br><br>

<label>Código: </label>
    <input type="text" name="code" value="<?php echo uniqid();?>"/>
    <br><br>

<label>Origem: </label>
    <input type="text" name="origem"/>
    <br><br>

<label>Cliente: </label>
    <select name="cliente">
        <option value="selecione">Selecione</option>
        <?php
        
        $sql = mysqli_query($con,"SELECT id_cliente, nome FROM cliente");

        while($row = $sql->fetch_assoc()){

            $id = $row['id_cliente'];
            $nome = $row['nome'];

            echo "<option value='.$id.' name='cliente'>".$nome."</option>";
        }
        
        ?>
    </select>
    <br><br>

<label>Endereço: </label>
    <input type="text" name="endereco"/>
<br><br>
    <input type="submit" value="Cadastrar"/>

</form>

</body>

</html>