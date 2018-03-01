<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Constant</title>
</head>
<body>
	<?php 
	
	// define(name, value, case-insensitive)
	
	define("GREETING", "We are PHP programmer"); //default : false
	echo GREETING;
	
	define("GREETING", "We are PHP programmer",true);
	echo greeting;
	
	?>
	
</body>
</html>