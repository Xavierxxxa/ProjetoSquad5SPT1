<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./Css/style.css">

    <title>Login Conscire</title>
  </head>

   <!-- Header - Bootstrap com NAV formando o menu de todo o site E responsivo-->
   <header>

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img id="logo" src="./imagens/logo.png" alt="Conscire">
          </a>

          <!--menu hamburguer-->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">                  
              <li class="nav-item">
                <a class="nav-link" href="#about">Sobre</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#cards">O que temos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./Contato.php">Contato</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./cadastro.php">Cadastre-se</a>
              </li>
            </ul>
                <button class="btn btn-warning text-white" type="submit"> <a class="text-light" href="./Login.php">Login</a></button>
            </div>
        </div>
    </nav>
    </header>
    <style>


        body{ 
            background:#292841;
        }
        .row{
            justify-content: auto;
            justify-items: auto;
            padding-top: 50px;
            background:#fff;
            border-radius: 5px;
        }

        img{
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
        }
        .btn1{
            border:none;
            outline:none;
            height: 50px;
            width: 100%;
            background-color:#F2A007;
            color: #fff;
            border-radius: 4px;
            font-weight: bold;
    
        }

        .btn1:hover{
            background:#FF0C42;
            border: 1px solid;
            color: white;
        }

        #logo {
            width: 300px;
        }

        h5{
            color:#FF0C42;
        }

    </style>
  </head>
  <body>
<section class="form center my-4 mx-5">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-5">
                <img src="./imagens/login.png" class="img-fluid" alt="">  
            </div>
            <div class="col-lg-7 px-5 pt-5">
                <img id="logo" src="./imagens/LOOOGO 1.png" alt="Conscire">
                <h5 class= "my-3 p-2">Entre na sua conta</h5>
                <form>

                
                <form action="../Back-end/php/SQLInsert.php" method="POST">


                    <div class="form-row">
                    <div class="col-lg-7">
                    <input type="text"placeholder ="Nome Completo" class="form-control my-3 p-4">
                    </div>
                    </div>

                    <div class="form-row">
                    <div class="col-lg-7">
                    <input type="email"placeholder ="Seu email aqui" class="form-control my-3 p-4">
                    </div>
                    </div>

                    <div class="form-row">
                    <div class="col-lg-7">
                    <input type="password"placeholder ="Digite uma senha" class="form-control my-3 p-4">
                    </div>
                    </div>

                    <div class="form-row">
                    <div class="col-lg-7">
                    <input type="password"placeholder ="Confirme a senha" class="form-control my-3 p-4">
                    </div>
                    </div>

                    <div class="form-row">
                    <div class="col-lg-7">
                    <button type="button" class="btn1 mt-3 mb-5">Cadastrar</button>
                    </div>
                    </div>

                    <p>Já possui uma conta?<br> <a href="#"> Faca o login aqui</a></p>

                </form>
            </div>
        </div>
    </div>

    <!--FOOTER
-->
   
<div class="footer-container">
  <div class="footer">
    <div class="footer-heading footer-1">
      <h2>O projeto</h2>
      <a href="#">Quem somos</a>
      <a href="#">termos de servicos</a>
      <a href="#">contato</a>
    </div>
  
    <div class="footer-heading footer-1">
      <h2>Contate-nos</h2>
      <a href="#">Quem somos</a>
      <a href="#">termos de servicos</a>
      <a href="#">contato</a>
    </div>
  
    <div class="footer-heading footer-3">
      <h2>Social media</h2>
      <a href="#">Instragram</a>
      <a href="#">Facebook</a>
      <a href="#">Discord</a>
    </div>
  
    <div class="footer-email-form">
      <h2>Assine nossos e-mails!</h2>
      <input type="email" placeholder="Escreva seu email aqui" id="footer-email">
      <input type="submit" value="Cadastre-se" id="footer-email-btn">
    </div>
  
  </div>
  </div>
     
    


 <!--Links essenciais do CDN bootstrap, jquery e javascript que faz a magia funcionar -->    
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 
 
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>    
 
  </body>
</html>