<!DOCTYPE html> 
<!--greet.html   Question 4  -->
<html lang = "en">
<head>
<link rel = "stylesheet" type = "text/css" href = "layout.css">
<title>Contact Us</title>
<meta charset = "utf-8" />
</head> 

<body>
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
		<li><a href= "browsePets.php">Browse Available Pets</a></li>
		<li><a href= "findPets.php">Find a dog/cat</a></li>
		<li><a href= "dogCare.php">Dog Care</a></li>
		<li><a href= "catCare.php">Cat Care</a></li>
		<li><a href= "givePets.php">Have a pet to give away</a></li>
		<li><a href= "Contact.php">Contact Us</a></li>
		<li><a href= 'givePets.php?logout=1'>LogOut</a></li>
		</ul>
   </div>
   
   
   <div id="content">
	
		<h3>For contact us</h3> 
		<p>Name: Yang An</p>
		<p>Student ID: 27878699</p>
		<p>Email: anyang47@hotmail.com</p>
		<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
   
   </div>
   <div id="footer">
   	<?php
   	include"footer.php";
   	?>
   </div>
</div>

</body>
</html>