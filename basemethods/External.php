<?php
    require_once "./sqlmethods/Table.php";
    require_once "./sqlmethods/Product.php";

    class External{
        public function import($arquivo, $id_tabela){
            $open = fopen($arquivo, 'r');
            $produto = new Product;
            $x = 0;
            
            while(($dados = fgetcsv($open, 1000, ";")) !== FALSE){
                $data[$x] = $dados;
                
                if ($x > 0) {
                    $produto->insertImport($data[$x], $id_tabela, 1);
                }
                $x++;
            }
            
            fclose($open);
            return $data;
        }
    }