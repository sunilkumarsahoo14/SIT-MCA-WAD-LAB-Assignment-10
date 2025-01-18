<!-- Name: Sunil Kumar Sahoo -->
<!-- Sic: 23MMCI38 -->
<!-- Roll: 16 -->
<?php 
if (!isset($_GET["id"])) {
    header("location:display.php");
}
$id = $_GET['id'];
require_once "functions.php";
$res = deleteStudentById($id);
if($res){
    ?>
    <script>
        alert("Student Data Deleted!");
        window.location = "display.php";
        </script>
        <?php
}else{
    ?>
    <script>
        alert("Invalid ID");
        window.location = "display.php";
    </script>
    <?php
}
?>