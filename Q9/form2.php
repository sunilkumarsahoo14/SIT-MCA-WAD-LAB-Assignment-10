<!-- Name: Sunil Kumar Sahoo -->
<!-- Sic: 23MMCI38 -->
<!-- Roll: 16 -->
<?php
if(isset($_POST['submit'])){
    $num1 = $_POST['num1'];
    session_start();
    $_SESSION['num1'] = $num1;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form2</title>
    <link rel="stylesheet" href="./bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <style>
        .container {
            max-width: 500px; 
        }
    </style>
</head>
<body>
    <div class="container text-center my-5">
        <h2 class="fs-1 text-primary">Number Sum Program</h2>
        <form action="display.php" method="post">
            <input class="mt-5 form-control" type="text" name="num2" id="num2" placeholder="Enter Second Number">
            <input class="btn btn-primary my-5" type="submit" name="submit" id="submit">
        </form>
    </div>
<script src="./bootstrap-5.3.3-dist/js/bootstrap.bundle.js"></script>
</body>
</html>