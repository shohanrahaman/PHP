<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>A r r a y</title>
</head>
<body>
	<?php 
	
		//3 types of array in PHP.
				//Indexed Array
				$season = array("summer","winter","spring","autumn");
				foreach ($season as $x) {
					echo $x."<br>";
				}
				$season[0]="shohan";
				$season[1]="shamim";
				$season[2]="sazal";
				$season[3]="saiful";
				echo "Season are: $season[0], $season[1], $season[2] and $season[3]";

				//Associative Array
				$salary = array("rafin"=>"50000","rakin"=>"60000","rubab"=>"70000");
				foreach ($salary as $k => $v) {
					echo "Key : ".$k." Value : ".$v."<br/>";
				}
				
				//Multidimensional Array
				$emp = array
				(
				array(1,"labib",400000),
				array(2,"rajim",500000),
				array(3,"tubin",300000)
				);
				
				for ($row = 0; $row < 3; $row++) {
				for ($col = 0; $col < 3; $col++) {
				echo $emp[$row][$col]."  ";
				}
				echo "<br/>";
				}
	?>
	
</body>
</html>