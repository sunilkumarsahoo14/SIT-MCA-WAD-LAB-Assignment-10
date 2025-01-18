<!-- Name: Sunil Kumar Sahoo -->
<!-- Sic: 23MMCI38 -->
<!-- Roll: 16 -->
<?php
include_once "navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Student Data By ID</title>
</head>
<body>
    <?php
    if (!isset($_GET["id"])) {
        header("location:display.php");
    }
    $id = $_GET["id"];
    require_once "functions.php";
    $result = getStudentById($id);
    if($result){
        $std = $result->fetch_assoc();
        ?>

        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <h2 class="text-center text-primary">Student Details</h2>
                    <tr>
                <th>ID</th><td><?php echo $std["id"]?></td>
            </tr>
            <tr>
                <th>Name</th><td><?php echo $std["name"]?></td>
            </tr>
            <tr>
                <th>Gender</th><td><?php echo $std["gender"]?></td>
            </tr>
            <tr>
                <th>DOB</th><td><?php echo $std["dob"]?></td>
            </tr>
            <tr>
                <th>Mobile</th><td><?php echo $std["mobile"]?></td>
            </tr>
            <tr>
                <th>Email</th><td><?php echo $std["email"]?></td>
            </tr>
            <tr>
                <th>Address</th><td><?php echo $std["address"]?></td>
            </tr>
            <tr>
                <th>Department</th><td><?php echo $std["department"]?></td>
            </tr>
            <tr>
                <th>CGPA</th><td><?php echo $std["cgpa"]?></td>
            </tr>
                    </table>
                </div>

            </div>
        </div>

        <?php
    }else{
        echo "<h2>No Data Available For This ID.</h2>";
    }
    ?>
</body>
</html>