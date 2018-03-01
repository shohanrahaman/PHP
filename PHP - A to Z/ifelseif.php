<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>If-Else-If</title>
</head>
<body>
	<?php 
	
	//if Statement
	$x = 10;
	if($x>0){
		
		echo "Positive"."</br>";
	}
	
	//if else Statement
	$y = -10;
	if($y>0){
		
		echo "Positive"."</br>";
		
	} else {
		
		echo "Negative"."</br>";
	}
	
	//if elseif Statement
	$z = 0;
	if($z>0){
		
		echo "Positive";
		
	} elseif($z<0){
		
		echo "Negative";
		
	} else {
		echo "Equal or Zero";
		
	}
	
	
	?>
	
</body>
</html>