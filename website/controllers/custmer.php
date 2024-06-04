<?php

require_once '../database/db.php';
require_once '../models/customer.model.php';

$database = new Database;
$db = $database->getConnection();
session_start();
$cumtomer = new Customer($db);
$name = $cumtomer->read($_SESSION['email']);