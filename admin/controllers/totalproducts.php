<?php
require_once '../database/db.php';
require_once '../models/product.php';

$database = new Database;
$db = $database->getConnection();

$products = new Products($db);
$totalproductVal = $products->totalProducts();