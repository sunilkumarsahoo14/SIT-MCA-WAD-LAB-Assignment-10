<?php
include_once "navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Form</title>
    <link href="./bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            max-width: 500px; 
        }
    </style>
</head> 
<body>
    <div class="container my-5">
        <h3 class="text-center mb-4 text-primary">Student Registration Form</h3>
        <form action="form_data.php" method="post">
            <div class="mb-3">
                <label class="form-label fs-5" for="name">Name:</label>
                <input class="form-control" type="text" name="name" id="name" required>
            </div>
            <div class="mb-3">
                <label class="form-label fs-5">Gender:</label>
                <div>
                    <input type="radio" name="gender" id="gender_male" value="Male" required>
                    <label for="gender_male">Male</label>
                    <input type="radio" name="gender" id="gender_female" value="Female">
                    <label for="gender_female">Female</label>
                    <input type="radio" name="gender" id="gender_other" value="Other">
                    <label for="gender_other">Other</label>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label fs-5" for="dob">D.O.B:</label>
                <input class="form-control" type="date" name="dob" id="dob" required>
            </div>
            <div class="mb-3">
                <label class="form-label fs-5" for="mobile">Mobile:</label>
                <input class="form-control" type="number" name="mobile" id="mobile" required>
            </div>
            <div class="mb-3">
                <label class="form-label fs-5" for="email">Email:</label>
                <input class="form-control" type="email" name="email" id="email" required>
            </div>
            <div class="mb-3">
                <label class="form-label fs-5" for="address">Address:</label>
                <textarea class="form-control" name="address" id="address" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label fs-5" for="department">Department:</label>
                <select class="form-select" name="department" id="department" required>
                    <option value="" disabled selected>--SELECT--</option>
                    <option value="CSE">CSE</option>
                    <option value="CST">CST</option>
                    <option value="CEN">CEN</option>
                    <option value="MSC">MSC</option>
                    <option value="MCA">MCA</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label fs-5" for="cgpa">CGPA:</label>
                <input class="form-control" type="number" name="cgpa" id="cgpa" step="0.01" required>
            </div>
            <div class="text-center">
                <input class="btn btn-primary mt-3" type="submit" name="submit" id="submit">
            </div>
        </form>
    </div>
    <script src="./bootstrap-5.3.3-dist/js/bootstrap.bundle.js"></script>
</body> 
</html>

<?php
include_once "footer.php";
?>