<!DOCTYPE html> 
<!--greet.html   Question 4  -->
<html lang = "en">
<head>
<link rel = "stylesheet" type = "text/css" href = "layout.css">
<script type = "text/javascript" src="browsePets.js">
</script>
<title>Browse Available Pets</title>
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
   	<h3>Searching result</h3>
   <?php
    //find dog
   		if(isset($_GET['SearchDog'])){
   			$fBreed = $_GET['dogBreed'];
   			$fAge = $_GET['dogAge'];
   			$fGender = $_GET['dogGender'];
   			$fAlongDog = $_GET['alongDog'];
   			$fAlongCat = $_GET['alongCat'];
   			$fAlongChild = $_GET['alongchlid'];

   			if(!file_exists("availablePetInfo.txt")){
   				echo "<p>Sorry! no result~</p>";
   			}
   			else{
   			  	$fp = fopen("availablePetInfo.txt", "r");
   				$list = file("availablePetInfo.txt");
   			
   				if(count($list)==0){
   					echo "<p>Sorry! no result~</p>";
   				}
   				 
   				else{
   				 	$dog = false;
   				 	$alongwith = false;
   				 	$any = false;
   				 	for($n=0;$n<count($list);$n++){
   				 		$array = explode(":", $list[$n]);

   				 		  $g_animal = $array[2];
        		 		$g_breed = $array[3];
       			 		$g_age = $array[4];
        		 		$g_gender = $array[5];
       			 		$g_alongDog = $array[6];
      			 		$g_alongCat = $array[7];
        		 		$g_alongchlid = $array[8];
        		 		$g_describe = $array[9];

        		 			if($g_animal=="dog"){
        		 				$dog=true;
        						
        		 				if($g_alongDog==$fAlongDog&&$g_alongCat==$fAlongCat&&$g_alongchlid==$fAlongChild){
        		 					$alongwith=true;
        		 					if($fBreed=="any"&&$fAge=="any"&&$fGender=="any"){
        		 						echo ($g_animal."<br/> Breed: ".$g_breed." Age: ".$g_age." Gender: ".$g_gender.
        		 							"<br/> Get along with other dog:".$g_alongDog."<br/> Get along with other cat: ".$g_alongCat."<br/> Get along with other children: ".$g_alongchlid.
        		 							"<br/> Describtion:<br/> ".$g_describe."<hr/><br/>");
        		 						$any = true;

        		 					}
        		 					if($fBreed!="any"&&$fAge=="any"&&$fGender=="any"){
        		 						if($g_breed==$fBreed){

        		 							echo ($g_animal."<br/> Breed: ".$g_breed." Age: ".$g_age." Gender: ".$g_gender.
        		 							"<br/> Get along with other dog:".$g_alongDog."<br/> Get along with other cat: ".$g_alongCat."<br/> Get along with other children: ".$g_alongchlid.
        		 							"<br/> Describtion:<br/> ".$g_describe."<hr/><br/>");
        		 							$any = true;
        		 						}

        		 					}
        		 					if($fBreed!="any"&&$fAge!="any"&&$fGender=="any"){
        		 						if($g_breed==$fBreed&&$g_age==$fAge){

        		 							echo ($g_animal."<br/> Breed: ".$g_breed." Age: ".$g_age." Gender: ".$g_gender.
        		 							"<br/> Get along with other dog:".$g_alongDog."<br/> Get along with other cat: ".$g_alongCat."<br/> Get along with other children: ".$g_alongchlid.
        		 							"<br/> Describtion:<br/> ".$g_describe."<hr/><br/>");
        		 							$any = true;
        		 						}

        		 					}
        		 					if($fBreed!="any"&&$fAge!="any"&&$fGender!="any"){
        		 						if($g_breed==$fBreed&&$g_age==$fAge&&$g_gender==$fGender){

        		 							echo ($g_animal."<br/> Breed: ".$g_breed." Age: ".$g_age." Gender: ".$g_gender.
        		 							"<br/> Get along with other dog:".$g_alongDog."<br/> Get along with other cat: ".$g_alongCat."<br/> Get along with other children: ".$g_alongchlid.
        		 							"<br/> Describtion:<br/> ".$g_describe."<hr/><br/>");
        		 							$any = true;
        		 						}

        		 					}
        		 					if($fBreed!="any"&&$fAge=="any"&&$fGender!="any"){
        		 						if($g_breed==$fBreed&&$g_gender==$fGender){

        		 							echo ($g_animal."<br/> Breed: ".$g_breed." Age: ".$g_age." Gender: ".$g_gender.
        		 							"<br/> Get along with other dog:".$g_alongDog."<br/> Get along with other cat: ".$g_alongCat."<br/> Get along with other children: ".$g_alongchlid.
        		 							"<br/> Describtion:<br/> ".$g_describe."<hr/><br/>");
        		 							$any = true;
        		 						}

        		 					}
        		 					if($fBreed=="any"&&$fAge!="any"&&$fGender=="any"){
        		 						if($g_age==$fAge){

        		 							echo ($g_animal."<br/> Breed: ".$g_breed." Age: ".$g_age." Gender: ".$g_gender.
        		 							"<br/> Get along with other dog:".$g_alongDog."<br/> Get along with other cat: ".$g_alongCat."<br/> Get along with other children: ".$g_alongchlid.
        		 							"<br/> Describtion:<br/> ".$g_describe."<hr/><br/>");
        		 							$any = true;
        		 						}

        		 					}
        		 					if($fBreed=="any"&&$fAge!="any"&&$fGender!="any"){
        		 						if($g_age==$fAge&&$g_gender==$fGender){

        		 							echo ($g_animal."<br/> Breed: ".$g_breed." Age: ".$g_age." Gender: ".$g_gender.
        		 							"<br/> Get along with other dog:".$g_alongDog."<br/> Get along with other cat: ".$g_alongCat."<br/> Get along with other children: ".$g_alongchlid.
        		 							"<br/> Describtion:<br/> ".$g_describe."<hr/><br/>");
        		 							$any = true;
        		 						}

        		 					}
        		 					if($fBreed=="any"&&$fAge=="any"&&$fGender!="any"){
        		 						if($g_gender==$fGender){

        		 							echo ($g_animal."<br/> Breed: ".$g_breed." Age: ".$g_age." Gender: ".$g_gender.
        		 							"<br/> Get along with other dog:".$g_alongDog."<br/> Get along with other cat: ".$g_alongCat."<br/> Get along with other children: ".$g_alongchlid.
        		 							"<br/> Describtion:<br/> ".$g_describe)."<hr/><br/>";
        		 							$any = true;
        		 						}

        		 					}

        		 				}

        					}

   				    }	//end for
   					if(!$dog||!$alongwith||!$any){
   					echo "<p>Sorry! no result~</p>";
   					}

   				}

   			} //end 
   		}//end
   ?>

   <?php
   //find cat
   		if(isset($_GET['searchCat'])){

   			$fBreed = $_GET['catBreed'];
   			$fAge = $_GET['catAge'];
   			$fGender = $_GET['catGender'];
   			$fAlongDog = $_GET['alongDog'];
   			$fAlongCat = $_GET['alongCat'];
   			$fAlongChild = $_GET['alongchlid'];
   		if(!file_exists("availablePetInfo.txt")){
   				echo "<p>Sorry! no result~</p>";
   			}
   			else{
   			  	$fp = fopen("availablePetInfo.txt", "r");
   				$list = file("availablePetInfo.txt");
   			
   				if(count($list)==0){
   					echo "<p>Sorry! no result~</p>";
   				}
   				 
   				else{
   				 	$dog = false;
   				 	$alongwith = false;
   				 	$any = false;
   				 	for($n=0;$n<count($list);$n++){
   				 		$array = explode(":", $list[$n]);

   				 		$g_animal = $array[2];
        		 		$g_breed = $array[3];
       			 		$g_age = $array[4];
        		 		$g_gender = $array[5];
       			 		$g_alongDog = $array[6];
      			 		$g_alongCat = $array[7];
        		 		$g_alongchlid = $array[8];
        		 		$g_describe = $array[9];

        		 			if($g_animal=="cat"){
        		 				$dog=true;
        						
        		 				if($g_alongDog==$fAlongDog&&$g_alongCat==$fAlongCat&&$g_alongchlid==$fAlongChild){
        		 					$alongwith=true;
        		 					if($fBreed=="any"&&$fAge=="any"&&$fGender=="any"){
        		 						echo ($g_animal."<br/> Breed: ".$g_breed." Age: ".$g_age." Gender: ".$g_gender.
        		 							"<br/> Get along with other dog:".$g_alongDog."<br/> Get along with other cat: ".$g_alongCat."<br/> Get along with other children: ".$g_alongchlid.
        		 							"<br/> Describtion:<br/> ".$g_describe."<hr/><br/>");
        		 						$any = true;

        		 					}
        		 					if($fBreed!="any"&&$fAge=="any"&&$fGender=="any"){
        		 						if($g_breed==$fBreed){

        		 							echo ($g_animal."<br/> Breed: ".$g_breed." Age: ".$g_age." Gender: ".$g_gender.
        		 							"<br/> Get along with other dog:".$g_alongDog."<br/> Get along with other cat: ".$g_alongCat."<br/> Get along with other children: ".$g_alongchlid.
        		 							"<br/> Describtion:<br/> ".$g_describe."<hr/><br/>");
        		 							$any = true;
        		 						}

        		 					}
        		 					if($fBreed!="any"&&$fAge!="any"&&$fGender=="any"){
        		 						if($g_breed==$fBreed&&$g_age==$fAge){

        		 							echo ($g_animal."<br/> Breed: ".$g_breed." Age: ".$g_age." Gender: ".$g_gender.
        		 							"<br/> Get along with other dog:".$g_alongDog."<br/> Get along with other cat: ".$g_alongCat."<br/> Get along with other children: ".$g_alongchlid.
        		 							"<br/> Describtion:<br/> ".$g_describe."<hr/><br/>");
        		 							$any = true;
        		 						}

        		 					}
        		 					if($fBreed!="any"&&$fAge!="any"&&$fGender!="any"){
        		 						if($g_breed==$fBreed&&$g_age==$fAge&&$g_gender==$fGender){

        		 							echo ($g_animal."<br/> Breed: ".$g_breed." Age: ".$g_age." Gender: ".$g_gender.
        		 							"<br/> Get along with other dog:".$g_alongDog."<br/> Get along with other cat: ".$g_alongCat."<br/> Get along with other children: ".$g_alongchlid.
        		 							"<br/> Describtion:<br/> ".$g_describe."<hr/><br/>");
        		 							$any = true;
        		 						}

        		 					}
        		 					if($fBreed!="any"&&$fAge=="any"&&$fGender!="any"){
        		 						if($g_breed==$fBreed&&$g_gender==$fGender){

        		 							echo ($g_animal."<br/> Breed: ".$g_breed." Age: ".$g_age." Gender: ".$g_gender.
        		 							"<br/> Get along with other dog:".$g_alongDog."<br/> Get along with other cat: ".$g_alongCat."<br/> Get along with other children: ".$g_alongchlid.
        		 							"<br/> Describtion:<br/> ".$g_describe."<hr/><br/>");
        		 							$any = true;
        		 						}

        		 					}
        		 					if($fBreed=="any"&&$fAge!="any"&&$fGender=="any"){
        		 						if($g_age==$fAge){

        		 							echo ($g_animal."<br/> Breed: ".$g_breed." Age: ".$g_age." Gender: ".$g_gender.
        		 							"<br/> Get along with other dog:".$g_alongDog."<br/> Get along with other cat: ".$g_alongCat."<br/> Get along with other children: ".$g_alongchlid.
        		 							"<br/> Describtion:<br/> ".$g_describe."<hr/><br/>");
        		 							$any = true;
        		 						}

        		 					}
        		 					if($fBreed=="any"&&$fAge!="any"&&$fGender!="any"){
        		 						if($g_age==$fAge&&$g_gender==$fGender){

        		 							echo ($g_animal."<br/> Breed: ".$g_breed." Age: ".$g_age." Gender: ".$g_gender.
        		 							"<br/> Get along with other dog:".$g_alongDog."<br/> Get along with other cat: ".$g_alongCat."<br/> Get along with other children: ".$g_alongchlid.
        		 							"<br/> Describtion:<br/> ".$g_describe."<hr/><br/>");
        		 							$any = true;
        		 						}

        		 					}
        		 					if($fBreed=="any"&&$fAge=="any"&&$fGender!="any"){
        		 						if($g_gender==$fGender){

        		 							echo ($g_animal."<br/> Breed: ".$g_breed." Age: ".$g_age." Gender: ".$g_gender.
        		 							"<br/> Get along with other dog:".$g_alongDog."<br/> Get along with other cat: ".$g_alongCat."<br/> Get along with other children: ".$g_alongchlid.
        		 							"<br/> Describtion:<br/> ".$g_describe."<hr/><br/>");
        		 							$any = true;
        		 						}

        		 					}
        		 				}
        					}

   				    }	//end for

   					if(!$dog||!$alongwith||!$any){
   					echo "<p>Sorry! no result~</p>";
   					}

   				}
   	} //end 

   		}
?>
		
    <a href="findPets.php"><h3>return</h3></a>
		<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/> 
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