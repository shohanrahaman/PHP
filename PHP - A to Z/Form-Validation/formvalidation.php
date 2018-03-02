<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title> Form Validation</title>
</head>
<body>

	<form action="<?php $_SERVER['PHP_SELF']?>" method="post"> 
	
		Name: <input type="text" name="name" /><br /><br />
		Email: <input type="text" name="email" /><br /><br />
		Wurl: <input type="text" name="wurl" />
		<input type="submit" value="Submit" />
		
	</form>
	
	<?php 
	
		if($_SERVER["REQUEST_METHOD"]== "POST"){
			
			$name = $_POST['name'];
			$email = $_POST['email'];
			$wurl = $_POST['wurl'];
			
			if(!preg_match("/^[a-zA-Z ]*$/",$name)){
				
				echo "Only letters and white space allowed";
				
			} elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
				
				echo "Invalid email format";
				
			} elseif (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$wurl)){
				
				echo "Invalid url";
				
			} else {
				
				echo $name."</br>";
				echo $email."</br>";
				echo $wurl."</br>";
				
			}
			
			
		}
	
	
	
	?>
	
</body>
</html>