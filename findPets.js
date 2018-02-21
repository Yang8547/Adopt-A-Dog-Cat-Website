//check dog form
function chkdog(){
	var dom = document.getElementById("dog");
	if(dom.dogBreed.value=="no"){
		alert("please chioce the breed!");
		return false;
	}
	if(dom.dogAge.value =="no"){
		alert("please chioce the age!");
		return false;
	}
	if(dom.dogGender.value == "no"){
		alert("please chioce the gender!");
		return false;
	}
	if(!dom.other[0].checked & !dom.other[1].checked &!dom.other[2].checked){
	    alert("The radio button is left blank")
		return false;
	}
	
	
	else
		return true;
}
//check cat form
function chkcat(){
	var dom = document.getElementById("cat");
	if(dom.catBreed.value=="no"){
		alert("please chioce the breed!");
		return false;
	}
	if(dom.catAge.value =="no"){
		alert("please chioce the age!");
		return false;
	}
	if(dom.catGender.value == "no"){
		alert("please chioce the gender!");
		return false;
	}
	if(!dom.other[0].checked & !dom.other[1].checked &!dom.other[2].checked){
	    alert("The radio button is left blank")
		return false;
	}
	else
		return true;
}

//display time
var myVar = setInterval(myTimer ,1000);
function myTimer() {
		var d = new Date();
		var year = d.getFullYear();
		var date = d.getDate();
		var month = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
		document.getElementById("time").innerHTML = d.toLocaleTimeString()+" "+month[d.getMonth()]+" "+date+" "+year;
}