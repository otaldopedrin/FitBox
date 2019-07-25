<?php
    require_once "Model.php";

    class Table extends Model{
        protected $table = 'tables';

        public function insert(array $data, $id_user){
            $sql = "insert into ".$this->table." (nome, id_user) values(:nome, ".$id_user.")";

            $insert = $this->connection->prepare($sql);

            foreach ($data as $key => $value) {
                $insert->bindValue($key, $value);
            }

            return $insert->execute();
        }

        public function update(array $data){
            $sql = "update ".$this->table." set nome = :nome where id = :id";

            $update = $this->connection->prepare($sql);

            foreach ($data as $key => $value) {
                $update->bindValue($key, $value);
            }

            $update->execute();
            
            return $update->rowCount();
        }
    }