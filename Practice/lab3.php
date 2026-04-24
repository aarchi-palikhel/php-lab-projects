<table border="1" style="border-collapse:collapse;width:50%;text-align:center;">
    <tr>
        <th>Numbers</th>
        <th>Squares</th>
    </tr>
    <?php
     for($i=1;$i<=10;$i++){
        echo"<tr>";
        echo"<td>$i</td>";
        $j=pow($i,2);
        echo"<td>$j</td>";
        echo"</tr>";
     }
    ?>
</table>
