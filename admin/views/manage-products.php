<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: ../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Products - Admin Panel</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../static/stylesheet/style.css">
</head>

<body>

    <div class="sidebar">
        <h2>Admin Panel</h2>
        <a href="dashboard.php">Dashboard</a>
        <a class="active" href="manage-products.php">Manage Products</a>
        <a href="manage-users.php">Manage Users</a>
        <a href="manage-cutomers.php">Manage Customer</a>
        <a href="settings.php">Settings</a>
    </div>

    <div class="top-bar">
        <h1>Manage Products</h1>
    </div>

    <div class="main-content manage-products-page">
        <div class="container">
            <h2>Manage Products</h2>
            <div class="row">
                <div class="col-lg-12">
                    <button class="btn btn-primary mb-3">Add New Product</button>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Product List</h5>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr class="table-head">
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>original_price</th>
                                            <th>discounted_price</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        require_once '../controllers/manage-products.php';
                                        if ($proObj) {
                                            if ($proObj) {
                                                $productCount = 1;
                                                while ($row = $proObj->fetch_assoc()) {
                                                    echo '<tr>
                                                    <td>' . $productCount . '</td>
                                                    <td>' . $row['name'] . '</td>
                                                    <td>$' . $row['original_price'] . '</td>
                                                    <td>$' . $row['discounted_price'] . '</td>
                                                    <td>
                                                        <a href="manage-products/edit-product.php?id=' . $row['id'] . '" class="btn btn-warning btn-sm me-2">Edit</a>
                                                        <a href="manage-products/delete-product.php?id=' . $row['id'] . '" class="btn btn-danger btn-sm">Delete</a>
                                                    </td>
                                                </tr>';
                                                $productCount++;
                                                }
                                            }
                                        }
                                        ?>

                                    </tbody>
                                </table>
                            </div>
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