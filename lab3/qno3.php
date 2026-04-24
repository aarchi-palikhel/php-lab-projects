<!DOCTYPE html>
<html>
<head>
    <title>Q.No.3 Lab 3</title>

<style>
	table{
		width:30%;
		border-collapse:collapse;
	}
	table, th, td{	
		border:1px solid black;
	}
	th,td{
		padding:8px;
		text-align: center;
	}
</style>
</head>
<body>    
	<table>
	<tr>  
        <td><b>Class</b></td>  
        <td><b>Students count</b></td>      
        </tr>  
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
				// Loop through the array and display the data in the table
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