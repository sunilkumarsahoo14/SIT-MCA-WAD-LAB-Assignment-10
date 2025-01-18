<!-- Name: Sunil Kumar Sahoo -->
<!-- Sic: 23MMCI38 -->
<!-- Roll: 16 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Age Select</title>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <label for="age">Select Age</label>
            <select name="age" id="age">
                <option value = "">--SELECT--</option>
                <option value="17">Under 18</option>
                <option value="35">18 - 35</option>
                <option value="50">36 - 50</option>
                <option value="51">Above 50</option>
            </select><br><br>
            <input type="submit" name="submit" id="submit">
        </form>
    </div>
    <?php
        if(isset($_POST["submit"])){
            $val = $_POST["age"];
            if ($val == 17) {
                header("location:q006_teen.php");
            }
            if ($val == 35) {
                header("location:q006_adult.php");
            }
            if ($val == 50) {
                header("location:q006_middle_aged.php");
            }
            if ($val == 51) {
                header("location:q006_senior.php");
            }
        }
    ?>
</body>
</html>