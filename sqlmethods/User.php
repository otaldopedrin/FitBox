<?php
    require "Model.php";

    class User extends Model{
        protected $table = 'users';

        public function insert(array $data){
            $sql = "insert into ".$this->table." (nome, sobrenome, email, senha, cpf) values(:nome, :sobrenome, :email, :senha, :cpf)";

            $insert = $this->connection->prepare($sql);

            foreach ($data as $key => $value) {
                $insert->bindValue($key, $value);
            }

            return $insert->execute();
        }

        public function update(array $data){
            $sql = "update ".$this->table." set nome = :nome, sobrenome = :sobrenome, email = :email, senha = :senha, cpf = :cpf where id = :id";

            $update = $this->connection->prepare($sql);

            foreach ($data as $key => $value) {
                $update->bindValue($key, $value);
            }

            $update->execute();
            
            return $update->rowCount();
        }
    }