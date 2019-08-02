<?php
    require_once "../admmethods/Logger.php";

    $logger = new Logger;
    $data = $_POST;

    $response = $logger->loggar($data['email'], $data['senha']);
    echo($response);