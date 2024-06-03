<?php

class Admin_users
{
    private $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function login($email, $pass)
    {
        $query = "SELECT * FROM `admin_users` WHERE email = '$email'";
        $sqlInserted = $this->conn->prepare($query);
        $sqlInserted->execute();
        $result = $sqlInserted->get_result();

        if ($result->num_rows === 1) {
            $row =  $result->fetch_assoc();

            if (password_verify($pass, $row['password'])) {
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['email'] = $email;
                header("Location: ../views/dashboard.php");
                exit;
            } else {

                header("Location: ../index.php?status=passfailed");
                exit;
            }
        } else {

            header("Location: ../index.php?status=notfound");
            exit;
        }
    }

    public function register($name, $email, $pass, $role = 'admin')
    {
        $query = "INSERT INTO `admin_users`(`name`, `email`, `password`, `role`) VALUES ('$name','$email','$pass','$role')";
        $sqlInserted = $this->conn->prepare($query);
        if ($sqlInserted->execute()) {
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $email;
            return true;
            exit;
        } else {
            return false;
        }
    }

    public function totalUsers()
    {
        $query = "SELECT count(*) AS total FROM `users`";
        $stmt = $this->conn->prepare($query);

        if ($stmt->execute()) {
            $result = $stmt->get_result();
            if ($result) {
                $row = $result->fetch_assoc();
                if (isset($row['total'])) {
                    return (int)$row['total'];
                }
            }
        }

        // Handle the case where the statement execution or fetching the result failed
        return 0; // Or return null, based on how you want to handle the failure case

    }
}
