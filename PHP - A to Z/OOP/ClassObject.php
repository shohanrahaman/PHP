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
  <h3><?php echo "= Class | Object | Property ="; ?></h3>
 </section> 
 <section class="maincontent">
 
 
 
   <?php
     
	 class Person{
		 
		 public $name = "Shohan Rahaman";
		 public $age = 70;
		 public $phone;
		 
	 }
	 
	 $obj = new Person; //Create Object
	 echo "Name : ".$obj->name."</br>"; // -> Object Operator
	 echo "Age : ".$obj->age."</br>";
	 
	 $obj->phone = "01717000000"; //value initialize
	 echo "Phone : ".$obj->phone;
	 
	 
   ?>
   
     
   
  </section>
 <section class="footeroption">
  <h2><?php echo "www.ShoHanSazaL.com"; ?></h2>
 </section>
</div>
</body>
</html>