<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>For Loop</title>
</head>
<body>

	<?php 
	
	//Simple
	for($i = 1; $i <= 10; $i++){ 
		
		echo $i." I Love PHP"."</br>";
	}
	
	
	//Reverse
	for($i = 10; $i >= 1; $i--){
		
		echo $i." Reverse Number"."</br>";
	}
	
	
	//Even
	for($i = 2; $i <= 10; $i = $i = $i+2){
		
		echo $i." Even Number"."</br>";
	}
	
	//Odd
	for($i = 1; $i <= 10; $i = $i+2){
		
		echo $i." Odd Number"."</br>";
	}
	
	//foreach 
	$colors = array("red","black","green","blue");
	foreach($colors as $value){
		
		echo $value."</br>";
	}
	
	?>
</body>
</html>