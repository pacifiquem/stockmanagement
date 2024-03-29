<?php

    class Db_Connection {
        private $host;
        private $user;
        private $password;
        private $database;

        function __construct($host, $user, $password, $database) {
            $this->host = $host;
            $this->user = $user;
            $this->password = $password;
            $this->database = $database;
        }

        public function connection() {
            return $this->conn = new mysqli($this->host, $this->user, $this->password,$this->database);
        }
    }

    $conn = new Db_Connection('localhost', 'root', 'P@12p98p', 'stockmanagementsystem');
    $dbConnection = $conn->connection();

    if(!$dbConnection) {
        exit('You have a problem with database');
    }
?>