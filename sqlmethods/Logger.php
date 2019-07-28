<?php
    require_once 'User.php';
    
    class Logger{
        public function loggar($email, $senha){
            $seg = new Security;
            $user = new User;

            $email = $seg->validateEmail($email);
            $senha = $seg->sanitizeString($senha);
            $senha = $seg->encryptPass($senha);

            if($email !== false){
                $data = $user->findOne('email', $email);
            }else{
                return 'email errado';
            }

            if($data == false){
                return 'email nao encontrado';
            }else{
                if ($data['email'] == $email && $data['senha'] == $senha) {
                    return 'logado';
                }else{
                    return 'senha errada';
                }
            }
        }

        public function cadastrar(array $data){
            $seg = new Security;
            $user = new User;

            foreach ($data as $key => $value) {
                $dados[$key] = $seg->sanitizeString($value);
            }

            $dados['email'] = $seg->validateEmail($data['email']);
            $dados['senha'] = $seg->sanitizeString($data['senha']);
            $dados['senha'] = $seg->encryptPass($data['senha']);


            if($user->insert($dados)){
                return true;
            }else{
                return false;
            }
        }

    }