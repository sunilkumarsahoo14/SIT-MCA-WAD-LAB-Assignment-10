<!-- Name: Sunil Kumar Sahoo -->
<!-- Sic: 23MMCI38 -->
<!-- Roll: 16 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data</title>
</head>
<body>
    <h1>Submitted Data</h1>
    <?php
    if (isset($_POST["submit"])) {
        $name = $_POST['name'] ?? '';
        $gender = $_POST['gender'] ?? '';
        $dob = $_POST['dob'] ?? '';
        $address = $_POST['address'] ?? '';
        $mobile = $_POST['mobile'] ?? '';
        $email = $_POST['email'] ?? '';
        $branch = $_POST['branch'] ?? '';
        $languages = $_POST['languages'] ?? [];

        $lang = implode(", ",$languages);
        ?>

        <p><strong>Name: <?php echo $name ?></strong> </p>
        <p><strong>Gender: <?php echo $gender ?></strong> </p>
        <p><strong>Date of Birth: <?php echo $dob ?></strong></p>
        <p><strong>Address: <?php echo $address ?></strong> </p>
        <p><strong>Mobile: <?php echo $mobile ?></strong> </p>
        <p><strong>Email: <?php echo $email ?></strong> </p>
        <p><strong>Branch: <?php echo $branch ?></strong> </p>
        <p><strong>Languages Known: <?php echo $lang ?></strong></p>

        <?php
    } else {
        echo "<p>No data submitted. Please fill out the form.</p>";
    }
    ?>
</body>
</html>
