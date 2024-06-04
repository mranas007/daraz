<?php
require_once '../database/db.php';
require_once '../models/customer.model.php';

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $address = $_POST['address'] ?? '';
    $phonenumber = $_POST['phonenumber'] ?? '';
    $password = $_POST['password'] ?? '';
    $cpassword = $_POST['cpassword'] ?? '';

    if (!empty($name) && !empty($email) && !empty($address) && !empty($phonenumber) && !empty($password) && !empty($cpassword)) {
        if ($password === $cpassword) {
            $hashed_password = password_hash($password, PASSWORD_BCRYPT);
            $database = new Database();
            $db = $database->getConnection();

            $customer = new Customer($db);
            $isRegistered = $customer->register($name, $email, $address, $phonenumber, $hashed_password);

            if ($isRegistered) {
                session_start();
                $_SESSION['isloggedin'] = true;
                $_SESSION['email'] = $email;
                header("Location: ../views/main.php");
                exit;
            } else {
                header("Location: ../views/register.php?status=error");
                exit;
            }
        } else {
            header("Location: ../views/register.php?status=passunmatch");
            exit;
        }
    } else {
        header("Location: ../views/register.php?status=emptyfields");
        exit;
    }
}