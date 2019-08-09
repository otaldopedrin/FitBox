<?php
    require_once 'app/basemethods/Auth.php';
    $auth = new Auth;
    $auth->sessionVerification();
?>
<h1>sistema</h1>
<a href="app/controllers/logoff.php">sair</a>