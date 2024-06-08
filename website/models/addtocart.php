<?php
class Cart
{
    private $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function productId($id)
    {
        $query = "SELECT * FROM `products` WHERE `id` = $id";
        $result = mysqli_query($this->conn, $query);
        return $result;
    }
}
