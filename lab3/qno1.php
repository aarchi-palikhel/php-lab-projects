<!DOCTYPE html>
<html>
<head>
    <title>Q.No.1</title>
</head>
<style>
	li{
		list-style-type:circle;
	}
</style>
<body>

<h3>First 20 Numbers pushed into an Array</h3>
<ul>
    <?php
    $numbers = array();

    // Push the first 20 numbers into the array
    for ($i = 1; $i <= 20; $i++) {
        array_push($numbers, $i);
    }
    // Display the numbers in an unordered list
    foreach ($numbers as $number) {
        echo "<li>$number</li>";
    }
    ?>
</ul>

</body>
</html>