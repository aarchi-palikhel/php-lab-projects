<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $color = $_POST["color"];
    setcookie("bg_color", $color, time() + (30 * 24 * 60 * 60), "/");
    header("Location: " . $_SERVER["PHP_SELF"]); // Refresh the page
    exit();
}

// Set background color from cookie if available
$background_color = isset($_COOKIE["bg_color"]) ? $_COOKIE["bg_color"] : "white";
?>
<head>
    <title>Lab 8 Q.NO.4</title>
</head> 

<body style="background-color: <?php echo $background_color; ?>;">
    <form method="POST" action="">
        <h3>Select background color:</h3>
        <select name="color">
            <option value="blue">Blue</option>
            <option value="green">Green</option>
            <option value="red">Red</option>
        </select>
        <button type="submit">Save</button>
    </form>
</body>