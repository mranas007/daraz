<?php

class Product
{
    private $conn;

    // Constructor with database connection
    public function __construct($db)
    {
        $this->conn = $db;
    }

    // Read all products
    public function read()
    {
        $query = "SELECT * FROM `products`";
        if ( $stmt = $this->conn->query($query)) {
            return $stmt;
        } else {
            return false;
        }
    }

    // Creating a product
    public function create($name, $description, $imgurl, $oprice, $dprice)
    {
        $query = "INSERT INTO `products` (name, description, image_url, original_price, discounted_price) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("sssdd", $name, $description, $imgurl, $oprice, $dprice);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
