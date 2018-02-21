<!DOCTYPE html> 
<!--greet.html   Question 4  -->
<html lang = "en">
<head>
	<link rel = "stylesheet" type = "text/css" href = "layout.css">
	<title>Adopt a Dog/Cat </title>
	<meta charset = "utf-8" />
	<script type = "text/javascript" src="index.js">
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
		<h1>Welcome to YA YA Animal Shelter</h1>
		<p>The YA YA Animal Shelter has wonderful pets waiting to be welcomed into a good home. 
		If you are looking to adopt a new best friend, please visit our Shelter.<br/>
		Our purpose is clear: to save the animals that come to us, and to find adoptive forever homes for them. 
		</p>
		<h2>Featured Pets:</h2>
		<table class = "pic">
			<tr>
			<td><a href = "" title = "check Harley"><img  src = "harley.jpg" alt = "harley"/><br/></a> <p> Harley<br/> Male, Adult</p></td>
			<td><a href = "" title = "check Honey"><img  src = "honey.jpg" alt = "honey"/> <br/></a><p>Honey<br/> Male, Adult</p></td>
			<td><a href = "" title = "check Moush"><img  src = "moush.jpg" alt = "honey"/> <br/></a> <p>Moush<br/> Female, Adult</p></td>
			<td><a href = "" title = "check Suki"><img  src = "suki.jpg" alt = "honey"/> <br/></a><p>Moush<br/>Female, Adult</p></td>
			</tr>
		</table>
		<p class="borrow">Picture borrow from: </p>
		<table class = "borrow">
		<tr>
		<td><a class=" borrow" href = "http://www.animalrescuenetwork.org/">Animal Rescue Network</a></td>
		<td><a class=" borrow" href = "https://www.crd.bc.ca/service/animals-pets/pets-for-adoption">CRD</a></td>
		<td><a class=" borrow" href = "http://www.adoptapet.com/">Adopt a Pet</a></td>
		</tr>
		</table>
		
   </div>
   <div id="footer">
   	<?php
      include"footer.php";
    ?>
   </div>
</div>

</body>
</html>