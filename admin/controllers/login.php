<?php

require_once '../models/admin-users.php';
require_once '../database/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if ($email !== '' && $password !== '') {

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $databse = new Database;
            $db = $databse->getConnection();
            
            $adminuser = new Admin_users($db);
            $check = $adminuser->login($email, $password);

        } else {

            echo "please inter a correct email address.";
        }
    } else {

        echo "please fill your all fields.";
    }
}
