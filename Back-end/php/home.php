<?php

session_start();

?>

<!DOCTYPE html>

<html>
    <head>
        <meta lang="pt-br">
        <meta charset="utf-8">
        <link rel="stylesheet" href="./css(atualizado)/home.css">
        <link rel="stylesheet" href="./css(atualizado)/global.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>BebendoBem | Home</title>
    </head>
    <body>
    <header>
        <nav class="nav justify-content-center">
                <a href="index.php" ><img src="./img/logo.svg" width="100" height="70" alt="Icone"></a>
                <a href="audit.php" class="px-2 text-light">Teste AUDIT</a>
                <a href="resultado_audit.php" class="px-2 text-light">Resultado AUDIT</a>
                <a href="index.php" class="px-2 text-light">Sair</a>
            <!--session_destroy()-->
        </nav>
    </header>
        <div class="container-fluid">
            <h3>Ola, <?php echo $_SESSION['nome'] . ' seu e-mail: ' . $_SESSION['email']?></h3>
            <!-- Com a funcao session_destroy() eu encero esta sessao, podemos entender como se eu estivesse 
            deslogando do sistema e sendo redirecionado a pagina de login.-->
        </div>
        <hr>
          <div class="container">
          <div class="col-2"><img src="./img/img1.svg" alt="img1" width="100" height="70" ></div>
            <h5>Você sabia que o álcool pode causar vários danos ao corpo humano?</h5>
            <p>Muitas pessoas nem imaginam, mas o álcool causa danos a curto e a longo prazo. 
            Assim que consumido pode causar comprometimento motor, perda de reflexos e confusão,
            chegando a provocar vômitos e pode até levar ao coma. Já a longo prazo o consumo frequente de álcool 
            pode causar danos como doenças do fígado, problemas cardíacos e vasculares e até prejuízos cerebrais.</p>
            <br>
            <div class="col-2"><img src="./img/img2.svg" alt="img2" width="100" height="70" ></div>
            <h5>Glamourização do álcool</h5>
            <p>O que você faz para comemorar seu aniversário? E quando está calor? Seja para celebrar a vida ou tentar esquecer
            de todos os problemas, a resposta que sempre prevalece é: beber álcool. A glamourização do abuso da bebida alcoólica
            é um problema mundial e começa desde cedo. Entre os jovens, essa romantização acontece em rodas de amigos, em propagandas
            e até em lives de cantores famosos.</p>
            <p>Pela desinformação, jovens acreditam que o álcool consiste em apenas uma companhia utilizada em eventos sociais, e que,
            por ser socialmente aceito, seu uso traga riscos pequenos a quem utiliza e a terceiros. Entretanto, com a cultura da 
            naturalização, o uso excessivo dessa substância é um fator preocupante. De acordo com dados oficiais, 3,3 milhões de 
            pessoas morrem a cada ano tendo a bebida alcoólica como fator primário. Mas o dado mais alarmante para a OMS é o 
            crescimento do alcoolismo entre os jovens.</p>
                    
        </div>
    </body>
</html>