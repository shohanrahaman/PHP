<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>String</title>
</head>
<body>
	<?php 
	
	function myString(){
		
		echo strlen("Hello PHP")."</br>"; //length
		echo str_word_count("Hello Php")."</br>"; //Number of words
		echo strrev("Hello PHP")."</br>"; //Reverse
		echo strpos("Hello PHP","PHP")."</br>"; //Search For a Specific Text
		echo str_replace("PHP","Java","Hello PHP"); //Replace Text
	}
	myString();
	
	?>
	
</body>
</html>