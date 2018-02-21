

function chkAcc(){
		var chk = /^[0-9A-Za-z]+$/;
		var U = document.getElementById("un");
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
		var P = document.getElementById("pw");
		if(!P.value.match(chkp)){
			alert("The format of password is incorrect, please check!");
			P.select();
			P.focus();
			return false;
		}
		else
			return true;



	}