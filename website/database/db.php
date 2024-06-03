<?php
class Database
{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "daraz_store";
    public $conn;

    public function getConnection()
    {
        $this->conn = null;
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->database);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);

        }
        return $this->conn;
    }
}