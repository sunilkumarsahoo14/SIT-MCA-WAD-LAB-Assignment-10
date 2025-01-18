<!-- Name: Sunil Kumar Sahoo -->
<!-- Sic: 23MMCI38 -->
<!-- Roll: 16 -->
<?php
if (!isset($_COOKIE['name'], $_COOKIE['fname'], $_COOKIE['dob'], $_COOKIE['mobile'], $_COOKIE['email'], $_COOKIE['address'])) {
    header('Location: form.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Your Details</title>
    <link href="./bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            max-width: 500px; 
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <h2 class="text-center mb-4">Verify Your Details</h2>
        
        <div class="mb-3">
            <strong>Name:</strong> <?php echo $_COOKIE['name']; ?>
        </div>
        <div class="mb-3">
            <strong>Father's Name:</strong> <?php echo $_COOKIE['fname']; ?>
        </div>
        <div class="mb-3">
            <strong>Date of Birth:</strong> <?php echo $_COOKIE['dob']; ?>
        </div>
        <div class="mb-3">
            <strong>Mobile:</strong> <?php echo $_COOKIE['mobile']; ?>
        </div>
        <div class="mb-3">
            <strong>Email:</strong> <?php echo $_COOKIE['email']; ?>
        </div>
        <div class="mb-3">
            <strong>Address:</strong> <?php echo $_COOKIE['address']; ?>
        </div>
        <div class="text-center">
            <a href="submit.php" class="btn btn-primary">Confirm & Submit</a>
        </div>
    </div>
    <script src="./bootstrap-5.3.3-dist/js/bootstrap.bundle.js"></script>
</body>
</html>
