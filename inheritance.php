<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Inheritance</title>
</head>
<body>
	<?php 
		
		class UserData{
			
			public $name;
			Public $age;
			
			
			public function __construct($name, $age){
				
				$this->name = $name;
				$this->age = $age;
			}
			
			public function display(){
				
				echo "Name : ".$this->name."</br>";
				echo "Age : ".$this->age."</br>";
				
			}
			
			
		}
		
		// Using final keyword, u can prevent Extent & Override.
		
	
		class Admin extends UserData{  //inheritance
			public $address = "bangladesh";
			
			public function display(){
				
				echo "Name : ".$this->name."</br>";  // $this->display();
				echo "Age : ".$this->age."</br>";	// Override
				echo "Address : ".$this->address;
				
			}
			
		}
	
		$ad = new Admin("Shohan","70");
		$ad->display();
	
	
	?>
</body>
</html>