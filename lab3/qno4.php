<!DOCTYPE html>
<html>
<head>
    <title>Q.No.4</title>
    <style>
        table {
            width: 20%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left; /* Change text alignment to left */
        }
    </style>
</head>
<body>

<h3>Sorted Class and Student Count</h3>
<?php
// Array representing the table data
$classes = [
    ["class" => "BIM2A", "students_count" => 30],
    ["class" => "BIM3A", "students_count" => 35],
    ["class" => "BIM4A", "students_count" => 45],
    ["class" => "BIM2B", "students_count" => 40],
    ["class" => "BIM3B", "students_count" => 25],
    ["class" => "BIM4B", "students_count" => 30]
];

// Custom sorting function to sort by 'students_count'
usort($classes, function($a, $b) {
    return $a['students_count'] - $b['students_count'];
});
?>

<table>
    <tr>
        <th>Class</th>
        <th>Students Count</th>
    </tr>
    <?php
    // Loop through the sorted array and display the data in the table
    foreach ($classes as $class) {
        echo "<tr>";
        echo "<td>{$class['class']}</td>";
        echo "<td>{$class['students_count']}</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
