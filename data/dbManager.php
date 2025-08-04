<?php


    class dbManager{
        private $host = "localhost";
        private $username = "root";
        private $password = "";
        private $database = "aie_tv";
        private $connection;

        public function __construct(){
            $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
            if ($this->connection->connect_error) {
                die("Connection failed: " . $this->connection->connect_error);
            }
        }

        public function getConnection(){
            return $this->connection;
        }

        public function endConnection(){
            $this->connection->close();
        }

        public function createTable($tableName, $columns){
            
            $query = "CREATE TABLE IF NOT EXISTS $tableName ($columns)";
            return $this->connection->query($query);
        }

        public function selectTable($tableName){
            $query = "SELECT * FROM $tableName";
            $result = $this->connection->query($query);
            if ($result) {
                return $result->fetch_all(MYSQLI_ASSOC);
            } else {
                return false;
            }
        }

        public function selectWhere($tableName, $condition){
            $query = "SELECT * FROM $tableName WHERE $condition";
            $result = $this->connection->query($query);
            if ($result) {
                return $result->fetch_all(MYSQLI_ASSOC);
            } else {
                return false;
            }
        }

        public function insertIntoTable($tableName, $data){
            $columns = implode(", ", array_keys($data));
            $values = implode("', '", array_values($data));
            $query = "INSERT INTO $tableName ($columns) VALUES ('$values')";
            return $this->connection->query($query);
        }

        public function updateTable($tableName, $data, $condition){
            $set = "";
            foreach ($data as $key => $value) {
                $set .= "$key = '$value', ";
            }
            $set = rtrim($set, ", ");
            $query = "UPDATE $tableName SET $set WHERE $condition";
            return $this->connection->query($query);
        }

        public function deleteFromTable($tableName, $condition){
            $query = "DELETE FROM $tableName WHERE $condition";
            return $this->connection->query($query);
        }

        public function responseTable($status, $message, $data = null){
            return json_encode([
                "status" => $status,
                "message" => $message,
                "data" => $data
            ]);
        }
    }









    











?>