<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Create | Write File</title>
	</head>
	<body>
		<?php
		
		$myfile = fopen("createmew.txt", "w") or die("Unable to open file!");
		$txt = "Shohan Rahaman\n";
		fwrite($myfile, $txt);
		fclose($myfile);
		
		?>
		
	</body>
</html>