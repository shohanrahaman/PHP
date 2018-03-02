<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Break | Continue</title>
</head>
<body>
	<?php 
	
	for($i = 1; $i <= 10; $i++){
		
		//break
		if($i == 3){
			
			continue;  
			
		}
		
		//continue
		if($i == 7){
			
			break;
		}
		
		echo $i."</br>";
		
	}
	
	?>
	
</body>
</html>