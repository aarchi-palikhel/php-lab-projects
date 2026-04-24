<!DOCTYPE html>
<html>
<head>
    <title>Web Technology Marks</title>
    <style>
        table {
            width: 30%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>

<h2>Web Technology Marks (Using for loop)</h2>
<table>
    <tr>
        <th>Student</th>
        <th>Marks</th>
    </tr>
    <?php
    $marks = [85, 78, 92, 74, 88];
    
    for ($i = 0; $i < count($marks); $i++) {
        echo "<tr>";
        echo "<td>Student " . ($i + 1) . "</td>";
        echo "<td>" . $marks[$i] . "</td>";
        echo "</tr>";
    }
    ?>
</table>

<h2>Web Technology Marks (Using foreach loop)</h2>
<table>
    <tr>
        <th>Student</th>
        <th>Marks</th>
    </tr>
    <?php
    $studentNumber = 1;
    foreach ($marks as $mark) {
        echo "<tr>";
        echo "<td>Student " . $studentNumber . "</td>";
        echo "<td>" . $mark . "</td>";
        echo "</tr>";
        $studentNumber++;
    }
    ?>
</table>

</body>
</html>
