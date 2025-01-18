<!-- Name: Sunil Kumar Sahoo -->
<!-- Sic: 23MMCI38 -->
<!-- Roll: 16 -->
<?php
if(isset($_POST['submit'])){
    $num2 = $_POST['num2'];
    session_start();
    $_SESSION['num2'] = $num2;

    $sum = $_SESSION['num1'] + $_SESSION['num2'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Sum</title>
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
        <h4 class="fs-1"> Sum Is: 
            <?php
                echo $sum;
            ?>
        </h4>
    </div>
<?php
session_destroy();
?>
<script src="./bootstrap-5.3.3-dist/js/bootstrap.bundle.js"></script>
</body>
</html>