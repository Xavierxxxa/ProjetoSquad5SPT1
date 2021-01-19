<?php
session_start();

require "../Back-end/php/Connection.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 responsive">
    <title>AVA Conscire</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="./Css/style2.css"> <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
</head>
<body>

<!--wrapper start-->
    <div class="wrapper">
<!--header menu start-->
<div class="header">
    <div class="header-menu">
        <div class="title"> AVA <span>CONSCIRE</span></div>
        <div class="sidebar-btn">
            <i class="fas fa-bars"></i>
            </div>
            <ul>
                <li><a href="#"><i class="fas fa-search"></i></a></li>
                <li><a href="#"><i class="fas fa-bell"></i></a></li>
                <li><a href="../Back-end/php/sair.php"><i class="fas fa-power-off"></i></a></li>
            </ul>
        </div>
    </div>  
<!--header menu end-->
<!--sidebar start-->
<div class="sidebar">
    <div class="sidebar-menu">
        <center class="profile">
            <img src="./imagens/avatar.png" alt="">
            <p>Seja bem vindo(a)!</p>
        </center>
    <li class="item">
        <a href="#" class="menu-btn">
            <i class="fas fa-desktop"></i><span>Dashboard</span>
        </a>
    </li>
    <li= class="item" id="profile">
        <a href="#profile" class="menu-btn">
            <i class="fas fa-user-circle"></i><span>Perfil<i class="fas fa-chevron-down drop-down"></i></span>
        </a>
        <div class="sub-menu">
            <a href="#"><i class="fas fa-image"></i><span>Mudar a foto</span></a>
            <a href="#"><i class="fas fa-address-card"></i><span>Dados pessoais</span></a>
        </div>
    </li>
    <li= class="item" id="messages">
        <a href="#messages" class="menu-btn">
            <i class="fas fa-book"></i><span>Conteúdo<i class="fas fa-chevron-down drop-down"></i></span>
        </a>
        <div class="sub-menu">
            <a href="#"><i class="fas fa-book"></i><span>Quiz</span></a>
            <a href="#"><i class="fas fa-book"></i><span>História das bebidas</span></a>
            <a href="audit.php"><i class="fas fa-book"></i><span>Teste Audit</span></a> 
        </div>
    </li>
    <li= class="item" id="settings">
        <a href="#settings" class="menu-btn">
            <i class="fas fa-cog"></i><span>Configurações<i class="fas fa-chevron-down drop-down"></i></span>
        </a>
        <div class="sub-menu">
            <a href="#"><i class="fas fa-lock"></i><span>Senha</span></a>
            <a href="../Back-end/php/excluirConta.php?email=<?php echo $_SESSION['email']?>"><i class="fas fa-lock"></i><span>Excluir Conta</span></a>
            
        </div>
    </li>
    <li class="item">
        <a href="#" class="menu-btn">
            <i class="fas fa-info-circle"></i><span>Sobre</span>
        </a>
    </li>
</div>
</div>
</div>
<!--sidebar end-->

<!--wrapper end-->
<!-- fazer menu se mexer>>
    
    <script type="text/javascript">
$(document).ready(function(){
    $(".sidebar-btn").click(function(){
        $(".wrapper").toggleClass("collapse");
    
    });

});
</script>-->



<!-- teste de cards-->
<section class="service py-3">
        <div class="col mx-auto align-items-center my-5 ">
    <div class="heading text-center pt-5">
      <h1 class="font-weight-bold pb-5 text-warning center">teste</h2>
    </div>

    <div class="row mx-auto justify-content-center align-items-center text-center container">
      <div class="one col-lg-3 col-md-3 col-12 w-25 m-2">
        <img class="img-fluid w-90" src="./imagens/card1 quiz.svg">
        <h5 class="font-weight-bold pt-4">TEMOS QUIZ</h5>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
    </div>

    <div class="one col-lg-3 col-md-3 col-12 w-25 m-2">
      <img class="img-fluid w-90" src="./imagens/ranking.svg">
      <h5 class="font-weight-bold pt-4">RANKINGS</h5>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
  </div>

  <div class="one col-lg-3 col-md-3 col-12 w-25 m-2">
    <img class="img-fluid w-90 " src="./imagens/card2 audit.svg">
    <h5 class="font-weight-bold pt-4">TESTE AUDIT</h5>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
</div>
    </div>
  </div>
  </section>
  
 <!--Links essenciais do CDN bootstrap, jquery e javascript que faz a magia funcionar -->    
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 
 
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>