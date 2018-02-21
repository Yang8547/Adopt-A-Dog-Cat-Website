
<script type = "text/javascript" src = "login.js">

</script>

<form action = "givePets.php" method = "post">
	
	<p>Please Login</p>
	username: <input type = "text"  id = "un" name = "logUser" onblur = "chkAcc()"/>
	<br/><br/>

	password: <input type = "password" id = "pw" name = "logPassword" onblur = "chkPss()" />
			
	<br/><br/>

	<input type = "submit" value =" login " name = "login" >
	<input type="button" value="create account" onclick="window.location.href='createAccount.php';"/>
	<input type = "reset" value = "reset">
</form>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
