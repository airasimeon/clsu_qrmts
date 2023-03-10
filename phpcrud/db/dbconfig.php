<?php
    class myDB
    {
        private $servername= "localhost";
        private $username= "root";
        private $password= "";
        private $dbname= "oop_crud";
        public $res;

        public function __construct()
        {
            $this-> mysqli = new mysqli($this->servername,$this->username, $this->password, $this-> dbname);
        }
        
        public function insert($table, $data)
        {
            $table_columns = implode(',',array_keys($data));
            $table_value = implode("','",$data);

            $sql = "INSERT INTO $table($table_columns) VALUES ('$table_value')";

            $this-> res = $this-> mysqli-> query($sql);
        }

        public function select($table, $row, $where)
        {
            if($where!=null)
            {
                $sql = "SELECT $row FROM $table WHERE id = $where";
            }
            else
            {
                $sql = "SELECT $row FROM $table";
            }

            $this-> res = $this->mysqli->query($sql);
        }

        public function update($name, $email, $cys, $id)
        {
            $sql = "UPDATE tbl_students SET full_name='$name', email='$email', cys='$cys' WHERE id=$id";
            $this-> res = $this-> mysqli-> query($sql);
        }

        public function delete($table, $data)
        {
            $id = $data;

            $sql = "DELETE FROM $table WHERE id=$id";

            $this-> res = $this-> mysqli-> query($sql);
        }

        public function __destruct()
        {
            $this-> mysqli->close();
        } 
    }

?>