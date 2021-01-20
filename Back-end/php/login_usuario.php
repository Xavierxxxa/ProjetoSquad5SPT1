<?php

session_start();

require "Connection.php";

$email = $_POST['email'];
$senha = md5($_POST['senha']);

if (strlen($email) >= 3 and strlen($senha) >= 3){
    $conection = mysqli_connect($servername, $username, $password, $database);
    if ($conection == true){
        $SQLSelect = "SELECT EMAIL, SENHA, NOME FROM cadastro WHERE EMAIL = '$email' and SENHA = '$senha'";
        $SQLSelectResult = mysqli_query($conection, $SQLSelect);
        
        $contador = 0;

        while ($rowResult = mysqli_fetch_all($SQLSelectResult)) {
            #print_r($rowResult);
            #A funcao mysqli_fetch_all() vai me retornar linha a linha da minha tabela.
            
            if ($rowResult[$contador][0] == $email and $rowResult[$contador][1] == $senha){

                $_SESSION['email'] = $rowResult[$contador][0];
                $_SESSION['senha'] = $rowResult[$contador][1];
                $_SESSION['nome'] = $rowResult[$contador][2];
                #Nesta linha de cima nos estamos atribuindo o valor obtido na consulta em uma variavel
                #superglobal.

                echo "<script> 
                        alert('Login Realizado com sucesso!');
                        window.location.href = '../../Front-end/moodle.php'
                    </script>";
            }
            $contador += + 1;
        }
        echo "<script> 
                alert('Email ou senha incorretos!');
                window.location.href = '../../Front-end/Login.php'
            </script>";
    }
    else {
        die("Erro ao conectar-se ao banco de dados" . mysqli_connect_error());
    }
}

else {
    echo "<script> 
            alert('E-mail ou senha invalidos!');
            window.location.href = '../../Front-end/Login.php'
        </script>";
}
?>
