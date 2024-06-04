<?php

class Customer
{
    private $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function register($name, $email, $address, $phone, $password)
    {
        $query = "INSERT INTO `customers` (`name`, `email`, `address`, `phone`, `password`) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        if ($stmt) {

            $stmt->bind_param('sssis', $name, $email, $address, $phone, $hashed_password);
            if ($stmt->execute()) {
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['email'] = $email;
                return true;
            }
            $stmt->close();
        } else {

            echo "Error preparing statement: " . $this->conn->error;
        }
    }

    public function read($customer)
    {
        if (!empty($customer)) {
            $query = "SELECT * FROM `customers` where email = '$customer'";
            return $this->conn->query($query);
        }
    }
}
