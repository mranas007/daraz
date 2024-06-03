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

    <div class="container login-container">
        <div>
            <div class="row1">
                <h2 class="form-title">Welcome to Daraz! Please login.</h2>
                <p id="regis-p">New member? <a href="#" class="form-link">Register </a>here.</p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <form id="loginform">
                        <div class="form-group">
                            <label for="email">Phone Number or Email*</label>
                            <input type="email" class="form-control" id="email" placeholder="Please enter your Phone Number or Email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password*</label>
                            <input type="password" class="form-control" id="password" placeholder="Please enter your password">
                        </div>
                        <div class="form-group text-right">
                            <a href="#" class="form-link">Reset Your Password</a>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 right-side">
                    <button type="submit" class="btn login-btn mb-2">LOGIN</button>
                    <p class="text-center mb-2">Or, login with</p>
                    <button type="button" class="btn social-btn facebook mb-2">Facebook</button>
                    <button type="button" class="btn social-btn google">Google</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>