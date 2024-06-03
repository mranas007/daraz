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
    <title>Edit Product - Admin Panel</title>
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
        <h1>Edit Product</h1>
    </div>

    <div class="main-content edit-product-page">
        <div class="container">
            <h2>Edit Product</h2>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Product Details</h5>
                            <form>
                                <div class="form-group">
                                    <label for="productId">Product ID</label>
                                    <input type="text" class="form-control" id="productId" value="PRD1234" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="productName">Product Name</label>
                                    <input type="text" class="form-control" id="productName" value="Product 1">
                                </div>
                                <div class="form-group">
                                    <label for="productCategory">Category</label>
                                    <select class="form-control" id="productCategory">
                                        <option>Category 1</option>
                                        <option>Category 2</option>
                                        <option>Category 3</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="productPrice">Price</label>
                                    <input type="number" class="form-control" id="productPrice" value="500">
                                </div>
                                <div class="form-group">
                                    <label for="productStock">Stock</label>
                                    <input type="number" class="form-control" id="productStock" value="20">
                                </div>
                                <div class="form-group">
                                    <label for="productDescription">Description</label>
                                    <textarea class="form-control" id="productDescription" rows="3">Description of Product 1</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Save Changes</button>
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