<?php
    require_once "../admmethods/Logger.php";

    $logger = new Logger;
    $data = $_POST;

    $response = $logger->cadastrar($data);

    if($response == true){
        $logger->loggar($_POST['email'], $_POST['senha']);
    }