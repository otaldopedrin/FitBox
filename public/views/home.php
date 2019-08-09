<?php
  require_once 'app/basemethods/Auth.php';
  $auth = new Auth;
  $auth->sessionVerification();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
    <a href="login">Login</a><br>
    <a href="cadastro">Cadastro</a><br>
    <form enctype="multipart/form-data" action="app/controllers/profilePhoto.php" method="post">
        <input name="foto" type="file">
        <input type="submit" value="top">
    </form>
</body>
</html>