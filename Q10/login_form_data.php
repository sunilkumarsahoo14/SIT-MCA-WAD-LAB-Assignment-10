<!-- Name: Sunil Kumar Sahoo -->
<!-- Sic: 23MMCI38 -->
<!-- Roll: 16 -->
<?php
require_once "dbconnect.php";
if (isset($_POST['submit'])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    global $conn;
    try{
        $qry = "SELECT * FROM authentication WHERE email=?";
        $stmt = $conn ->prepare($qry);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $usr = $result->fetch_assoc();
        $save_email = $usr["email"];
        $save_password = $usr["password"];
        $save_name = $usr["name"];
        if ($email == $save_email) {
            if ($password == $save_password) {
                session_start();
                $_SESSION["email"] = $save_email;
                $_SESSION["name"] = $save_name;
                header("location:dashboard.php");
            }
            else{
                echo "Please Input Correct Password.";
            }
        }
        else{
            echo "Please Input Correct User ID.";
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