<!DOCTYPE html> 
<!--greet.html   Question 4  -->
<html lang = "en">
<head>
	<link rel = "stylesheet" type = "text/css" href = "layout.css">
	<title>Create an Account </title>
	<meta charset = "utf-8" />
	<script type = "text/javascript" src = "create.js">

	</script>
</head> 

<body onload = "myTimer()">
<div id="container">
   <div id="header">
		<?php
      include"header.php";
      ?>
		
   </div>
   
   <div id="sidebar">
		<ul>
		<li><a href= "index.php">Home page</a></li>
		<li><a href= "createAccount.php">Create an Account</a></li>
		<li><a href= "findPets.php">Find a dog/cat</a></li>
		<li><a href= "dogCare.php">Dog Care</a></li>
		<li><a href= "catCare.php">Cat Care</a></li>
		<li><a href= "givePets.php">Have a pet to give away</a></li>
		<li><a href= "Contact.php">Contact Us</a></li>
		<li><a href= 'givePets.php?logout=1'>LogOut</a></li>
		</ul>
   </div>
   
   
   <div id="content">
   		<?php

   			if(isset($_POST["sub"])){

   				$newUser = $_POST["user"];
   				$password = $_POST["password"];
   				$file = "login.txt";

   				//check username exist or not
   				if(!file_exists($file)){
   					$fp = fopen($file, "a");
   					$str = $newUser.":".$password."\r\n";
   					fwrite($fp, $str);
   					fclose($fp);
   				}
   				//if username exist pop up an alert
   				else{
   					$fp = fopen($file, "r");
   					$list = file($file);
   					$exist = false;
   					for($n=0; $n<count($list); $n++){
   						$array = explode(":", $list[$n]);
   						if($array[0]==$newUser){
   							echo "<script>alert('Username already exist! '+' Please change another username!')</script>";
   							$exist = true;
   							fclose($fp);
   						}
   					}
   					//if user name is unique, write into the file
   					if(!$exist){
   						$f = fopen($file, "a");
   						$str = $newUser.":".$password."\r\n";
   						fwrite($f, $str);
   						echo "<br/><h2>Hello ".$newUser."! Your account was successfully created and you are now ready to login whenever you are ready!</h2><br/><br/>" ;
   						fclose($f);
   					}


   				}
   				 
   			}

   		?>

		<form action = "createAccount.php" method = "post">
			<h3>Create a new account</h3>
			username: <input type = "text" id = "newuser" name = "user" onblur = "chkAcc()"/>
			<p>(username can contain letters (both upper and lower
				case) and digits only)</p>
			<br/>

			password: <input type = "password" id = "pass" name = "password" onblur = "chkPss()" />
			<p>(password must be at least 4 characters long
				(characters are to be letters and digits only), have at least one letter
				and at least one digit)</p>
			<br/><br/>

			<input type = "submit" value ="create" name = "sub" onclick = "return (chkAcc() && chkPss())" >
			<input type ="reset" value = "reset">

		</form>
		<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
   </div>
   <div id="footer">
      <?php
      include"footer.php";
      ?>
   </div>
</div>

</body>
</html>