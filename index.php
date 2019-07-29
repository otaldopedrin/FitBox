<?php
    require_once "basemethods/External.php";
    require_once "sqlmethods/Logger.php";

    $data = [
        'nome' => 'Josdadsaasdo',
        'sobrenome' => 'Ffadsddfaea',
        'email' => 'asddsa@gskma.com',
        'senha' => '123654563234',
        'cpf' => '12345678910',
    ];

    $data2 = [
        'nome' => 'gf',
        'id' => '1'
    ];

    $login = new Logger;
    $a = $login->cadastrar($data);
    //$a = $login->loggar($data['email'], $data['senha']);
    print_r($a);