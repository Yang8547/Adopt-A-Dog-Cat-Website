
var myVar = setInterval(myTimer ,1000);
function myTimer() {
		var d = new Date();
		var year = d.getFullYear();
		var date = d.getDate();
		var month = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
		document.getElementById("time").innerHTML = d.toLocaleTimeString()+" "+month[d.getMonth()]+" "+date+" "+year;
}


function chkAcc(){
		var chk = /^[0-9A-Za-z]+$/;
		var U = document.getElementById("newuser");
		if(!U.value.match(chk)){
			alert("The format of username is incorrect, please check!");
			U.select();
			U.focus();
			return false;
		}
		else
			return true;

	}

function chkPss(){
		var chkp = /^(?=.*\d)(?=.*[a-zA-Z])[0-9a-zA-Z]{4,}$/;
		var P = document.getElementById("pass");
		if(!P.value.match(chkp)){
			alert("The format of password is incorrect, please check!");
			P.select();
			P.focus();
			return false;
		}
		else
			return true;



	}