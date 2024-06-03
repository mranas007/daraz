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
    <title>Admin Dashboard - Daraz Clone</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../static/stylesheet/style.css">
</head>

<body>

    <div class="sidebar">
        <h2>Admin Panel</h2>
        <a class="active" href="dashboard.php">Dashboard</a>
        <a href="manage-products.php">Manage Products</a>
        <a href="manage-users.php">Manage Users</a>
        <a href="settings.php">Settings</a>
    </div>

    <div class="top-bar">
        <h1>Dashboard</h1>
    </div>

    <div class="main-content">
        <div class="container">
            <!-- Dashboard Section -->
            <h2 id="dashboard">Dashboard</h2>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="card text-white bg-primary">
                        <div class="card-body">
                            <h5 class="card-title">Total Sales</h5>
                            <p class="card-text">RS: 150,000 <?php //require '../controllers/totalsales.php'; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card text-white bg-success">
                        <div class="card-body">
                            <h5 class="card-title">Total Orders</h5>
                            <p class="card-text">120</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card text-white bg-warning">
                        <div class="card-body">
                            <h5 class="card-title">Total Users</h5>
                            <p class="card-text"><?php require '../controllers/totaluser.php'; echo $totaluser; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card text-white bg-danger">
                        <div class="card-body">
                            <h5 class="card-title">Total Products</h5>
                            <p class="card-text"><?php require '../controllers/totalproducts.php';  echo $totalproductVal; ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chart Area -->
            <!-- <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Sales Overview</h5>
                             Placeholder for Chart 
                            <div id="chart-area" style="height: 300px;">
                                <canvas id="salesChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- Recent Orders Table -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Recent Orders</h5>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Order ID</th>
                                            <th>Customer</th>
                                            <th>Status</th>
                                            <th>Total</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>OD1234</td>
                                            <td>John Doe</td>
                                            <td><span class="badge badge-success">Completed</span></td>
                                            <td>RS: 2000</td>
                                            <td>2024-05-25</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>OD1235</td>
                                            <td>Jane Doe</td>
                                            <td><span class="badge badge-warning">Pending</span></td>
                                            <td>RS: 1500</td>
                                            <td>2024-05-26</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>OD1236</td>
                                            <td>Jim Beam</td>
                                            <td><span class="badge badge-danger">Cancelled</span></td>
                                            <td>RS: 1800</td>
                                            <td>2024-05-27</td>
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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- <script>
        // Placeholder for chart.js code
        var ctx = document.getElementById('salesChart').getContext('2d');
        var salesChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June'],
                datasets: [{
                    label: 'Sales',
                    data: [12000, 15000, 17000, 14000, 18000, 19000],
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    x: {
                        beginAtZero: true
                    },
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
     </script> -->
</body>

</html>