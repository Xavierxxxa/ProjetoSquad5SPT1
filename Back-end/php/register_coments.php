<?php

require "Connection.php";

$nome = $_POST['nome'];
$msg = $_POST['msg'];

$conection = mysqli_connect($servername, $username, $password, $database);

$sqlInsert = "INSERT INTO SQUAD5.COMENTARIOS (nome, msg) values ('$nome', '$msg')";
$sqlQuerySelectResult = $conection -> query($sqlInsert);
echo "Comentário realizado com sucesso";

/*Adicionar redirecionamento para página de comentarios:
echo "<script> 
            alert('Comentário realizado com sucesso!');
            window.location.href = '../../Front-end/Contado.php'
    </script>";
*/