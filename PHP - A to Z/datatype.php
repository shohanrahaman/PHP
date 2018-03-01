<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Data Type</title>
</head>
<body>
	<?php 
	
	/*
		Data Type :
			String 
			Integer  
			Float  
			Boolean  
			Array 
			Object  
			Null 
			Resource
	
	*/
	
	$s = "String";
	$i = 150;
	$f = 10.365;
	$b = true;
	$a = array("volvo","bmw");
	$n = null;
	
	function myDataType(){
		
		global $s,$i,$f,$b,$a,$n;
		
		var_dump($s);
		var_dump($i);
		var_dump($f);
		var_dump($b);
		var_dump($a);
		var_dump($n);
	}
	myDataType();
	
	?>
	
</body>
</html>