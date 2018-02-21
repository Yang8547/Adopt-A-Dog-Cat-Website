var myVar = setInterval(myTimer ,1000);
function myTimer() {
		var d = new Date();
		var year = d.getFullYear();
		var date = d.getDate();
		var month = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
		document.getElementById("time").innerHTML = d.toLocaleTimeString()+" "+month[d.getMonth()]+" "+date+" "+year;
}

function chk(){
	var dom = document.getElementById("givePet");
	if(!dom.catOrDog[0].checked & !dom.catOrDog[1].checked){
		alert("Please choose what pet do you want to give!");
		return false;
	}
	else if(!dom.alongDog[0].checked & !dom.alongDog[1].checked){
		alert("Gets along with other dogs?")
		return false;
	}
	else if(!dom.alongCat[0].checked & !dom.alongCat[1].checked){
		alert("Gets along with other cats?")
		return false;
	}
	else if(!dom.alongchlid[0].checked & !dom.alongchlid[1].checked){
		alert("Gets along with other chlidren?")
		return false;
	}
	
	else if(document.getElementById("desccribe").value==""){
		alert("Please add some comment!")
		return false;
	}
	else if (dom.firstName.value==""){
		alert("Please enter your first name!")
		return false;
	}
	else if (dom.lastName.value==""){
		alert("Please enter your last name!")
		return false;
	}
	else if (dom.email.value==""){
		alert("Please enter your email!")
		return false;
	}
	else if (dom.email.value.search(/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/)==-1){
		alert("The format of email is not correct,please check!")
		return false;
	}
	else
		return true;
}