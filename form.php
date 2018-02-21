
<form id = "givePet" action = "givePets.php" method = "post">
	<fieldset class = "registerPet">
		<legend>Please fill out this form </legend>
			<span>What pet would you want to give up for adoption:<br/></span>
			<input type="radio" name = "catOrDog" value = "cat">Cat
			<input type="radio" name = "catOrDog" value = "dog">Dog
			<br/><br/>
			<span>Breed of cat or dog </span>
			<select class = "Breed" name = "breed">
			<option value = "mix breed">mix breed</option>
			<option value = "persian">Persian cat</option>
			<option value = "british">British Shorthair</option>
			<option value = "american">American Shorthair</option>
			<option value = "fold">Scottish Fold</option>
			<option value = "labrador">Labrador Retriever</option>
			<option value = "german">German Shepherd</option>
			<option value = "bull">Bulldog</option>
			<option value = "yorkshire">Yorkshire Terrier</option>
			<option value = "boxer">boxer</option>
			<option value = "pug">pug dog</option>
			</select>
			<br/><br/>
			<span>Age of pet</span>
			<select class = "age"  name = "age">
			<option value = "adult">Adult</option>
			<option value = "senior">Senior</option>
			<option value = "young">young</option>
			<option value = "baby">Baby</option>
			</select>
			<br/><br/>
			<span>Gender</span>
			<select class = "gender" name = "gender">
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
			<span>Describe your animal</span><br/>
			<textarea id = "desccribe" rows="5" cols ="30" name = "describe"></textarea>
			<br/><br/>
			<span>Owner's name</span><br/>
			<span>First name</span>
			<input type = "text" name = "firstName">
			<span>Last name</span>
			<input type = "text" name = "lastName">
			<br/><br/>
			<span>Owner's email</span>
			<input type = "email" name = "email">
			<br/><br/>
			<input type = "submit" value = "Submit"  name = "give" onclick = "return chk()">
			<input type = "reset" value = "Clear"/>
		</fieldset>
	</form>   