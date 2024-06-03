<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: ../../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Product - Admin Panel</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../static/stylesheet/style.css">
</head>

<body>

    <div class="sidebar">
        <h2>Admin Panel</h2>
        <a href="../dashboard.php">Dashboard</a>
        <a class="active" href="../manage-products.php">Manage Products</a>
        <a href="../manage-users.php">Manage Users</a>
        <a href="../settings.php">Settings</a>
    </div>

    <div class="top-bar">
        <h1>Delete Product</h1>
    </div>

    <div class="main-content delete-product-page">
        <div class="container">
            <h2>Delete Product</h2>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Are you sure you want to delete this product?</h5>
                            <p>Product ID: PRD1234</p>
                            <p>Product Name: Product 1</p>
                            <form>
                                <button type="submit" class="btn btn-danger">Confirm Delete</button>
                                <a href="manage-products.html" class="btn btn-secondary">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>