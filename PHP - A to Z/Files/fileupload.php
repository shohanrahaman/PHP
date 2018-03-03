<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>File Upload</title>
	</head>
	<body>

		<form action="" method="post" enctype="multipart/form-data">
			<input type="file" name="image">
			<input type="submit" value="submit">
		</form>

		<?php

		if(isset($_FILE['image'])){
		$filename = $_FILES['image']['name'];
		$filetmp = $_FILES['image']['tmp_name'];
		move_uploaded_file($filetmp."images/".$filename);
		echo "Image uploaded Successfully";
		}
		
		
		?>
		
	</body>
</html>