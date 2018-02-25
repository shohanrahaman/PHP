<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Class, Method, Object</title>
</head>
<body>
	<?php
	class Person{
		
		public $name; // global variable
		public $age;
		
		
		public function personName($value){ // function
			
			echo "Name : ".$this->name = $value.'</br>';  // [->] object operator
			
		}
		
		public function personAge($value2){
			echo "Age : ".$this->age = $value2;
			
		}
		
	}
	
	$person = new Person; // create object
	$person->personName("shohan rahaman");
	$person->personAge(50);
	
	?>
	
</body>
</html>