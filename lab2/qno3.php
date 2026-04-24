<!DOCTYPE html>
<html>
<head>
    <title>Q.No.3 Lab 2</title>
</head>
<body>    
    <table align = "left" border = "1" cellpadding = "3" cellspacing = "0">  
        <tr>  
        <td>Numbers</td>    
        </tr>  
        <?php    
        $x = 1;  
        for($x=1;$x<=10;$x++){  
            echo "<tr>";  
            echo "<td> $x </td>";   
            echo "</tr>";    
        }   
        ?>    
        </table>  
</body>    
</html>