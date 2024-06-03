<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Admin Panel</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="static/stylesheet/style.css">
    <!-- <style>
        body,
        html {
            height: 100%;
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f7f7f7;
        }

      
    </style> -->
</head>

<body>

    <?php
    if (isset($_GET['status'])) {
        if ($_GET['status'] == 'notfound') {
            echo '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            No user found, please enter a valid email.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>';
        } elseif ($_GET['status'] == 'passfailed') {
            echo '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            Password is incorrect, please enter a valid password.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>';
        }
    }
    ?>

    <div class="login-top-bar">
        <h1>Login for Admin Panel</h1>
    </div>

    <div class="login-container">
        <div class="login-card">
            <h3>Admin Login</h3>
            <form action="controllers/login.php" method="POST">
                <div class="form-group">
                    <label for="adminEmail">Email address</label>
                    <input type="email" class="form-control" id="adminEmail" placeholder="Enter email" name="email">
                </div>
                <div class="form-group">
                    <label for="adminPassword">Password</label>
                    <input type="password" class="form-control" id="adminPassword" placeholder="Password" name="password">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>