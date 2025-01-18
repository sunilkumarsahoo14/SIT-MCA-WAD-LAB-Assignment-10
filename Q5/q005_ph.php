<!-- Name: Sunil Kumar Sahoo -->
<!-- Sic: 23MMCI38 -->
<!-- Roll: 16 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q5 - Welcome</title>
</head>
<body>
<?php
    if (isset($_POST["submit"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];

        if ($email != "jhon@gmail.com" && $password != "12345") {
            header("location:q005.php");
        }
        else {
            echo "<h2>Hi There, Welcome To PHP.<h2>";
        }
    }
    ?>
</body>
</html>