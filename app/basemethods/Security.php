<?php
    class Security{
        public function validateEmail($email){
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                $email = filter_var($email, FILTER_VALIDATE_EMAIL);

                return $email;
            }else{
                return false;
            }
        }

        public function encryptPass($senha){
            $custo = 12;
            $salt = 'Dd7j52lGBbChAHkgD8E8kJ';
            $senha = filter_var($senha, FILTER_SANITIZE_STRING);

            $hash = crypt($senha, '$2a$' . $custo . '$' . $salt . '$');
            
            return $hash;
        }

        public function sanitizeString($string){
            $string = filter_var($string, FILTER_SANITIZE_STRING);
            
            return $string;
        }

        public function validateTable($tabela){

        }
    }