<?php
    require_once '../sqlmethods/User.php';
    require_once '../basemethods/Auth.php';
    
    class Logger{
        public function loggar($email, $senha){
            $auth = new Auth;
            $seg = new Security;
            $user = new User;
            
            $email = $seg->validateEmail($email);
            $senha = $seg->sanitizeString($senha);
            $senha = $seg->encryptPass($senha);

            if($email !== false){
                $data = $user->findOne('email', $email);

                if($data == false){
                    header("Location: ".$_SERVER['HTTP_REFERER']."?error");
                }else{
                    if ($data['email'] == $email && $data['senha'] == $senha) {
                        $auth->createSession($data['id'], $data['type']);
                        header("Location: /my/tccc/system");
                    }else{
                        header("Location: ".$_SERVER['HTTP_REFERER']."?error");
                    }
                }

            }else{
                header("Location: ".$_SERVER['HTTP_REFERER']."?error");
            }
        }

        public function cadastrar(array $data){
            $seg = new Security;
            $user = new User;

            foreach ($data as $key => $value) {
                $dados[$key] = $seg->sanitizeString($value);
            }

            $dados['email'] = $seg->validateEmail($data['email']);
            $dados['senha'] = $seg->encryptPass($data['senha']);

            $email = $user->findOne('email', $dados['email']);

            if($email == false){
                if($user->insert($dados)){
                    $this->loggar($dados['email'], $dados['senha']);
                }else{
                    return 'nao foi possivel cadastrar';
                }
            }else{
                return 'email já existe';
            }
        }

    }