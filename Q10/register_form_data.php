<!-- Name: Sunil Kumar Sahoo -->
<!-- Sic: 23MMCI38 -->
<!-- Roll: 16 -->
<?php
require_once "dbconnect.php";
if (isset($_POST['submit'])) {
    $name = $_POST["name"];
    $mobile = $_POST["mobile"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    global $conn;
        try{
            // Prepare Query
            $qry = "INSERT INTO authentication(name, mobile, email, password) VALUES(?, ?, ?, ?)";
            $stmt = $conn -> prepare($qry);
            // Bind Param
            $stmt -> bind_param("ssss", $name,$mobile, $email, $password);
            // Execute Query
            $status = $stmt -> execute();
            if ($status) {
                echo "<h3 style='text-align: center; margin-top: 100px;'>Registration Successful!</h3>";
                echo '<a style="display: block; text-align: center;" href="register_form.php">Begin New Registration</a>';
                echo '<a style="display: block; text-align: center;" href="login_form.php">Login To Account</a>';
            }
            else{
                echo "<h2 style='text-align: center; margin-top: 100px;'>Error: Unable to Register.</h2>";
                echo '<a style="display: block; text-align: center;" href="register_form.php">Try Again!!!</a>';
            }
        }
        catch(Exception $e){
            die($e -> getMessage());
        }
        finally{
            $conn -> close();
        }
    }
?>