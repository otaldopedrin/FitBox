<?php
    class External{
        public function import($arquivo){
            $open = fopen($arquivo, 'r');

            while(($dados = fgetcsv($open, 1000, ";")) !== FALSE){
                print_r($dados);
            }
            
            fclose($open);
        }
    }