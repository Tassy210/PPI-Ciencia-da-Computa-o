<?php

session_start();

include("functions/dbh.php");

?>

<html>

<head>

<style>
      .selecionado {
    display: none;
}      .vazio {
    display: none;
}</style>

<script>

function update(){
          const checkbox = document.getElementById("end");
          checkbox.checked = false;
          Array.from(document.getElementsByClassName("selecionado")).forEach(
    div => (div.style.display = "none")

  
  );
  var select = document.getElementById('clientes');

x = document.getElementById(select.value);
x.style.display = "block";
var y = document.getElementById('vazio');
y.style.display = "none"; }

</script>

</head>

<body>

<a href="home.php"> <--Voltar</a>

<br><br>

<form method="POST" action="functions/cadastrar_encomenda.php">

<label>Código: </label>
    <input type="text" name="code" value="<?php echo uniqid();?>"/>
    <br><br>

<label>Origem: </label>
    <input type="text" name="origem"/>
    <br><br>

<label>Tamanho: </label>
    <input type="text" name="tamanho"/>
    <br><br>

<label>Peso: </label>
    <input type="text" name="peso"/>
    <br><br>


<label>Cliente: </label>
    <select name="cliente" id ="clientes" data-live-search="true" onclick='update()'>
        <option value="selecione" >Selecione</option>
        <?php
        
        $sql = mysqli_query($con,"SELECT id_cliente, nome FROM cliente");

        while($row = $sql->fetch_assoc()){

            $id = $row['id_cliente'];
            $nome = $row['nome'];

            echo "<option value='.$id.' name='cliente' onclick='MenuToggle()'>".$nome."</option>";
        }
        
        ?>
    </select>
    <br><br>

<label>Endereço: </label>
  <?php
  
  $consulta = "SELECT * FROM cliente"; 

  $ver - $con->$query($consulta); 

  while($dados = mysqli_fetch_array($ver)){

    $endereco = $dados['endereco'];

    echo ''.$endereco.'';

  }

  ?>
<br><br>
    <input type="submit" value="Cadastrar"/>

</form>

</body>

</html>