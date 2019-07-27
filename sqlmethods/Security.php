<?php
    class Security{
        public function validateEmail($email){
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                $senha = filter_var($senha, FILTER_VALIDATE_EMAIL);

                return $email;
            }else{
                return false;
            }
        }

        public function encryptPass($senha){
            $custo = 12;
            $salt = 'Dd7j52lGBbChAHkgD8E8kJ';

            $hash = crypt($senha, '$2a$' . $custo . '$' . $salt . '$');
            
            return $hash;
        }

    }