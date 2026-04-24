<!DOCTYPE html>
<html>
<head>
    <title>Q.No.6</title>
</head>
<body>
    <?php
        function check_prime($num)
        {
        if ($num == 1)
        return 0;
        for ($i = 2; $i <= $num/2; $i++)
        {
            if ($num % $i == 0)
            return 0;
        }
        return 1;
        }
        $num = 617;
        $flag_val = check_prime($num);
        if ($flag_val == 1)
        echo "<h3>$num is a prime number.</h3>";
        else
        echo "<h3>$num is a not a prime number.</h3>";
    ?>
</body>
</html>