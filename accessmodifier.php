<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Access Modifiers</title>
</head>
<body>
	<?php 
	
	// public -- anywhere
	// private -- only class
	// protected -- class & sub class
	
	class UserData{
		public $name = "Mr. Rahaman";
		private $age = "50";
		protected $address = "Bangladesh";
		
		public function display(){
			
			echo "Name : ".$this->name;
			echo "Age : ".$this->age;
			echo "Address : ".$this->address;
			
		}
		
	}
	
	
	class Admin extends UserData{
		
		public function display2(){
			
			echo $this->age; // private can't access from sub class
			
		}
		
	}
	
	$ad = new Admin();
	
	$ad->display();
	
	$ad->display2();
	
	echo $add->address; // protected can't access from class & sub class
	
	
	?>
</body>
</html>