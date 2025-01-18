<!-- Name: Sunil Kumar Sahoo -->
<!-- Sic: 23MMCI38 -->
<!-- Roll: 16 -->
<?php
if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $fname = $_POST["fname"];
    $dob = $_POST["dob"];

    setcookie("name", $name, time() + 3600, "/");  // 1 hour expiration
    setcookie("fname", $fname, time() + 3600, "/");
    setcookie("dob", $dob, time() + 3600, "/");

    header("location: form2.php");
}
else{
    header("location: form.php");
}
?>