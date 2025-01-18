<!-- Name: Sunil Kumar Sahoo -->
 <!-- Sic: 23MMCI38 -->
  <!-- Roll: 16 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number Check</title>
</head>
<body>
    <form action="q001.php" method="post">
        <input type="text" name="number" id="number" placeholder="Enter Your Number">
        <input type="submit" name="submit" id="submit">
    </form>
    <br>
    <?php
    function isPrime($n){
        for($i=2; $i<=$n/2; $i++){
            if($n % $i == 0){
                return false;
            }
        }
        return true;
    }
    if(isset($_POST['submit'])){
        $n = $_POST["number"];
        echo isPrime($n)? "The Number Is Prime" : "The Number Is Not Prime";
    }
    ?>
</body>
</html>