<?php

class DBConfig {
    private $host = 'localhost:3306';
    private $username = 'root';
    private $password = '';
    private $database = 'liga_basketbolli';


    function startConnection() {
        try {
            $conn = new PDO("mysql:host=$this->host;dbname=$this->database", $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo "Conenction Failed" . $e->getMessage();
            return null;
        }
    }
}
?>