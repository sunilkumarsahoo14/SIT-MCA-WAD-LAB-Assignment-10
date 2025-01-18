<!-- Name: Sunil Kumar Sahoo -->
<!-- Sic: 23MMCI38 -->
<!-- Roll: 16 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Page</title>
</head>
<body>
    <h1>Student Registration Form</h1>
    <form action="q004_ph.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="gender">Gender:</label>
        <input type="radio" id="male" name="gender" value="Male" required>
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="Female" required>
        <label for="female">Female</label><br><br>

        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required><br><br>

        <label for="address">Address:</label><br>
        <textarea id="address" name="address" rows="4" cols="30" required></textarea><br><br>

        <label for="mobile">Mobile:</label>
        <input type="tel" id="mobile" name="mobile" pattern="[0-9]{10}" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="branch">Branch:</label>
        <select id="branch" name="branch" required>
            <option value="">--Select--</option>
            <option value="Computer Science">Computer Science</option>
            <option value="Information Technology">Information Technology</option>
            <option value="Electronics">Electronics</option>
            <option value="Mechanical">Mechanical</option>
        </select><br><br>

        <label>Languages Known:</label><br>
        <input type="checkbox" id="english" name="languages[]" value="English">
        <label for="english">English</label>
        <input type="checkbox" id="hindi" name="languages[]" value="Hindi">
        <label for="hindi">Hindi</label>
        <input type="checkbox" id="other" name="languages[]" value="Other">
        <label for="other">Other</label><br><br>

        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>