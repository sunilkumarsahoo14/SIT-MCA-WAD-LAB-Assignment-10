<!-- Name: Sunil Kumar Sahoo -->
<!-- Sic: 23MMCI38 -->
<!-- Roll: 16 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authenticatication System</title>
    <link href="./bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            max-width: 500px; 
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <h2 class="text-center mb-5 text-primary">Registration Form</h2>
        <form action="register_form_data.php" method="post">
        <div class="mb-3">
                <label class="form-label fs-5" for="name">Name:</label>
                <input class="form-control" type="text" name="name" id="name" required>
            </div>
            <div class="mb-3">
                <label class="form-label fs-5" for="mobile">Mobile:</label>
                <input class="form-control" type="text" name="mobile" id="mobile" required>
            </div>
            <div class="mb-3">
                <label class="form-label fs-5" for="email">Email:</label>
                <input class="form-control" type="email" name="email" id="email" required>
            </div>
            <div class="mb-3">
                <label class="form-label fs-5" for="password">Password:</label>
                <input class="form-control" type="password" name="password" id="password" required>
            </div>
            <div class="text-center">
                <input class="btn btn-primary mt-3" type="submit" name="submit" id="submit" value="Register">
            </div>
        </form>
        <a style="display: block; text-align: center;" href="login_form.php">Already Have An Account. Login Here.</a>
    </div>
<script src="./bootstrap-5.3.3-dist/js/bootstrap.bundle.js"></script>
</body>
</html>