<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Destructor</title>
</head>
<body>
	<?php 
		class UserData{
			
			public $userName;
			public $userId;
			
			
			public function __construct($userName, $userId){
				
				$this->userName = $userName;
				$this->userId = $userId;
				
				echo "user name {$this->userName} and user id {$this->userId}";
				
			}
			
			public function __destruct(){
				unset($this->userName);
				unset($this->userId);
				
			}
			
		}
		
		$ur = new UserData("Shohan rahaman","101");
	
	
	
	
	?>
</body>
</html>