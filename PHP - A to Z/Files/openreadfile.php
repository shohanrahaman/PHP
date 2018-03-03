<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Open | Read File</title>
	</head>
	<body>
		<?php

		$myfile = fopen("Hello.txt", "r") or die("File not found !");
		echo fread($myfile,filesize("Hello.txt"));

		echo fgets($myfile); //read a single line from a file
		echo fgetc($myfile); //read a single character from a file

		fclose($myfile);
		?>
		
	</body>
</html>