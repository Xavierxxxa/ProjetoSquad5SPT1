 
 <!--estrutura padrão de html com link de bootstrap e página de CSS -->
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Conscire</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./Css/style.css">

</head>

<body>

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

 <!--pagina - HOME - Video, frase que está no video e botao do video -->
        <div class="mid">
            <video autoplay muted loop>
                <source class="embed-responsive" src="./imagens/video-index.mp4" type="video/mp4">
            </video>    
            <div class="hero text-center">
                <h2 class= "text-warning display-3 font-weight-bold">Tomar um gole de <br> consciência?<br></h2>
                <p class="text-light mx-auto"> Nunca foi tâo fácil!</p>
                <a class="text-light" href="./Login.php">Iniciar</a>
            </div>   
        </div>
          
    </header>

   <!--Um adendo: toda página está sendo feita por section. Cada Section representa uma pagina -->
     <!--pagina - Sobre ou quem somos nós -->
    <section id="about" class="about py-5">
      <div class="row align-items-center container my-5 mx-auto foo">
        <div class="text col-lg-6 col-md-6 col-12 w-50 pt-5 pb-5">
          <h6>CONSCIRE</h6>
          <h2> Porque prevenção é o melhor caminho</h2>
          <p>Elaborado através da tecnologia, Conscire tem o objetivo de atuar na prevenção ao uso precoce de bebidas alcoólicas por jovens.</p>
          <a href="#">Conscientize-se</a>
        </div>
        <div class="img col-lg-6 col-md-6 col-12 w-50">
          <img class="img-fluid" src= "./imagens/about-index.svg">
        </div>
      </div>
    </section>

     <!--pagina - funcionalidades (vai ser de contato) -->


     <section class="funcionalidades py-5">
      <div class="row align-items-center container my-5 mx-auto">
        <div class="img col-lg-6 col-md-6 col-12 w-50">
          <img class="img-fluid" src= "./imagens/Quem somos.svg">
        </div>
        <div class="text col-lg-6 col-md-6 col-12 w-50 pt-5 pb-5">
          <h6>CONSCIRE</h6>
          <h2> Como o projeto atua? </h2>
          <p> Queremos instigar maior pensamento crítico, através de materiais e quizes sobre o uso do álcool entre jovens, como ferramenta de conscientização. </p>
          <a href="./Login.php">Conscientize-se</a>
        </div>
      </div>
    </section> 
 
    <!--pagina - funcionalidades - cards -->

    <section id="cards" class="service py-5">
      <div class="col mx-auto align-items-center my-5 ">
      <div class="heading text-center pt-5">
        <h2 class="font-weight-bold pb-5 text-warning">O que disponibilizamos</h2>
      </div>
      <div class="row mx-auto justify-content-center align-items-center text-center container">
        <div class="one col-lg-3 col-md-3 col-12 w-25 m-2">
          <img class="img-fluid w-90" src="./imagens/card1 quiz.svg">
          <h5 class="font-weight-bold pt-4">TEMOS QUIZ</h5>
          <p>E ai, já tomou um gole de consciência no nosso site? Entao venha responder nosso Quiz, marcar muitos pontos e escalar nosso ranking!.</p>
      </div>

      <div class="one col-lg-3 col-md-3 col-12 w-25 m-2">
        <img class="img-fluid w-90" src="./imagens/ranking.svg">
        <h5 class="font-weight-bold pt-4">RANKINGS</h5>
        <p>Você consegue ver o seu ranking de pontos e arquivos lidos dentre todos os usuários.</p>
    </div>

    <div class="one col-lg-3 col-md-3 col-12 w-25 m-2">
      <img class="img-fluid w-90 " src="./imagens/card2 audit.svg">
      <h5 class="font-weight-bold pt-4">TESTE AUDIT</h5>
      <p>O AUDIT - Alcool Use Disorders Identification Test é um instrumento de avaliação desenvolvido pela Organização Mundial de Saúde (OMS).</p>
  </div>
    </div>
    </div>
    </section>

<!--FOOTER-->
   
<div class="footer-container">
<div class="footer">
  <div class="footer-heading footer-1">
    <h2>O projeto</h2>
    <a href="#about">Quem somos</a>
    <a href="#">termos de servicos</a>
    <a href="./Contato.php">contato</a>
  </div>

  <div class="footer-heading footer-1">
    <h2>Contate-nos</h2>
    <a href="#about">Quem somos</a>
    <a href="#">termos de servicos</a>
    <a href="./Contato.php">contato</a>
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