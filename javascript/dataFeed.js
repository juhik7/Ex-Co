function a(){
	income = document.getElementById("inc").value;
	if(income<0){
		alert("Income Can't Be Negative");
	}
	console.log("This Function Has Been Called");
}
function b(){
	expense = document.getElementById('exp').value;
	if (expense<0)
	{
		alert("Epense can not be negative");
	}
}
