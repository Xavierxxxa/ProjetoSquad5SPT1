<?php

$servername = "localhost"; //Alterar dados de entrada.
$username = "root";
$password = "";
$database = "squad5";

$conection = mysqli_connect($servername, $username, $password, $database);

$sqlSelect = "SELECT * FROM squad5.login right join  squad5.comentarios 
on login.id = comentarios.id;";
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

