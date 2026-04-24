<!DOCTYPE html>
<html>
<head>
    <title>Q.No.7</title>
</head>
<body>
    <?php
        $days=cal_days_in_month(CAL_GREGORIAN,6,2000);
        echo "<h4>There was $days days in June 2000.</h4>";

        $days=cal_days_in_month(CAL_GREGORIAN,2,2024);
        echo "<h4>There is $days days in feb 2024.</h4>";
        ?>
</body>
</html>