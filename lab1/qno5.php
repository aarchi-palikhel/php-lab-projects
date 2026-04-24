<!DOCTYPE html>
<html>
<head>
    <title>Q.No.5</title>
</head>
<body>
    <?php
        $i=7;
        $j=13;
        $k=11;
        $str = ($i < $j && $i < $k) ? "$i is lowest number between $j and $k." : (($j < $i && $j < $k) ? "$j is lowest number between $i and $k." : "$k is lowest number between $i and $j.");
        echo "<h3>$str</h3>";
    ?>
</body>
</html>