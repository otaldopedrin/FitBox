<?php
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


    $a = new External;
    $b = $a->export(1);
    print_r($b);