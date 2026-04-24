<!DOCTYPE html>
<html>
<head>
    <title>Q.No.2 Lab 3</title>
</head>
<body>    
    <table align = "left" border = "1" cellpadding = "3" cellspacing = "0">  
        <tr>  
        <td><b>Numbers</b></td>  
        <td><b>Squares of Numbers</b></td>      
        </tr>  
        <?php    
        $x = 1;  
        for($x=1;$x<=10;$x++){  
            echo "<tr>";  
            echo "<td> $x </td>"; 
            $y=pow($x,2);
            echo "<td> $y </td>";     
            echo "</tr>";    
        }   
        ?>     
        </table>  
</body>    
</html>