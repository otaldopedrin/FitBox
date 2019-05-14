<?php 
    class Dbconfig{

        public function conect(){
            $server = 'localhost';
            $dbUser = 'root';
            $dbPass = '';
            $dbName = 'test';
        
            try {
                $db = new PDO('mysql:host='.$server.';dbname='.$dbName, $dbUser, $dbPass);
            } catch (PDOException $e) {
                echo "ERRO GERADO" . $e->getMessage();
            }
            return $db;
        }        
    }

    $a = new Dbconfig;
    $c = $a->conect();