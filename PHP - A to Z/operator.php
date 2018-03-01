<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Operators</title>
</head>
<body>
	<?php 

	$x = 22;
	$y = 10;
	
	//Arithmetic operators :
	
	echo $x + $y."</br>";
	echo $x - $y."</br>";
	echo $x * $y."</br>";
	echo $x / $y."</br>";
	echo $x % $y."</br>";
	
	//Assignment operators : x = x+y;
	
	echo $x += $y."</br>";
	echo $x -= $y."</br>";
	echo $x *= $y."</br>";
	echo $x /= $y."</br>";
	echo $x %= $y."</br>";
	
	//Comparison Operators :
	
	echo $x == $y."</br>";
	echo $x > $y."</br>";
	echo $x >= $y."</br>";
	echo $x < $y."</br>";
	echo $x <= $y."</br>";
	echo $x != $y."</br>";
	
	//Increment / Decrement Operators :
	
	echo ++$x;  //pre-increment
	echo $x++;	//post-increment
	echo --$x;	//pre-decrement
	echo $x--;	//post-decrement
	
	//Logical Operators :
	
	echo $x and $y."</br>";
	echo $x or $y."</br>";
	echo $x && $y."</br>";
	echo $x || $y."</br>";
	echo $x !== $y."</br>";
	
	//String Operators :
	
	echo $x.$y."</br>";  //Concatenation
	echo $x.=$y."</br>"; //Concatenation assignment
	
	
	?>
	
</body>
</html>