<?php
class Products
{
    private $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function addProduct()
    {
        $query = "INSERT INTO `products` (name, title, description, price,) value ('watch', 'smart watch', 'it's best watch to assest for your healht', '60')";
        $this->conn->query($query);
    }

    public function read()
    {
        $query = "SELECT * FROM `products`";
        $result = $this->conn->query($query);
        if ($result !== false) {
            return $result;
        }
    }

    // total Number of product is compeplated
    public function totalProducts()
    {
        $query = "SELECT count(*) AS totalPro FROM `products`";
        $result = $this->conn->query($query);
        if ($result !== false) {
            $row = $result->fetch_assoc();
            if (isset($row)) {
                return $totalproductVal = $row['totalPro'];
            } else {
                return $totalproductVal = 0;
            }
        }
    }
}
