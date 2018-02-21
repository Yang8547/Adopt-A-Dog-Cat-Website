<!DOCTYPE html> 
<!--greet.html   Question 4  -->
<html lang = "en">
<head>
<link rel = "stylesheet" type = "text/css" href = "layout.css">
<title>Cat Care</title>
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
		<h3>Cat Basic Care</h3> 
			<p>Here are some article about basic cat care to help you for your cat!</p>
			<h5 >borrow from adoptapet.com</h5><br/><br/>
		<a href = "http://www.adoptapet.com/blog/bringing-home-your-new-cat-or-kitten/">Bringing Home Your New Cat or Kitten</a><br/>
		<a href = "http://www.adoptapet.com/blog/your-new-cat-or-kittens-first-day/">Your New Cat or Kitten’s First Day</a><br/>
		<a href = "http://www.adoptapet.com/blog/how-to-trim-your-cats-nails/">How to trim your cat’s nails</a><br/>
		<a href = "http://www.adoptapet.com/blog/how-to-pill-your-cat-or-kitten/">How to pill your cat or kitten</a><br/>
		<a href = "http://www.adoptapet.com/blog/fun-cat-games-to-keep-your-kitty-happy/">Fun Cat Games to Keep Your Kitty Active</a><br/>
		<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
   </div>
   <div id="footer">

   		<?php
     	 include"footer.php";
        ?>
   </div>
</div>

</body>
</html>