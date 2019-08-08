<?php
    $REQUEST_URI = filter_input(INPUT_SERVER, 'REQUEST_URI');
    $INITE = strpos($REQUEST_URI, '?');
    if ($INITE):
        $REQUEST_URI = substr($REQUEST_URI, 0, $INITE);
    endif;
    $REQUEST_URI_PASTA = substr($REQUEST_URI, 1);
    $URL = explode('/', $REQUEST_URI_PASTA);
    $URL[2] = ($URL[2] != '' ? $URL[2] : 'home');
     
    if (file_exists('public/views/' . $URL[2] . '.php')):
        require('public/views/' . $URL[2] . '.php');
    elseif (is_dir('public/views/' . $URL[2])):
        if (isset($URL[3]) && file_exists('public/views/' . $URL[2] . '/' . $URL[2] . '.php')):
            require('public/views/' . $URL[3] . '/' . $URL[3] . '.php');
        else:
            require('public/views/404.php');
        endif;
    else:
        require('public/views/404.php');
    endif;