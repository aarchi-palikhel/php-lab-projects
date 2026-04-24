<!DOCTYPE html>
<html>
<head>
    <title>Q.No.5</title>
    <style>
        table {
            width: 30%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: center; /* Change text alignment to left */
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h3>Sorted Class and Student Count</h3>
<?php
// Step 5: Define the array with names and their respective scores
$scores = [
    ['name' => 'Peter', 'english' => 30, 'wt' => 75, 'dsa' => 70],
    ['name' => 'Ben', 'english' => 90, 'wt' => 85, 'dsa' => 80],
    ['name' => 'Joe', 'english' => 85, 'wt' => 70, 'dsa' => 60],
];

// Display the array in an HTML table
echo "<table>
        <tr>
            <th>Name</th>
            <th>English</th>
            <th>WT</th>
            <th>DSA</th>
        </tr>";

foreach ($scores as $score) {
    echo "<tr>
            <td>{$score['name']}</td>
            <td>{$score['english']}</td>
            <td>{$score['wt']}</td>
            <td>{$score['dsa']}</td>
          </tr>";
}

echo "</table>";
?>
</body>
</html>
