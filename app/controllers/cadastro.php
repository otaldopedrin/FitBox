<?php
    require_once "../admmethods/Logger.php";

    $logger = new Logger;
    $data = $_POST;

    if ($data['senha'] == $data['confirmSenha']) {
        unset($data['confirmSenha']);
        $response = $logger->cadastrar($data);

        if($response == true){
            $logger->loggar($_POST['email'], $_POST['senha']);
        }
    }else{
        echo 'error';
    }