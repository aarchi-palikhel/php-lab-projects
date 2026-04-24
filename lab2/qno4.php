<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q.No.4</title>
</head>
<body>

<h2>Select Numbers</h2>

<form>
    <label for="numbers">Select a number:</label>
    <select id="numbers" name="numbers">
        <?php
        // Using a for loop to generate options for numbers 1 to 10
        for ($i = 1; $i <= 10; $i++) {
            echo "<option value='$i'>$i</option>";
        }
        ?>
    </select>
    <br><br>
    <input type="submit" value="Submit">
</form>

</body>
</html>