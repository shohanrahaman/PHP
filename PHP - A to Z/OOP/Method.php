<!doctype html>
<html>
<head>
 <title>PHP OOP Practice</title>
 <style>
  body{font-family:verdana}.phpcoding{width:900px; margin: 0 auto;background:#f1f1f1}.headeroption, .footeroption{background:#2B81D7;color:#fff;text-align:center;padding:20px;}.headeroption h2, .footeroption h2{margin:0}.maincontent{min-height:400px;padding:20px;}
 </style>
</head>
<body>

<div class="phpcoding">
 <section class="headeroption">
  <h2><?php echo "PHP oop Practice"; ?></h2>
  <h3><?php echo "= Method ="; ?></h3>
 </section> 
 <section class="maincontent">
 
 
 
   <?php
     
	 class Person{
		 
		 public $name;
		 public $age;
		 public $phone;
		 
		 //Method
		 public function displayInfo(){
			 
			 echo "Name : ".$this->name."</br>";  //this means reference of the selected object property
			 echo "Age : ".$this->age."</br>";
			 echo "Phone : ".$this->phone;	 
			 
		 }
	 }
	 
	 $obj = new Person;
	 $obj->name = "Soha Islam";
	 $obj->age = 5;
	 $obj->phone = "01670000000";
	 
	 $obj->displayInfo();
	 
   ?>
   
     
   
  </section>
 <section class="footeroption">
  <h2><?php echo "www.ShoHanSazaL.com"; ?></h2>
 </section>
</div>
</body>
</html>