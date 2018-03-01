<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Switch Case</title>
</head>
<body>

	<?php 
	$color = "red";
	
	switch($color){
		
		case "green" :
			echo "color is green";
			break;
		case "black" :
			echo "color is black";
			break;
		case "red" :
			echo "color is red";
			break;
		default :
			echo "color is neither green, black, red";
		
	}
	
	?>
</body>
</html>