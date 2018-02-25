<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Constructor</title>
</head>
<body>
	<?php
	
	
	class Person{
	
		public $name;
		public $age;
		
		public function __construct($name, $age){
			
			$this->name = $name;
			$this->age = $age;
			
		}
		
		
		public function personDetails(){
			echo "Person name is {$this->name} and person age is {$this->age}";
			
		}
	
	}
	
	$person = new Person("soha","03");
	
	$person->personDetails();
	
	?>
	
</body>
</html>