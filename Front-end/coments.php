<?php

require "../Back-end/php/Connection.php";

$conection = mysqli_connect($servername, $username, $password, $database);

$sqlSelect = "SELECT * FROM squad5.cadastro right join squad5.comentario
on cadastro.idnome = comentario.id;";
$stmt = $conection -> query($sqlSelect);

foreach($stmt as $key => $value){
    echo "<h1> Avaliação </h1>";
    echo "Nome: ";
    echo $value['nome'];
    echo "<br/>";
    echo "Mensagem: ";
    echo $value['mensagem'];
    echo "<br/>";
    echo "Data: ";
    echo $value['data'];
    echo "<hr/>";
}

