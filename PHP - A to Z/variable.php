<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Variable</title>
</head>
<body>
	<?php 
	$x = "hello world"; //global variable
	$a = 5;
	$b = 10;
	
	echo $x."</br>";
	
	function myFunction(){
		$y = 10.5; //local variable
		echo $y."</br>";	
	}
	
	myFunction();
	
	function myGlobal(){
		global $x; //using global keyword
		echo $x."</br>";
	}
	myGlobal();
	
	function myGlobalIndex(){
		$GLOBALS['b'] = $GLOBALS['a']+$GLOBALS['b']; //using $GLOBALS[index]
	}
	myGlobalIndex();
	echo $b;
	?>
	
</body>
</html>