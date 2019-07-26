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
        }


        public function export($id_tabela){
            $produto = new Product;
            $produtos = $produto->find('id_tabela', 1);

            $tabela = fopen('tabela.csv', 'w');
            fwrite($tabela, "nome;cod;quant;preco\r\n");

            foreach ($produtos as $key => $value) {
                fwrite($tabela, $value['nome'].";".$value['cod'].";".$value['quant'].";".$value['preco']."\r\n");
            }

            $arquivo = 'tabela.csv';
             
            header("Content-Length: ".filesize($arquivo)); 
            header("Content-Disposition: attachment; filename=".basename($arquivo)); 

            readfile($arquivo);
            exit;
        }
    }