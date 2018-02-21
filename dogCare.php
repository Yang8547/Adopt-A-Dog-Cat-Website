<!DOCTYPE html> 
<!--greet.html   Question 4  -->
<html lang = "en">
<head>
<link rel = "stylesheet" type = "text/css" href = "layout.css">
<title>Dog Care</title>
<meta charset = "utf-8" />
</head> 

<body>
<div id="container">
   <div id="header">
		<?php
			include "header.php";
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
		<h3>Dog Basic Care</h3> 
			<p>Here are some article about basic dog care to help you for your dog!</p>
			<h5 >borrow from adoptapet.com</h5><br/><br/>
		<a href = "http://www.adoptapet.com/blog/top-reason-to-spay-or-neute-your-dog-or-cat/">Top Reasons to Spay or Neuter your Dog</a><br/>
		<a href = "http://www.adoptapet.com/blog/how-to-raise-a-friendly-puppy/">How to Raise a Friendly Puppy </a><br/>
		<a href = "http://www.adoptapet.com/blog/how-to-crate-train-your-puppy-or-dog/">How to Crate Train your Puppy or Dog</a><br/>
		<a href = "http://www.adoptapet.com/blog/pay-attention-to-what-you-want-not-what-you-dont/">Pay Attention to What You Want – Not What You Don’t!</a><br/>
		<a href = "http://www.adoptapet.com/blog/how-to-trim-your-dogs-nails/">How to trim your dog’s nails</a><br/>
		<a href = "http://www.adoptapet.com/blog/how-to-give-a-dog-a-bath/">How to give a dog a bath</a><br/>
		<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
   </div>
   <div id="footer">\
   	<?php
   		include"footer.php";
   	?>
   </div>
</div>

</body>
</html>