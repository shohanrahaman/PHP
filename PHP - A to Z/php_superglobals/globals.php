<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>PHP $GLOBALS</title>
</head>
<body>
	<?php 
	
	$x = 75;
	$y = 25;
	
	function addition(){
		
		$GLOBALS['z'] = $GLOBALS['x']+$GLOBALS['y'];
		
	}
	addition();
	echo $z;
	
	?>
	
</body>
</html>