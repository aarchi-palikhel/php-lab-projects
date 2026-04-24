<!DOCTYPE html>
<html>
<head>
    <title>Q.No.8</title>
</head>
<body>	
	<?php
	function armstrongCheck($num){
		$sum = 0; 
		$x = $num; 
		while($x != 0) 
		{ 
			$rem = $x % 10; 
			$sum = $sum + $rem*$rem*$rem; 
			$x = $x / 10; 
		} 
		
		// if true then armstrong number
		if ($num == $sum)
			return 1;
		
		// not an armstrong number 
		return 0; 
	}

	$num = 371;
	$flag = armstrongCheck($num);
	if ($flag == 1)
		echo "<h3>$num is an Armstrong Number.</h3>";
	else
		echo "<h3>$num is not an Armstrong Number.</h3>"
	?>
</body>
</html>