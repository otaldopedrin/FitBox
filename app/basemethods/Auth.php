<?php
    session_start();

    class Auth{
        public function sessionVerification(){
            if(isset($_SESSION['user'])){
                $this->access($_SESSION['type']);
            }else{
                //header('Location: /my/tccc/');
            }

        }

        public function access($user_type){
            if(isset($_SESSION['user'])){
                if($user_type == 1){
                    header('Location: /my/tccc/403'); 
                }else{
                    $REQUEST_URI = filter_input(INPUT_SERVER, 'REQUEST_URI');
                    $INITE = strpos($REQUEST_URI, '?');
                    if ($INITE):
                        $REQUEST_URI = substr($REQUEST_URI, 0, $INITE);
                    endif;
                    $REQUEST_URI_PASTA = substr($REQUEST_URI, 1);
                    $URL = explode('/', $REQUEST_URI_PASTA);

                    if($URL[2] == 'login' or $URL[2] == 'cadastro' or $URL[2] == 'home' or $URL[2] == ''){
                        header('Location: /my/tccc/system'); 
                    }
                }
            }
        }

        public function createSession($id_user, $user_type){
            $_SESSION['user'] = $id_user;
            $_SESSION['type'] = $user_type;
        }

        public function destroySession(){
            session_destroy();
    
            header("Location: /my/tccc/");
        }
    }