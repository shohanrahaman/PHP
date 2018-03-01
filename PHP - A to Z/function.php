<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Function</title>
</head>
<body>

	<?php 
	
		//Simple function
		function writeMsg(){
			
			echo "Hello PHP"."</br>";
		}
		
		writeMsg();
		
		//Function Argument
		function myName($name,$year){
			
			echo "Hello ".$name."</br>"."Born in ".$year."</br>";
			
		}
		
		myName('Shohan Rahaman',1950);
		
	?>
</body>
</html>