<?php
    session_start();

    $_SESSION['email'] = "";
    $_SESSION['senha'] = "";

    session_destroy();

    header('Location: ../../Front-end/index.php');
?>