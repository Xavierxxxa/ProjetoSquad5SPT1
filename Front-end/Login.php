<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./Css/style.css">

    <title>Login Conscire</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body{ 
            background:#F2A007;
        }
        .row{
            background:#fff;
            border-radius: 30px;
        }

        img{
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
        }
        .btn1{
            border:none;
            outline:none;
            height: 50px;
            width: 100%;
            background-color: #FF0C42;
            color: #fff;
            border-radius: 4px;
            font-weight: bold;
    
        }

        .btn1:hover{
            background:#F2A007;
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
<section class="form my-4 mx-5">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-5">
                <img src="imagens/login.png" class="img-fluid" alt="">  
            </div>
            <div class="col-lg-7 px-5 pt-5">
                <img id="logo" src="./imagens/LOOOGO 1.png" alt="Conscire">
                <h5 class= "my-3 p-2">Entre na sua conta</h5>
                
                <form action='../Back-end/php/login_usuario.php' method='POST'>
                    <div class="form-row">
                        <div class="col-lg-7">
                            <input type="email" name="email" placeholder="Seu email aqui" class="form-control my-3 p-4">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-7">
                            <input type="password" name="senha" placeholder="********" class="form-control my-3 p-4">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-7">
                            <button type="submit" class="btn1 mt-3 mb-5">Login</button>
                        </div>
                    </div>
                    <p>Não possui uma conta?<br> <a href="./cadastro.php"> Registre-se aqui</a></p>
                    <p><a href="./index.html"> Voltar para Conscire</a></p>
                </form>
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