var myVar = setInterval(myTimer ,1000);
function myTimer() {
		var d = new Date();
		var year = d.getFullYear();
		var date = d.getDate();
		var month = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
		document.getElementById("time").innerHTML = d.toLocaleTimeString()+" "+month[d.getMonth()]+" "+date+" "+year;
}