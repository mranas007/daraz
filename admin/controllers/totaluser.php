<?php
require_once '../models/admin-users.php';
require_once '../database/db.php';

$database = new Database;
$db = $database->getConnection();

$users = new Admin_users($db);
$totaluser = $users->totalUsers();