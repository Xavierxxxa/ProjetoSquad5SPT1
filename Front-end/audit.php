<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta lang="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conscire | Teste Audit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./Css/style-audit.css">
</head>

<body>
<!-- Header - Bootstrap com NAV formando o menu de todo o site E responsivo-->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
            <a class="navbar-brand" href="./index.php">
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
                    <a class="nav-link" href="./Contato.php">Contato</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./cadastro.php">Cadastre-se</a>
                </li>
                </ul>
                    <button class="btn btn-warning text-white" type="submit"> <a class="text-light" href="./Login.html">Login</a></button>
                </div>
            </div>
        </nav>
    </header>

    <!-- Inicío Teste -->
    <div class="container bg-light rounded">
        <h1 class="display-3 text-center texto-m">Teste AUDIT</h1>
        <p>O AUDIT foi desenvolvido para avaliar indivíduos quanto ao seu padrão do uso de álcool, sendo utilizado como instumento
        de rastreamento de comportamento de risco de consumo de bebidas alcoólicas. É importante destacar que ele não é um dignóstico completo.</p>

        <p>O principal objetivo é alertar, não apontar possíveis vícios ou doenças.</p>


        <p>É de extrema importância responder as 10 perguntas de acordo com seus hábitos de consumo, para que assim seja retornado um relatório mais apurado possível.</p>
        <p>Para mais informações sobre o Teste AUDIT, clique no botão abaixo:</p>
        <p class="texto-m"><a class="text-dark btn btn-sm btn-light my-1" href="http://www.aberta.senad.gov.br/medias/original/201704/20170424-095653-001.pdf">Clique Aqui!</a></p> 
        <hr class="my-4 bg-white">
        <form action="../Back-end/php/AuditInsert.php" method="POST">
            <div class="form-group">
                <div class="form-check texto-m">
                    <p class="texto-m">1 – Com que frequência você consome bebidas alcoólicas (cerveja, vinho, cachaça, etc.)?</p>
                    <input type="radio" name="select" value="0" required>Nunca. <br>
                    <input type="radio" name="select" value="1" required>Uma vez por mês pelo menos. <br>
                    <input type="radio" name="select" value="2" required>Duas a quatro vez por mês. <br>
                    <input type="radio" name="select" value="3" required>Duas a três vezes por semana. <br>
                    <input type="radio" name="select" value="4" required>Quatro ou mais vezes por semana. <br><br>
                </div>

                <div class="form-check texto-m">
                    <p class="texto-m">2 – Quantas doses, contendo álcool, você consome num dia em que normalmente bebe ?</p>
                    <input type="radio" name="select2" value="0" required>1 a 2 doses.<br>
                    <input type="radio" name="select2" value="1" required>3 a 4 doses.<br>
                    <input type="radio" name="select2" value="2" required>5 a 6 doses.<br>
                    <input type="radio" name="select2" value="3" required>7 a 9 doses.<br>
                    <input type="radio" name="select2" value="4" required>10 ou mais doses.<br><br>
                </div>
                
                <div class="form-check texto-m">
                    <p class="texto-m">3 – Com que freqüência que você consome 6 ou mais doses de bebida alcoólica em uma única ocasião?</p>
                    <input type="radio" name="select3" value="0" required>Nunca. <br>
                    <input type="radio" name="select3" value="1" required>Menos que mensalmente. <br>
                    <input type="radio" name="select3" value="2" required>Mensalmente. <br>
                    <input type="radio" name="select3" value="3" required>Semanalmente. <br>
                    <input type="radio" name="select3" value="4" required>Diariamente ou quase diariamente. <br><br>
                </div>
                
                <div class="form-check texto-m">
                    <p class="texto-m">4 – Com que freqüência, durante os últimos doze meses, você percebeu que não conseguia parar de beber uma vez que havia começado? </p>
                    <input type="radio" name="select4" value="0" required>Nunca. <br>
                    <input type="radio" name="select4" value="1" required>Menos que mensalmente. <br>
                    <input type="radio" name="select4" value="2" required>Mensalmente. <br>
                    <input type="radio" name="select4" value="3" required>Semanalmente. <br>
                    <input type="radio" name="select4" value="4" required>Diariamente ou quase diariamente. <br><br>
                </div>

                <div class="form-check texto-m">
                    <p class="texto-m">5 – Com que freqüência, durante os últimos doze meses, você deixou de fazer algo ou atender a um compromisso devido ao uso de bebidas alcoólicas ?</p>
                    <input type="radio" name="select5" value="0" required>Nunca. <br>
                    <input type="radio" name="select5" value="1" required>Menos que mensalmente. <br>
                    <input type="radio" name="select5" value="2" required>Mensalmente. <br>
                    <input type="radio" name="select5" value="3" required>Semanalmente. <br>
                    <input type="radio" name="select5" value="4" required>Diariamente. <br><br>
                </div>
                
                <div class="form-check texto-m">
                    <p class="texto-m">6 – Com que freqüência, durante os últimos doze meses, você precisou de uma primeira dose pela manhã para sentir-se melhor depois de uma bebedeira?</p>
                    <input type="radio" name="select6" value="0" required>Nunca. <br>
                    <input type="radio" name="select6" value="1" required>Menos que mensalmente. <br>
                    <input type="radio" name="select6" value="2" required>Mensalmente. <br>
                    <input type="radio" name="select6" value="3" required>Semanalmente. <br>
                    <input type="radio" name="select6" value="4" required>Diariamente ou quase diariamente. <br><br>
                </div>
                
                <div class="form-check texto-m">
                    <p class="texto-m">7 – Com que freqüência você sentiu-se culpado ou com remorso depois de beber?</p>
                    <input type="radio" name="select7" value="0" required>Nunca.<br>
                    <input type="radio" name="select7" value="1" required>Menos que mensalmente.<br>
                    <input type="radio" name="select7" value="2" required>Mensalmente.<br>
                    <input type="radio" name="select7" value="3" required>Semanalmente.<br>
                    <input type="radio" name="select7" value="4" required>Diariamente ou quase diariamente.<br><br>

                </div>

                <div class="form-check texto-m">
                    <p class="texto-m">8 – Com que freqüência, durante os últimos doze meses, você não conseguiu lembrar-se do que aconteceu na noite anterior porque havia bebido?</p>
                    <input type="radio" name="select8" value="0" required>Nunca. <br>
                    <input type="radio" name="select8" value="1" required>Menos que mensalmente. <br>
                    <input type="radio" name="select8" value="2" required>Mensalmente. <br>
                    <input type="radio" name="select8" value="3" required>Semanalmente. <br>
                    <input type="radio" name="select8" value="4" required>Diariamente ou quase diariamente. <br><br>
                </div>

                <div class="form-check texto-m">
                    <p class="texto-m">9 – Você ou outra pessoa já se machucou devido a alguma bebedeira sua?</p>
                    <input type="radio" name="select9" value="0" required>Nunca. <br>
                    <input type="radio" name="select9" value="2" required>Sim, mas não nos últimos 12 meses. <br>
                    <input type="radio" name="select9" value="4" required>Sim, nos últimos 12 meses. <br><br>
                </div>
                
                <div class="form-check texto-m">
                    <p class="texto-m">10 – Algum parente, amigo, médico ou outro profissional de saúde mostrou-se preocupado com seu modo de beber ou sugeriu que você diminuísse a quantidade?</p>
                        <input type="radio" name="select10" value="0" required>Nunca. <br>
                        <input type="radio" name="select10" value="2" required>Sim, mas não nos últimos 12 meses. <br>
                        <input type="radio" name="select10" value="4" required>Sim, nos últimos 12 meses. <br><br>
                </div> 
            </div>
            <p align="center">
                <input class=" m-1 p-1 bg-light text-dark rounded" type="submit" value="Enviar" class="btn rounded btn-light"> 
                <input class=" m-1 p-1 bg-light text-dark rounded" name="Submit" type="reset" value="Limpar" class="btn rounded btn-light">
            </p>
            <p>&nbsp;</p>
            </form>
    </div>

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