<?php

require "../Back-end/php/Connection.php";

$conection = mysqli_connect($servername, $username, $password, $database);

$sqlSelect = "SELECT * FROM squad5.cadastro right join  squad5.comentarios 
on cadastro.id = comentarios.id;";
$stmt = $conection -> query($sqlSelect);

foreach($stmt as $key => $value){
    echo "<h1> Avaliação </h1>";
    echo "Nome: ";
    echo $value['nome'];
    echo "<br/>";
    echo "Mensagem: ";
    echo $value['msg'];
    echo "<br/>";
    echo "Data: ";
    echo $value['hora'];
    echo "<hr/>";
}

