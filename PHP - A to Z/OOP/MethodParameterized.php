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
  <h3><?php echo "= Parameterized Method ="; ?></h3>
 </section> 
 <section class="maincontent">
 
 
 
   <?php
     
	 class Person{
		 
		 Public $name;
		 public $phone;
		 
		 
		 public function setInfo($n, $p){
			 
			 $this->name = $n;
			 $this->phone = $p;
			 
		 }
		 
		 public function displayInfo(){
			 
			 echo "Name : ".$this->name."</br>";
			 echo "Phone : ".$this->phone;
			 
		 }
		 
	 }
	 
	 $obj = new Person;
	 
	 $obj->setInfo("James Gosling","01717171717");
	 $obj->displayInfo();
	 
   ?>
   
     
   
  </section>
 <section class="footeroption">
  <h2><?php echo "www.ShoHanSazaL.com"; ?></h2>
 </section>
</div>
</body>
</html>