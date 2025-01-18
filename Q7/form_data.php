<!-- Name: Sunil Kumar Sahoo -->
<!-- Sic: 23MMCI38 -->
<!-- Roll: 16 -->
<?php
if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $dob = $_POST["dob"];
    $mobile = $_POST["mobile"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $department = $_POST["department"];
    $cgpa = $_POST["cgpa"];
    require_once "functions.php";
    $response = addStudent($name, $gender, $dob, $mobile, $email, $address, $department, $cgpa);
    // header("location:form.php?status=$response");
    if($response){
        ?>
        <script>
            alert("Student Registration Successful.");
            window.location = "form.php";
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("Something Went Wrong! Try Again Later.");
            window.location = "form.php";
        </script>
        <?php
    }
}
else {
    header("location: form.php");
}
?>