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
            if ($tabela['type'] == "application/vnd.ms-excel") {
                return true;
            }else{
                return false;
            }
        }

        public function formatCpf($cpf){
            $cpf = explode('.', $cpf);
            $cpf[2] = explode('-', $cpf[2]);
            $cpf = $cpf[0].$cpf[1].$cpf[2][0].$cpf[2][1];

            return $cpf;
        }

        public function validateCpf($cpf){
            $cpf = $this->formatCpf($cpf);
            $val1 = 0;
            $val2 = 0;

            $y = 10;
            $x = -1;
            while ($x != 8) {
                $x++;
                $val1 = $val1+$cpf[$x]*($y);
                $y = $y-1;
            }

            $val1 = $val1%11;

            if($val1 >= 2){
                $prim = 11-$val1;
            }else{
                $prim = 0;
            }

            $y = 11;
            $x = -1;
            while($x != 8){
                $x++;
                $val2 = $val2+$cpf[$x]*($y);
                $y = $y-1;
            }

            $val2 = $val2+($prim*2);
            $val2 = $val2%11;

            if($val2 >= 2){
                $segun = 11-$val2;
            }else{
                $segun = 0;
            }
            
            if ($prim == $cpf[9] and $segun == $cpf[10]) {
                return true;
            }else {
                return false;
            }
        }
    }