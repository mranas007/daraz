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
    <title>Settings - Admin Panel</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../static/stylesheet/style.css">
</head>

<body>

    <div class="sidebar">
        <h2>Admin Panel</h2>
        <a href="dashboard.php">Dashboard</a>
        <a href="manage-products.php">Manage Products</a>
        <a href="manage-users.php">Manage Users</a>
        <a href="manage-cutomers.php">Manage Customer</a>
        <a class="active" href="settings.php">Settings</a>
    </div>

    <div class="top-bar">
        <h1>Settings</h1>
    </div>

    <div class="main-content settings-page">
        <?php
        if (isset($_GET['status'])) {

            if ($_GET['status'] == 'successful') {

                echo '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Operation was successful!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            } elseif ($_GET['status'] == 'failed') {

                echo '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Operation failed. Please try again.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            } elseif ($_GET['status'] == 'interemail') {

                echo '
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    Please inter a correct email address.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            } elseif ($_GET['status'] == 'fillfields') {

                echo '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Please fill your all fields.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            }
        }
        ?>

        <div class="container">
            <h2>Settings</h2>
            <div class="row">
                <!-- General Settings -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Register Admin</h5>
                            <form action="../controllers/register.php" method="POST">
                                <div class="form-group">
                                    <label for="admin-name">Name:</label>
                                    <input type="text" class="form-control" id="admin-name" name="name" placeholder="Name...">
                                </div>
                                <div class="form-group">
                                    <label for="admin-email">Email Address :</label>
                                    <input class="form-control" id="admin-email" name="email" placeholder="Email...">
                                </div>
                                <div class="form-group">
                                    <label for="admin-role">Role :</label>
                                    <select name="role" id="admin-role" class="form-control">
                                        <option value="admin">Admin</option>
                                        <option value="editor">Editor</option>
                                        <option value="viewer">Viewer</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="admin-pass">Password :</label>
                                    <input class="form-control" id="admin-pass" name="password" placeholder="Password...">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Account Settings -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Account Settings</h5>
                            <form>
                                <div class="form-group">
                                    <label for="adminEmail">Admin Email</label>
                                    <input type="email" class="form-control" id="adminEmail" value="admin@example.com">
                                </div>
                                <div class="form-group">
                                    <label for="adminPassword">Change Password</label>
                                    <input type="password" class="form-control" id="adminPassword">
                                </div>
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Website Settings -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Website Settings</h5>
                            <form>
                                <div class="form-group">
                                    <label for="contactEmail">Contact Email</label>
                                    <input type="email" class="form-control" id="contactEmail" value="contact@example.com">
                                </div>
                                <div class="form-group">
                                    <label for="contactPhone">Contact Phone</label>
                                    <input type="text" class="form-control" id="contactPhone" value="+1234567890">
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <textarea class="form-control" id="address" rows="2">1234 Main St, Anytown, USA</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>