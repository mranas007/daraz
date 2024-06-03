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
    <title>Manage Users - Admin Panel</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../static/stylesheet/style.css">
</head>

<body>

    <div class="sidebar">
        <h2>Admin Panel</h2>
        <a href="dashboard.php">Dashboard</a>
        <a href="manage-products.php">Manage Products</a>
        <a class="active" href="manage-users.php">Manage Users</a>
        <a href="settings.php">Settings</a>
    </div>

    <div class="top-bar">
        <h1>Manage Users</h1>
    </div>

    <div class="main-content manage-users-page">
        <div class="container">
            <h2>Manage Users</h2>
            <div class="row">
                <div class="col-lg-12">
                    <button class="btn btn-primary mb-3">Add New User</button>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">User List</h5>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>User ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>USR1234</td>
                                            <td>John Doe</td>
                                            <td>john@example.com</td>
                                            <td>Admin</td>
                                            <td>
                                                <button class="btn btn-warning btn-sm">Edit</button>
                                                <button class="btn btn-danger btn-sm">Delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>USR1235</td>
                                            <td>Jane Smith</td>
                                            <td>jane@example.com</td>
                                            <td>User</td>
                                            <td>
                                                <button class="btn btn-warning btn-sm">Edit</button>
                                                <button class="btn btn-danger btn-sm">Delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>USR1236</td>
                                            <td>Mike Johnson</td>
                                            <td>mike@example.com</td>
                                            <td>User</td>
                                            <td>
                                                <button class="btn btn-warning btn-sm">Edit</button>
                                                <button class="btn btn-danger btn-sm">Delete</button>
                                            </td>
                                        </tr>
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