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
                    <form id="registerform">
                        <div class="form-group">
                            <label for="email">Phone Number or Email*</label>
                            <input type="email" class="form-control" id="email" placeholder="Please enter your Phone Number or Email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password*</label>
                            <input type="password" class="form-control" id="password" placeholder="Please enter your password">
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