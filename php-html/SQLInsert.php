<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);
$confirme = md5($_POST['confirme']);

if (strlen($nome) >= 3 and strlen($email) >= 15 and strlen($senha) >= 4 and $senha == $confirme){
    $link = mysqli_connect("sql213.epizy.com", "epiz_27132376", "fstyjHcLFGyiC", "epiz_27132376_Login");
    if (!$link){
        die ("Falha na conexão com o BD " . mysqli_connect_errno());
    }
    else{
        #echo "Sucesso: Sucesso ao conectar-se com a base de dados MySQL.";
        $SQLSelect = "SELECT * FROM login";
        $SQLSelectResult = mysqli_query($link, $SQLSelect);
        while($rowResult = mysqli_fetch_assoc($SQLSelectResult)){
            if ($rowResult['EMAIL'] == $email){
                echo "<script> 
                        alert('Este email ja esta sendo utilizado, tente novamente com um email valido!');
                        window.location.href = 'cadastro.php'
                    </script>";
            }
        }
        $sqlQuerySelect = "INSERT INTO login (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
        $sqlQuerySelectResult = $link -> query($sqlQuerySelect);
        echo "<script> 
                alert('Cadastro efetuado com sucesso');
                window.location.href = 'login.php'
            </script>";
    }
}
else if ($senha != $confirme) {
    echo "<script> 
            alert('As senhas nao sao iguais. Tente novamente!');
            window.location.href = 'cadastro.php'
        </script>";
}

else if (strlen($nome) <= 3) {
    echo "<script> 
            alert('Nome invalido. Tente novamente!');
            window.location.href = 'cadastro.php'
        </script>";
}

else if (strlen($email) <= 20) {
    echo "<script> 
            alert('E-mail invalido. Tente novamente!');
            window.location.href = 'cadastro.php'
            </script>";
}

else if (strlen($senha) <= 4) {
        echo "<script> 
                    alert('Senha invalida. Tente novamente!');
                    window.location.href = 'cadastro.php'
            </script>";
        }
mysqli_close($link);
?>