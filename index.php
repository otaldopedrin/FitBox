<?php
    require_once "sqlmethods/User.php";

    $data = [
        'nome' => 'Josdadsaasdo',
        'sobrenome' => 'Ffadsddfaea',
        'email' => 'osdaddafgdfgsksok@gskma.com',
        'senha' => '1231gfsgsdf23',
        'cpf' => '12345678910',
    ];

    $user = new User;
    $a = $user->insert($data);