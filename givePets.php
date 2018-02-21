<!DOCTYPE html> 
<!--greet.html   Question 4  -->
<?php
session_start();


?>


<html lang = "en">
<head>
<link rel = "stylesheet" type = "text/css" href = "layout.css">
<script type = "text/javascript" src="givePets.js">
</script>

<title>Have a pet to give away</title>
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
		<li><a href= "findPets.php">Find a dog/cat</a></li>
		<li><a href= "dogCare.php">Dog Care</a></li>
		<li><a href= "catCare.php">Cat Care</a></li>
		<li><a href= "givePets.php">Have a pet to give away</a></li>
		<li><a href= "Contact.php">Contact Us</a></li>
		<li><a href= 'givePets.php?logout=1'>LogOut</a></li>
		</ul>
   </div>
   
   
   <div id="content">
   	<h3>Please register your pet here</h3>  
    <?php
      //register pet
      if(isset($_POST['give'])){
       
        $fp = fopen("availablePetInfo.txt", "a");
        $list = file("availablePetInfo.txt");
        $n = count($list)+1;

        $g_animal = $_POST['catOrDog'];
        $g_breed = $_POST['breed'];
        $g_age = $_POST['age'];
        $g_gender = $_POST['gender'];
        $g_alongDog = $_POST['alongDog'];
        $g_alongCat = $_POST['alongCat'];
        $g_alongchlid = $_POST['alongchlid'];
        $g_describe = preg_replace('/\W/',' ', $_POST['describe']);
        $g_firstName = $_POST['firstName'];
        $g_lastName = $_POST['lastName'];
        $g_email = $_POST['email'];
        $str = $n.":".$_SESSION['current'].":".$g_animal.":".$g_breed.":".$g_age.":".$g_gender.":".$g_alongDog.":".$g_alongCat.":".$g_alongchlid.":".$g_describe.":".$g_firstName.":".$g_lastName.":".$g_email."\r\n";
        fwrite($fp, $str);
        fclose($fp);
        echo "<h3>The animal register successful!</h3>";
      }

  ?>
	
    <?php  
  
		//logout
    if(isset($_GET['logout'])){   
    		
    		session_unset();
   		    session_destroy();
   		    echo "You already log out!<br/>";
   		    include('login.php');

 		 }

     //once login can open the form without login again
		else if(isset($_SESSION['current'])){
			 echo "<h3>Hello ".$_SESSION['current']."</h3>";
			 include('form.php');
		}

		//login show form otherwise ask to login
    else if(isset ($_POST['login'])){
      		$userName = $_POST['logUser'];
     		  $passWord = $_POST['logPassword'];
          if(!file_exists("login.txt")){
               echo "<script>alert('Username do not match! Please try again!')</script>";
               $fp = fopen("login.txt", "w");
               fclose($fp);
          }
          $fp = fopen("login.txt", "r");
          $list = file("login.txt");
          $match = false;
          $wrongPassword = 1;
          for($n=0; $n<count($list); $n++){
              $array = explode(":", $list[$n]);
              if($array[0]==$userName){
                if($array[1]==$passWord."\r\n"){
                   $_SESSION['current']= $userName;
                   $match = true;
                   echo "<h3>Hello</h3>"."<h3>$userName</h3>";
                   include('form.php');
                   break;
                }
                else{
                  echo "<script>alert('Wrong Password! Please try again!')</script>";
                  $wrongPassword = 0;
                  include('login.php');
                  break;
                }
              }
              
            }
            if(!$match&&$wrongPassword == 1){  
               echo "<script>alert('Username do not match! Please try again!')</script>";
               include('login.php');
            
            }
            fclose($fp);
          }
   		 else{
      			
     			 include('login.php');
    	 }
	?>
   </div>
   <div id="footer">
    <?php
      include"footer.php";
    ?>
   </div>
</div>

</body>
</html>