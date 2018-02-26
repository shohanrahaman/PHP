<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Static properties & methods</title>
</head>
<body>
	<?php 
	
		class UserData{
			
			public static $name = "shohan sazal";
			
			
			public static function display(){
				
				echo "Name is : ".self::$name;
				
			}
			
			
		}
		
		UserData::display();  // [::] scope resulation operator
		
	
	?>
</body>
</html>