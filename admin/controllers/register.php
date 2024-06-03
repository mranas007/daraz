<?php
require_once '../models/admin-users.php';
require_once '../database/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if ($name !== '' && $email !== '' && $password !== '') {

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
            $databse = new Database;
            $db = $databse->getConnection();

            $adminuser = new Admin_users($db);
            $check = $adminuser->register($name, $email, $hashedPassword);

            if ($check) {

                header("Location: ../views/settings.php?status=successful");
            } else {
                
                header("Location: ../views/settings.php?status=failed");
            }
        } else {
            
            header("Location: ../views/settings.php?status=interemail");
        }
    } else {
        
        header("Location: ../views/settings.php?status=fillfields");
    }
}
