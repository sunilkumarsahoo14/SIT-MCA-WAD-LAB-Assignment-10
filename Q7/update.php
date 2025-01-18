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
    <title>Student Data Update</title>
    <link rel="stylesheet" href="./bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <style>
        .container {
            max-width: 500px;
        }
    </style>
</head>

<body>
    <!-- <h1>Update Student Details</h1> -->
    <?php
    if (!isset($_GET["id"])) {
        header("location:display.php");
    }
    $id = $_GET["id"];
    require_once "functions.php";

    $result = getStudentById($id);
    if (!$result) {
    ?>
        <script>
            alert("Invalid ID");
            window.location = "display.php";
        </script>
    <?php
    }
    $std = $result->fetch_assoc();
    ?>

    <div class="container my-5">
        <h2 class="text-center mb-4">Update Student Details</h2>
        <form action="update_data.php" method="post">
            <div class="mb-3">
                <input type="hidden" name="id" value="<?php echo $std['id']; ?>">
                <label class="form-label fs-5" for="name">Name:</label>
                <input class="form-control" type="text" name="name" id="name" value="<?php echo $std['name']; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label fs-5">Gender:</label>
                <div>
                    <input type="radio" name="gender" id="gender_male" value="Male" <?php echo $std["gender"] === "Male" ? "checked" : ""; ?>>
                    <label for="gender_male">Male</label>
                    <input type="radio" name="gender" id="gender_female" value="Female" <?php echo $std["gender"] === "Female" ? "checked" : ""; ?>>
                    <label for="gender_female">Female</label>
                    <input type="radio" name="gender" id="gender_other" value="Other" <?php echo $std["gender"] === "Other" ? "checked" : ""; ?>>
                    <label for="gender_other">Other</label>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label fs-5" for="dob">D.O.B:</label>
                <input class="form-control" type="date" name="dob" id="dob" value="<?php echo $std['dob']; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label fs-5" for="mobile">Mobile:</label>
                <input class="form-control" type="number" name="mobile" id="mobile" required value="<?php echo $std['mobile']; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label fs-5" for="email">Email:</label>
                <input class="form-control" type="email" name="email" id="email" required value="<?php echo $std['email']; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label fs-5" for="address">Address:</label>
                <textarea class="form-control" name="address" id="address" rows="3" required><?php echo $std['address']; ?></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label fs-5" for="department">Department:</label>
                <select class="form-select" name="department" id="department" required>
                    <option value="" disabled>--SELECT--</option>
                    <option value="CSE" <?php echo $std['department'] === 'CSE' ? 'selected' : ''; ?>>CSE</option>
                    <option value="CST" <?php echo $std['department'] === 'CST' ? 'selected' : ''; ?>>CST</option>
                    <option value="CEN" <?php echo $std['department'] === 'CEN' ? 'selected' : ''; ?>>CEN</option>
                    <option value="MSC" <?php echo $std['department'] === 'MSC' ? 'selected' : ''; ?>>MSC</option>
                    <option value="MCA" <?php echo $std['department'] === 'MCA' ? 'selected' : ''; ?>>MCA</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label fs-5" for="cgpa">CGPA:</label>
                <input class="form-control" type="number" name="cgpa" id="cgpa" step="0.01" required value="<?php echo $std['cgpa']; ?>">
            </div>
            <div class="text-center">
                <input class="btn btn-primary mt-3" type="submit" name="update" id="update" value="Update">
            </div>
        </form>
    </div>

    <script src="./bootstrap-5.3.3-dist/js/bootstrap.bundle.js"></script>
</body>

</html>