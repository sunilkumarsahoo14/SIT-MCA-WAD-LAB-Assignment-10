<!-- Name: Sunil Kumar Sahoo -->
<!-- Sic: 23MMCI38 -->
<!-- Roll: 16 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Registration Form</title>
    <link href="./bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            max-width: 500px; 
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <h2 class="text-center mb-5 text-primary">Personal Registration Form</h2>
        <form action="form_data.php" method="post">
        <div class="mb-3">
                <label class="form-label fs-5" for="name">Name:</label>
                <input class="form-control" type="text" name="name" id="name" required>
            </div>
        <div class="mb-3">
                <label class="form-label fs-5" for="fname">Father's Name:</label>
                <input class="form-control" type="text" name="fname" id="fname" required>
            </div>
        <div class="mb-3">
                <label class="form-label fs-5" for="dob">D.O.B:</label>
                <input class="form-control" type="date" name="dob" id="dob" required>
            </div>
            <div class="text-center">
                <input class="btn btn-primary mt-3" type="submit" name="submit" id="submit">
            </div>
        </form>
    </div>
<script src="./bootstrap-5.3.3-dist/js/bootstrap.bundle.js"></script>
</body>
</html>