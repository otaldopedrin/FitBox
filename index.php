<?php
    require_once "basemethods/External.php";
    require_once "sqlmethods/Logger.php";

    $data = [
        'nome' => 'Josdadsaasdo',
        'sobrenome' => 'Ffadsddfaea',
        'email' => '2@w2e',
        'senha' => '123',
        'cpf' => '12345678910',
    ];

    $data2 = [
        'nome' => 'gf',
        'id' => '1'
    ];

    $login = new Logger;
    $a = $login->cadastrar($data);
    print_r($a);