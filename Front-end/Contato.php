<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./Css/style.css">
    <title>Contato | Conscire</title>
    </head>
<body>
  <!-- Header - Bootstrap com NAV formando o menu de todo o site E responsivo-->
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img id="logo" src="./imagens/LOOOGO 1.png" alt="Conscire">
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
                <a class="nav-link" href="./Contato.html">Contato</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./Cadastro1.html">Cadastre-se</a>
              </li>
            </ul>
                <button class="btn btn-warning text-white" type="submit"> <a class="text-light" href="./Login.html">Login</a></button>
            </div>
        </div>
    </nav>
  </header>
      <section class="contact">
        <div class="container py-5">
          <div class="row">
            <div class="col-lg-6 mx-auto">
              <div class="card">
                <div class="card-body">
                  <div class="col-lg-12">
                    <div class="head text-center text-white py-3">
                      <h3>Contato</h3>
                    </div>
                  </div>
                </div>
                <form action="../Back-end/php/register_coments.php" method="POST">
              <div class="form p-3">
                <div class="form-row my-5">
                  <div class="col-lg-6">
                    <input type="text" class="effect-1" placeholder="Nome" name='nome'>
                    <span class="Focus-border"></span>
                  </div>
                  <div class="col-lg-6">
                    <input type="text" class="effect-1" placeholder="Sobrenome">
                    <span class="Focus-border"></span>
                  </div>
                </div>
                <div class="form-row pt-5">
                  <div class="col-lg-12">
                    <textarea name="msg" cols="60" rows="4" placeholder= "Mensagem"></textarea>
                    <span class="Focus-border"></span>
                  </div>
                </div>
                <div class="form-row pt-4">
                  <div class="col-lg-6">
                    <p><input type="checkbox"> Não sou um robô </p>
                    <p><a href="./index.php"> Voltar para Conscire</a></p>
                  </div>
                  <div class= "offset-2 col-lg-4">
                    <button class="btn1">ENVIAR</button>
                  </div>
              </div>
              </form>
              </div class="endereco">
                    <p class="text-center">Entre em contato conosco:<br>
                    Telefone: (11)3656-5562<br>
                    Endereço: Rua Conscire, 569<br>
                    São Paulo - SP </p>
                </div>
            </div>
          </div>
          <div class="container text-center bg-light">
                <?php include_once "coments.php";  ?>
          </div>
        </div>
        </div>
      </section>
      <!-- FOOTER -->
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