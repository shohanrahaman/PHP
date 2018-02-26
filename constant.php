<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>COnstant</title>
</head>
<body>
	<?php 
	
		class UserData{
			
			const NAME = "Shohanur Rahaman"; //constant
			
			public function display(){
				
				echo "Full name : ".UserData::NAME;
			}
			
		}
		
		$ur = new UserData();
		
		$ur->display();
	
	?>
</body>
</html>