<?php
    require_once "sqlmethods/Table.php";
    require_once "sqlmethods/Security.php";
    require_once "basemethods/External.php";

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

    $id_user = 1;

    $a = new Table;
    $a->update($data2);