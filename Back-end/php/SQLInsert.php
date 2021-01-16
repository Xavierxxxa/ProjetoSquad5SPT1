<?php

require "Connection.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);
$confirme = md5($_POST['confirme']);

if (strlen($nome) >= 3 and strlen($email) >= 15 and strlen($senha) >= 4 and $senha == $confirme){
    $conection = mysqli_connect($servername, $username, $password, $database);
    if (!$conection){
        die ("Falha na conexão com o BD " . mysqli_connect_errno());
    }
    else{
        #echo "Sucesso: Sucesso ao conectar-se com a base de dados MySQL.";
        $SQLSelect = "SELECT * FROM login";
        $SQLSelectResult = mysqli_query($conection, $SQLSelect);
        while($rowResult = mysqli_fetch_assoc($SQLSelectResult)){
            if ($rowResult['EMAIL'] == $email){
                echo "<script> 
                        alert('Este email ja esta sendo utilizado, tente novamente com um email valido!');
                        window.location.href = '../../Front-end/cadastro.php'
                    </script>";
            }
        }
        $sqlQuerySelect = "INSERT INTO login (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
        $sqlQuerySelectResult = $conection -> query($sqlQuerySelect);
        echo "<script> 
                alert('Cadastro efetuado com sucesso');
                window.location.href = '../../Front-end/Login.php'
            </script>";
    }
}
else if ($senha != $confirme) {
    echo "<script> 
            alert('As senhas nao sao iguais. Tente novamente!');
            window.location.href = '../../Front-end/cadastro.php'
        </script>";
}

else if (strlen($nome) <= 3) {
    echo "<script> 
            alert('Nome invalido. Tente novamente!');
            window.location.href = '../../Front-end/cadastro.php'
        </script>";
}

else if (strlen($email) <= 20) {
    echo "<script> 
            alert('E-mail invalido. Tente novamente!');
            window.location.href = '../../Front-end/cadastro.php'
            </script>";
}

else if (strlen($senha) <= 4) {
        echo "<script> 
                    alert('Senha invalida. Tente novamente!');
                    window.location.href = '../../Front-end/cadastro.php'
            </script>";
        }
mysqli_close($conection);
?>
