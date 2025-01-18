<!-- Name: Sunil Kumar Sahoo -->
<!-- Sic: 23MMCI38 -->
<!-- Roll: 16 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP Calculator</title>
    <style>
        body{
            background-color: gray;
        }
        .container{
            height: 350px;
            width: 300px;
            background-color: white;
            border: 1px solid black;
            border-radius: 10px;
            margin: auto;
            margin-top:100px;
        }
        input, label, select{
            display: block;
            margin: 20px;
        }
        h3{
            text-align: center;
        }
        .ans{
            margin-left:20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3>My Calculator</h3>
        <div class="f-container">
        <form action="q002.php" method = "post">
            <label for="">Enter First Number</label>
            <input type="text" name="num1" id="num1">
            <label for="">Enter Second Number</label>
            <input type="text" name="num2" id="num2">
            <select name="operator" id="operator">
                <option value="">--SELECT--</option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
                <option value="%">%</option>
            </select>
            <input type="submit" name="submit">
        </form>
        </div>
        <span class="ans">Ans:</span>
            <span id = "ans"></span>
        <?php
        function calculate($num1, $num2, $operator){
            $ans = 0;
            if($operator == "+"){
                $ans = $num1 + $num2;
            }
            elseif ($operator == "-") {
                $ans = $num1 - $num2;
            }
            elseif ($operator == "*") {
                $ans = $num1 * $num2;
            }
            elseif ($operator == "/") {
                $ans = $num1 / $num2;
            }
            else{
                $ans = $num1 % $num2;
            }
            return $ans;
        }
        if(isset($_POST["submit"])){
            $n1 = $_POST["num1"];
            $n2 = $_POST["num2"];
            $op = $_POST["operator"];
            $ans = calculate($n1, $n2, $op);
            ?>
            <script>
                let an=document.querySelector("#ans");
                an.textContent= <?php echo $ans ?>
            </script>
            <?php
        }
        ?>
    </div>
</body>
</html>