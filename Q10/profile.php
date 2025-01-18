<!-- Name: Sunil Kumar Sahoo -->
<!-- Sic: 23MMCI38 -->
<!-- Roll: 16 -->
<?php
session_start();
if (isset($_SESSION["name"])) {
    $usr_name = $_SESSION["name"];
} else {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="./bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1 class="text-center my-5 text-primary">User's Profile</h1>
    <div class="container text-center d-flex justify-content-center align-items-center">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title mb-3"> <?php echo $usr_name?> </h5>
                <div class="container form-container mb-3">
                    <form action="profile_data.php" method="post">
                        <input class="form-control" type="password" name="password" id="password" placeholder="Set A Strong Password">
                        <input class="btn btn-primary mt-3" type="submit" name="submit" id="submit" value="Update">
                    </form>
                </div>
                <a href="login_form.php" class="card-link">Logout</a>
            </div>
        </div>
    </div>
    <script src="./bootstrap-5.3.3-dist/js/bootstrap.bundle.js"></script>
</body>
</html>