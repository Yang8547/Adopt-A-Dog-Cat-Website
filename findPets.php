<!DOCTYPE html> 
<!--greet.html   Question 4  -->
<html lang = "en">
<head>
<link rel = "stylesheet" type = "text/css" href = "layout.css">
<script type = "text/javascript" src="findPets.js">
</script>
<title>Find a dog/cat</title>
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
		<li><a href= "findPets.php">Find a dog/cat</a></li>
		<li><a href= "dogCare.php">Dog Care</a></li>
		<li><a href= "catCare.php">Cat Care</a></li>
		<li><a href= "givePets.php">Have a pet to give away</a></li>
		<li><a href= "Contact.php">Contact Us</a></li>
		<li><a href= 'givePets.php?logout=1'>LogOut</a></li>
		</ul>
   </div>
   
   
   <div id="content">
	<form id = "dog" action = "browsePets.php" method = "get">
		<fieldset class = "dog">
		<legend>If you want to choose a dog, please fill this form</legend>
			<span>Breed of dog: </span>
			<select  class = "dog" name = "dogBreed">
			<option value = "no"></option>
			<option value = "any">doesn't matter</option>
			<option value = "labrador">Labrador Retriever</option>
			<option value = "german">German Shepherd</option>
			<option value = "bull">Bulldog</option>
			<option value = "yorkshire">Yorkshire Terrier</option>
			<option value = "boxer">boxer</option>
			<option value = "pug">pug dog</option>
			</select>
			<br/><br/>
			<span>Perferred age of dog</span>
			<select  class = "dog" name = "dogAge">
			<option value = "no"></option>
			<option value = "any">doesn't matter</option>
			<option value = "adult">Adult</option>
			<option value = "senior">Senior</option>
			<option value = "young">young</option>
			<option value = "baby">Puppy</option>
			</select>
			<br/><br/>
			<span>Perferred gender</span>
			<select class = "dog" name = "dogGender">
			<option value = "no"></option>
			<option value = "any">doesn't matter</option>
			<option value = "male">Male</option>
			<option value = "femal">Femal</option>
			</select>
			<br/><br/>
			<span>Gets along with other dogs? </span>
			<input type = "radio" name = "alongDog" value = "yes">YES
			<input type = "radio" name = "alongDog" value = "no">NO
			<br/><br/>
			<span>Gets along with other cats? </span>
			<input type = "radio" name = "alongCat" value = "yes">YES
			<input type = "radio" name = "alongCat" value = "no">NO
			<br/><br/>
			<span>Suitable for a family with small children? </span>
			<input type = "radio" name = "alongchlid" value = "yes">YES
			<input type = "radio" name = "alongchlid" value = "no">NO
			<br/><br/>
			<input type = "submit" value = "Submit" name = "SearchDog" onclick=" return chkdog()">
			<input type = "reset" value = "Clear"/>
		
		
		</fieldset>
	</form>
	<form id = "cat" action = "browsePets.php" method = "get">
	<fieldset class = "cat">
		<legend>If you want to choose a cat, please fill this form</legend>
			<span>Breed of cat: </span>
			<select class = "cat" name = "catBreed">
			<option value = "no"></option>
			<option value = "any">doesn't matter</option>
			<option value = "persian">Persian cat</option>
			<option value = "british">British Shorthair</option>
			<option value = "american">American Shorthair</option>
			<option value = "fold">Scottish Fold</option>
			</select>
			<br/><br/>
			<span>Perferred age of cat</span>
			<select class = "cat"  name = "catAge">
			<option value = "no"></option>
			<option value = "any">doesn't matter</option>
			<option value = "adult">Adult</option>
			<option value = "senior">Senior</option>
			<option value = "young">young</option>
			<option value = "baby">Kitty</option>
			</select>
			<br/><br/>
			<span>Perferred gender</span>
			<select class = "cat" name = "catGender">
			<option value = "no"></option>
			<option value = "any">doesn't matter</option>
			<option value = "male">Male</option>
			<option value = "femal">Femal</option>
			</select>
			<br/><br/>
			<span>Gets along with other dogs? </span>
			<input type = "radio" name = "alongDog" value = "yes">YES
			<input type = "radio" name = "alongDog" value = "no">NO
			<br/><br/>
			<span>Gets along with other cats? </span>
			<input type = "radio" name = "alongCat" value = "yes">YES
			<input type = "radio" name = "alongCat" value = "no">NO
			<br/><br/>
			<span>Suitable for a family with small children? </span>
			<input type = "radio" name = "alongchlid" value = "yes">YES
			<input type = "radio" name = "alongchlid" value = "no">NO
			<br/><br/>
			<input type = "submit" value = "Submit"  name = "searchCat" onclick="return chkcat()">
			<input type = "reset" value = "Clear"/>
		</fieldset>
	</form>
   </div>
   
   
   <div id="footer">
   	<?php
   		include"footer.php";
   	?>
   </div>
</div>

</body>
</html>