<!DOCTYPE html>
<html>
<head>
    <title>Q.No.11</title>
</head>
<body>
    <?php
    // Define a global variable
    $globalVar = 10;

    // Function to modify the global variable
    function modifyGlobalVar() {
        // Access the global variable using the global keyword
        global $globalVar;
        $globalVar += 5;
    }

    // Display the original value of the global variable
    echo "<h3>Original value of global variable: $globalVar</h3>";

    // Call the function to modify the global variable
    modifyGlobalVar();

    // Display the modified value of the global variable
    echo "<h3>Modified value of global variable: $globalVar</h3>";
    ?>
</body>
</html>
