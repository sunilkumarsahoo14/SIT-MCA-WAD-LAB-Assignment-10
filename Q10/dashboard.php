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
    <title>Dashboard</title>
</head>
<body>
    <h2>Welcome <?php echo $usr_name ?>, Have A Nice Day.</h2>
    <a href="profile.php">Go To Profile</a>
</body>
</html>
