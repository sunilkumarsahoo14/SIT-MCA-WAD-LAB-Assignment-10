<!-- Name: Sunil Kumar Sahoo -->
<!-- Sic: 23MMCI38 -->
<!-- Roll: 16 -->
<?php
include_once "dbconnect.php";
if (isset($_COOKIE['name'], $_COOKIE['fname'], $_COOKIE['dob'], $_COOKIE['mobile'], $_COOKIE['email'], $_COOKIE['address'])) {
    $name = $_COOKIE['name'];
    $fname = $_COOKIE['fname'];
    $dob = $_COOKIE['dob'];
    $mobile = $_COOKIE['mobile'];
    $email = $_COOKIE['email'];
    $address = $_COOKIE['address'];
    global $conn;
    try{
        // Prepare Query
        $qry = "INSERT INTO registration(name, fname, dob, mobile, email, address) VALUES(?, ?, ?, ?, ?, ?)";
        $stmt = $conn -> prepare($qry);
        // Bind Param
        $stmt -> bind_param("ssssss", $name, $fname, $dob, $mobile, $email, $address);
        // Execute Query
        $status = $stmt -> execute();
        // return $status;
    if ($status) {
        setcookie("name", "", time() - 3600, "/");
        setcookie("fname", "", time() - 3600, "/");
        setcookie("dob", "", time() - 3600, "/");
        setcookie("mobile", "", time() - 3600, "/");
        setcookie("email", "", time() - 3600, "/");
        setcookie("address", "", time() - 3600, "/");
        echo "<h2 style='text-align: center; margin-top: 100px;'>Registration Successful!</h2>";
        echo '<a style="display: block; text-align: center;" href="form.php">Begin New Registration</a>';
    } else {
        echo "<h2 style='text-align: center; margin-top: 100px;'>Error: Unable to save data.</h2>";
        echo '<a style="display: block; text-align: center;" href="form.php">Try Again!!!</a>';
    }
}catch(Exception $e){
    die($e -> getMessage());
}
finally{
    $conn -> close();
}
}
?>

