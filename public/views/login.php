<?php
  require_once 'app/basemethods/Auth.php';
  $auth = new Auth;
  $auth->sessionVerification();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Teste front-end</title>
    <link type="text/css" rel="stylesheet" media="screen" href="public/css/estilo.css" />
    <link rel="stylesheet" href="public/css/bootstrap.css" />
  </head>
  <body id="bd1">
  <div class="form-group"> <!--- Login -->
   <div class="container-form">
    <form class="caixaform" action="app/controllers/login.php" method="POST">
        <div class="btn_log">
          <img src=public/imgs/blueicon.png class="icon">
          <h3 align="center">Log In</h3>
    <input class = "form-control" name="email" placeholder="Email">
    <input class = "form-control" name="senha" placeholder="Senha do usuário">
    <button type="submit" class="btn btn-info" id=logf>Entrar</button> <!--- btn-Entrar -->
    <p class"message">Não cadastrado ainda? <a href="cadastro">Cadastre-se</a></p>
    </div>
      </div>
  </form>
  </div>
  </body>
</html>
