?php

require "Connection.php";

session_start();

$email = $_GET['email'];

$emailSession = $_SESSION['email'];

if ($email == $emailSession){
    //Verifico se o usuario que esta querendo excluir a conta e o mesmo que esta logado na sessao.
    $conection = mysqli_connect($servername, $username, $password, $database);
    if ($conection == true){
        $SQLDelete = "DELETE FROM cadastro WHERE EMAIL = '$email'";
        $SQLDeleteResult = mysqli_query($conection, $SQLDelete);
        if ($SQLDeleteResult == true){
            session_destroy();

            echo "<script> 
                    alert('Usuario Excluido!');
                    window.location.href = '../../Front-end/index.php'
                </script>";
        }
        else{
            echo "<script> 
                alert('Nao foi possivel excluir a conta!');
                window.location.href = '../../Front-end/moodle.php'
            </script>";
        }
    }
    else{
        die("Erro ao conectar-se ao banco de dados" . mysqli_connect_error());
    }
}
else{

}
?>