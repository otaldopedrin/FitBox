<?php
    require_once '../basemethods/Auth.php';
    
    $auth = new Auth;
    $auth->destroySession();