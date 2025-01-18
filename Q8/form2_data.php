<!-- Name: Sunil Kumar Sahoo -->
<!-- Sic: 23MMCI38 -->
<!-- Roll: 16 -->
<?php
if(isset($_POST["submit"])){
    $mobile = $_POST["mobile"];
    $email = $_POST["email"];
    $address = $_POST["address"];

    setcookie("mobile", $mobile, time() + 3600, "/");  // 1 hour expiration
    setcookie("email", $email, time() + 3600, "/");
    setcookie("address", $address, time() + 3600, "/");

    header("location: verify.php");
}
else{
    header("location: form2.php");
}
?>