<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Date | Include</title>
	</head>
	<body>
		<?php include 'header.php';?> //include

		<?php
		echo "Today is ".date(d-m-Y);
		echo "Today is " . date("l"); //Sunday

		date_default_timezone_set("Asia/Dhaka"); //TimeZone
		echo "The time is " . date("h:i:sa");
		?>

		<?php include 'footer.php';?>
		
	</body>
</html>