<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>GET | POST</title>
</head>
<body>
	 
	
	<form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
	NAME : <input type="text" name="name" /><br /><br />
	EMAIL : <input type="text" name="email" />
	<input type="submit" value="submit" />
	
	</form>
	<?php 
	
	if($_SERVER["REQUEST_METHOD"]== "POST"){
		
		$name = $_POST['name'];
		$email = $_POST['email'];
		
		if(empty($name) || empty($email)){
			
			echo "name or email field must not be empty !!";
			
		} else {
			
			echo "Name : ".$name."</br>"."Email : ".$email;
		}
		
	}
	
	
	
	
	
	?>
	
	
</body>
</html>