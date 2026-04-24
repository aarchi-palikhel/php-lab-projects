<!DOCTYPE html>
<html>
<head>
    <title>Sum of Two Numbers</title>
</head>
<body>
    <form method="post" action="">
        <label for="number1">Enter first number:</label>
        <input type="number" id="number1" name="number1" required>
        <br><br>
        <label for="number2">Enter second number:</label>
        <input type="number" id="number2" name="number2" required>
        <br><br>
        <input type="submit" value="Calculate Sum">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number1 = intval($_POST["number1"]);
        $number2 = intval($_POST["number2"]);
        $sum = $number1 + $number2;
        echo "<p>The sum of the two numbers is: <span>$sum</span></p>";
    }
    ?>
</body>
</html>