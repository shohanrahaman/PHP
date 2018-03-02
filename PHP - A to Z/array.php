<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>A r r a y</title>
</head>
<body>
	<?php 
	
		//Indexed arrays - Arrays with a numeric index
		$cars = array("Volvo","BMW","Toyota");
		echo $cars[1]."</br>";
		echo count($cars)."</br>"; // array length using count
		
		//Associative arrays - Arrays with named keys
		$age = array ("shamim"=>"30","shohan"=>"50","rahaman"=>"70");
		echo "Age : ".$age['shamim']."</br>";
		
		//Array Sorting
		$sports = array("cricket","football","badminton");
		sort($sports); // rsort($sports) | asort($sports) | ksort($sports) 
		$clength = count($sports);
		for($x = 0; $x <$clength; $x++){
			
			echo $sports[$x]."</br>";
			
		}
	?>
	
</body>
</html>