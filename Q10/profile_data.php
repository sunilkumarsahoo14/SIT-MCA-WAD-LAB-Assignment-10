<!-- Name: Sunil Kumar Sahoo -->
<!-- Sic: 23MMCI38 -->
<!-- Roll: 16 -->
<?php
if (isset($_POST["submit"])) {
    session_start();
    $password = $_POST["password"];
    $email = $_SESSION["email"];
    require_once "dbconnect.php";
    global $conn;
    try {
        // Prepare the SQL query
        $qry = "UPDATE authentication SET password=? WHERE email=?";
        $stmt = $conn->prepare($qry);
        // Bind parameters correctly
        $stmt->bind_param("ss", $password, $email);
        // Execute the statement
        $status = $stmt->execute();
        // Check if any rows were affected
        if ($conn->affected_rows > 0) {
            ?>
            <script>
                alert("Password Updated.");
                window.location = "login_form.php";
            </script>
            <?php
        } else {
            ?>
            <script>
                alert("Something Went Wrong!");
                window.location = "login_form.php";
            </script>
            <?php
        }
    } catch (Exception $e) {
        die($e->getMessage());
    } finally {
        session_destroy();
        $conn->close();
    }
}
?>
