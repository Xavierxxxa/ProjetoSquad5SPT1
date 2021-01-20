<?php

require "Connection.php";

$nome = $_POST['nome'];
$msg = $_POST['msg'];

$conection = mysqli_connect($servername, $username, $password, $database);

$sqlInsert = "INSERT INTO SQUAD5.COMENTARIO (nome, mensagem) values ('$nome', '$msg')";
$sqlQuerySelectResult = $conection -> query($sqlInsert);

echo "<script> 
    alert('Comentario efetuado com sucesso!');
    window.location.href = '../../Front-end/Contato.php'
</script>";