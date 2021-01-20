<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> 
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <link rel="stylesheet" href="css/style-moodle.css">

        <title>AVA CONSCIRE</title>
    </head>
    <body id="body-pd">
        <header class="header" id="header">
            <div class="header__toggle">
                <i class='bx bx-menu' id="header-toggle"></i>
            </div>

            <div class="header__img">
                <img src="" alt="">
            </div>
        </header>

        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div>
                    <a href="#" class="nav__logo">
                        <i class='bx bx-layer nav__logo-icon'></i>
                        <span class="nav__logo-name">Conscire</span>
                    </a>

                    <div class="nav__list">
                        <a href="#" class="nav__link active">
                        <i class='bx bx-grid-alt nav__icon' ></i>
                            <span class="nav__name">Painel Geral</span>
                        </a>

                        <a href="#" class="nav__link">
                            <i class='bx bx-user nav__icon' ></i>
                            <span class="nav__name">Perfil</span>
                        </a>
                        
                        <a href="#" class="nav__link">
                            <i class='bx bx-brain nav__icon' ></i>
                            <span class="nav__name">Quiz</span>
                        </a>

                        <a href="#" class="nav__link">
                            <i class='bx bx-brain nav__icon' ></i>
                            <span class="nav__name">História das bedidas</span>
                        </a>

                        <a href="#" class="nav__link">
                            <i class='bx bx-brain nav__icon' ></i>
                            <span class="nav__name">Teste Audit</span>
                        </a>

                        <a href="#" class="nav__link">
                            <i class='bx bx-trophy nav__icon' ></i>
                            <span class="nav__name">Resultados</span>
                        </a>


                    </div>
                </div>

                <a href="#" class="nav__link">
                    <i class='bx bx-log-out nav__icon' ></i>
                    <span class="nav__name">Sair</span>

                <a href="#" class="nav__link">
                    <i class='bx bx-log-out nav__icon' ></i>
                    <span class="nav__name">Deletar conta</span>
                </a>
            </nav>
        </div>

        <h1>Olá! Seja bem vindo(a)!</h1>
        <div class="container">
            <div class="row">
         <!--CARD 1 - HISTORIA DAS BEBIDAS - YOUTUBE-->       
            <div class="col-xs-6 col-sm-4">
            <div class="card">
            <a class="img-card" href="https://www.ted.com/talks/rod_phillips_a_brief_history_of_alcohol/transcript?language=pt-br#t-8168"><img src="./imagens/historia-das-bebidas-.png" /></a>
            <br/>
            <div class="card-content">
            <h4 class="card-title">
            <a href="https://www.ted.com/talks/rod_phillips_a_brief_history_of_alcohol/transcript?language=pt-br#t-8168"> HISTÓRIA DAS BEBIDAS </a>
            </h4>
            <div class="">Você sabe como as bebidas alcoólicas surgiram? Aqui nesse vídeo, Rod Phillips explica essa história por meio de uma animacão. Venha conferir!</div>
            </div>
            <div class="card-read-more">
            <a class="btn btn-link btn-block" href="https://www.ted.com/talks/rod_phillips_a_brief_history_of_alcohol/transcript?language=pt-br#t-8168">Clique aqui para saber mais</a>
            </div>
            </div>
            </div>

            <!--CARD 2 - QUIZ - LINK DO QUIZ -->   
            <div class="col-xs-6 col-sm-4">
                <div class="card">
                <a class="img-card" href="./Quiz/quiz.html"><img src="./imagens/imagem-quiz.png" /></a>
                <br/>
                <div class="card-content">
                <h4 class="card-title">
                <a href="./Quiz/quiz.html"> QUIZ </a>
                </h4>
                <div class="">E ai, já tomou um gole de consciência no nosso site? Entao venha responder nosso Quiz, marcar muitos pontos e escalar nosso ranking!</div>
                </div>
                <div class="card-read-more">
                <a class="btn btn-link btn-block" href="./Quiz/quiz.html">Clique aqui para saber mais</a>
                </div>
                </div>
                </div>

        
              <!--CARD 3 - TESTE AUDIT - LINK DO AUDIT-->   
            <div class="col-xs-6 col-sm-4">
             <div class="card">
            <a class="img-card" href="./audit.php"><img src="./imagens/imagem-teste-audit.png" /></a>
            <br/>
            <div class="card-content">
            <h4 class="card-title">
            <a href="./audit.php"> TESTE AUDIT </a>
            </h4>
            <div class="">O AUDIT - Alcool Use Disorders Identification Test é um instrumento de avaliação desenvolvido pela Organização Mundial de Saúde (OMS). </div>
            </div>
            <div class="card-read-more">
            <a class="btn btn-link btn-block" href="./audit.php">Clique aqui para saber mais</a>
            </div>
            </div>
            </div>


              <!--CARD 4 - EFEITO DA BEBIDA NO CORPO HUMANO-->   
            <div class="col-xs-6 col-sm-4">
                <div class="card">
                <a class="img-card" href="https://super.abril.com.br/mundo-estranho/como-o-organismo-reage-ao-alcool/ "><img src="./imagens/imagem-efeitos-da-bebida.jpeg" /></a>
                <br/>
                <div class="card-content">
                <h4 class="card-title">
                <a href="https://super.abril.com.br/mundo-estranho/como-o-organismo-reage-ao-alcool/ "> COMO O ORGANISMO REAGE AO ÁLCOOL? </a>
                </h4>
                <div class="">Você já se perguntou como o corpo reage ao álcool ingerido? A revista Mundo Estranho conta o que acontece em vários órgãos do nosso organismo.</div>
                </div>
                <div class="card-read-more">
                <a class="btn btn-link btn-block" href="https://super.abril.com.br/mundo-estranho/como-o-organismo-reage-ao-alcool/ ">Clique aqui para saber mais</a>
                </div>
                </div>
                </div>

                  <!--CARD 5 - INFLUENCIA DAS MIDIAS -->   
                <div class="col-xs-6 col-sm-4">
                    <div class="card">
                    <a class="img-card" href="https://cisa.org.br/index.php/sua-saude/informativos/artigo/item/248-influencias-das-midias-sociais-no-consumo-de-alcool-entre-adolescentes-e-jovens"><img src="./imagens/imagem-influencia-das-bebidas.png" /></a>
                    <br/>
                    <div class="card-content">
                    <h4 class="card-title">
                    <a href="https://cisa.org.br/index.php/sua-saude/informativos/artigo/item/248-influencias-das-midias-sociais-no-consumo-de-alcool-entre-adolescentes-e-jovens"> MÍDIAS SOCIAIS E SUA INFLUÊNCIA </a>
                    </h4>
                    <div class="">Você acredita no poder da influência das mídias? Aqui você pode ver como as mídias sociais podem influenciar o comportamento dos jovens em relação às bebidas alcoólicas.</div>
                    </div>
                    <div class="card-read-more">
                    <a class="btn btn-link btn-block" href="https://cisa.org.br/index.php/sua-saude/informativos/artigo/item/248-influencias-das-midias-sociais-no-consumo-de-alcool-entre-adolescentes-e-jovens">Clique aqui para saber mais</a>
                    </div>
                    </div>
                    </div>

                      <!--CARD 6 - METABOLISMO DO ALCOOL-->   
                    <div class="col-xs-6 col-sm-4">
                        <div class="card">
                        <a class="img-card" href="https://cisa.org.br/index.php/sua-saude/informativos/artigo/item/47-metabolismo-do-alcool"><img src="./imagens/imagem-metabolismo-do-alcool.png" /></a>
                        <br/>
                        <div class="card-content">
                        <h4 class="card-title">
                        <a href="https://cisa.org.br/index.php/sua-saude/informativos/artigo/item/47-metabolismo-do-alcool"> METABOLISMO DO ÁLCOOL </a>
                        </h4>
                        <div class=""> Você sabia que da ingestão até ser eliminado, o álcool passa por diversas fases de metabolização dentro do nosso organismo?</div>
                        </div>
                        <div class="card-read-more">
                        <a class="btn btn-link btn-block" href="https://cisa.org.br/index.php/sua-saude/informativos/artigo/item/47-metabolismo-do-alcool">Clique aqui para saber mais</a>
                        </div>
                        </div>
                        </div>
                </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
        <script src="main-moodle.js"></script>
    </body>
</html>