<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro</title>
	<link type="text/css" rel="stylesheet" media="screen" href="../css/estilo.css" />
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <style>
.caixaform{
  height:560px;
}
</style>
</head>
<body id="bd1">
  <div class="form-group"> <!--- Cadastro -->
    <div class="container-form">
      <form class="caixaform" action="../../app/controllers/cadastro.php" method="POST">
          <div class="btn_log">
            <img src=../imgs/blueicon.png class="icon">
            <h3 align="center">Cadastro</h3>
        <input class = "form-control" placeholder="Nome Completo">
        <input class = "form-control" placeholder="Senha">
        <input class = "form-control" placeholder="Confirmar a senha">
        <input class = "form-control" placeholder="Email">
        <input class = "form-control" placeholder="CPF">
        <button type="submit" class="btn btn-info" id=logf>Cadastre-se</button> <!--- btn-Cadastro -->
        <p class"message">Já tem uma conta? <a href="login.php">Entre aqui</a></p>
        </div>
    </form>
    </div>

  </div>
</body>
</html>