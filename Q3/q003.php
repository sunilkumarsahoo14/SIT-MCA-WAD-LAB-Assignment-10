<!-- Name: Sunil Kumar Sahoo -->
<!-- Sic: 23MMCI38 -->
<!-- Roll: 16 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country</title>
</head>
<body>
    <?php
    $countryCodes = array(
        "US" => "United States",
        "CA" => "Canada",
        "GB" => "United Kingdom",
        "AU" => "Australia",
        "IN" => "India",
        "FR" => "France",
        "DE" => "Germany",
        "IT" => "Italy"
    );
    ?>
    <form action="" method="post">
        <select name="country" id="country">
            <option value="">--SELECT--</option>
            <?php foreach ($countryCodes as $code => $country): ?>
                <option value="<?php echo $code; ?>"><?php echo $country; ?></option>
            <?php endforeach; ?>
        </select>
        <input type="submit" name="submit" id="">
    </form>

    <?php
    if (isset($_POST["submit"])) {
        $cn = $_POST["country"];
        if ($cn) {
            echo $cn . " is selected";
        } else {
            echo "No Country Selected!";
        }
    }
    ?>

</body>
</html>