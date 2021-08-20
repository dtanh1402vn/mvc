<?php

    namespace MVC\Core;

    use MVC\Config\Database;
    use MVC\Core\ResourceModelInterface;

    class ResourceModel implements ResourceModelInterface
    {
        private $table;
        private $id;
        private $model;
        
        public function _init($table, $id, $model)
        {
            $this->table = $table;
            $this->id = $id;
            $this->model = $model;
        }

        public function getAll() 
        {
            $sql = "SELECT * FROM $this->table";
            $req = Database::getBdd()->prepare($sql);
            $req->execute();
            return ($req->fetchAll(\PDO::FETCH_CLASS, get_class($this->model)));
        }

        public function get($id)
        {
            $sql = "SELECT * FROM $this->table WHERE $this->id = $id";
            $req = Database::getBdd()->prepare($sql);
            $req->execute();
            return ($req->fetchObject(get_class($this->model)));
        }

        public function save($model)
        {
            // $arrayModel = array (
            //     "id" => "null",
            //     "title" => "This is title",
            //     "name" => "This is name"
            // );

            // $id = $arrayModel[$this->id];

            // $stringModel = "title = :title, name = :name";

            $arrayModel = $model->getProperties();
            $arrKey = [];
            foreach($arrayModel as $key=>$value)
            {
                array_push($arrKey, $key.' = :'.$key);
            }

            $stringModel = implode(', ', $arrKey);
            if ($model->getId() == null) {
                $sql = "INSERT INTO $this->table SET $stringModel";
            } else {
                $sql = "UPDATE $this->table SET $stringModel WHERE $this->id = :id";
            }

            $req = Database::getBdd()->prepare($sql);
            return $req->execute($arrayModel);
        }

        public function delete($id)
        {
            $sql = "DELETE FROM $this->table WHERE $this->id = $id";
            $req = Database::getBdd()->prepare($sql);
            return $req->execute();
        }
    }

?>