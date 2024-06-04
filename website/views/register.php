<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daraz Login Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../static/stylesheets/main.css">
</head>

<body>

    <div class="container register-container">
        <div>
            <div class="row1">
                <h2 class="form-title">Welcome to Daraz! Please Register.</h2>
                <p id="regis-p">Already have an Account? <a href="#" class="form-link">login </a>here.</p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form action="../controllers/register.php" method="POST" id="registerform">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" name="address" class="form-control" id="address" placeholder="Address" required>
                        </div>
                        <div class="form-group">
                            <label for="phonenumber">Phone Number:</label>
                            <input type="tel" name="phonenumber" class="form-control" id="phonenumber" placeholder="Phone Number" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="password" required>
                        </div>
                        <div class="form-group">
                            <label for="cpassword">Confirm Password:</label>
                            <input type="password" name="cpassword" class="form-control" id="cpassword" placeholder="Confirm password" required>
                        </div>
                        <button type="submit" class="btn login-btn mb-2">LOGIN</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>