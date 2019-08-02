<?php
    require_once "../admmethods/Logger.php";

    $logger = new Logger;
    $data = $_POST;

    $response = $logger->cadastrar($data);
    echo($response);