<?php
  require_once 'app/basemethods/Auth.php';
  $auth = new Auth;
  $auth->sessionVerification();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro</title>
	<link type="text/css" rel="stylesheet" media="screen" href="public/css/estilo.css" />
    <link rel="stylesheet" href="public/css/bootstrap.css" />
    <style>
.caixaform{
  height:560px;
}
</style>
</head>
<body id="bd1">
  <div class="form-group"> <!--- Cadastro -->
    <div class="container-form">
      <form class="caixaform" action="app/controllers/cadastro.php" method="POST">
          <div class="btn_log">
            <img src=public/imgs/blueicon.png class="icon">
            <h3 align="center">Cadastro</h3>
        <input class = "form-control" name="nome" placeholder="Nome">
        <input class = "form-control" name="sobrenome" placeholder="Sobrenome">
        <input class = "form-control" name="senha" placeholder="Senha">
        <input class = "form-control" name="confirmSenha" placeholder="Comfirme sua senha">
        <input class = "form-control" name="email" placeholder="Email">
        <input class = "form-control" name="cpf" placeholder="CPF">
        <button type="submit" class="btn btn-info" id=logf>Cadastre-se</button> <!--- btn-Cadastro -->
        <p class"message">Já tem uma conta? <a href="login">Entre aqui</a></p>
        </div>
    </form>
    </div>

  </div>
</body>
</html>