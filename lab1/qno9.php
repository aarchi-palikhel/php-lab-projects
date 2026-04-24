<!DOCTYPE html>
<html>
<head>
    <title>Q.No.9</title>
</head>
<body>
    <?php  
    $num = 123456;  
    $i=$num;
    $revnum = 0;  
    while ($i> 1)  
    {  
    $rem = $i % 10;  
    $revnum = ($revnum * 10) + $rem;  
    $i = ($i / 10);   
    }  
    echo "<h3>Reverse number of $num is: $revnum.</h3>";  
    ?>  
</body>
</html>