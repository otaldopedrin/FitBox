<?php
    require_once "Model.php";

    class Product extends Model{
        protected $table = 'products';

        public function insert(array $data, $id_tabela, $type){
            $sql = "insert into ".$this->table." (nome, cod, quant, preco, id_tabela, tipo) values(:nome, :cod, :quant, :preco, ".$id_tabela.", ".$type.")";

            $insert = $this->connection->prepare($sql);

            foreach ($data as $key => $value) {
                $insert->bindValue($key, $value);
            }

            return $insert->execute();
        }

        public function insertImport(array $data, $id_tabela, $type){
            $sql = "insert into ".$this->table." (nome, cod, quant, preco, id_tabela, tipo) values(:0, :1, :2, :3, ".$id_tabela.", ".$type.")";

            $insert = $this->connection->prepare($sql);

            foreach ($data as $key => $value) {
                $insert->bindValue(":".$key, $value);
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