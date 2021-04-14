const signUpButton = document.getElementById('addIncome');
const signInButton = document.getElementById('addExpense');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});

function checkINCOME(){
	var incField = document.getElementById("income");
	if(incField.value >= 1){
		incField.setCustomValidity("");
	}else{
		incField.setCustomValidity("Income Can't be below 1");
	}
}

function checkIDATE(){
	var dateField = document.getElementById("idate");
	console.log(dateField.value());
	var splitDate = dateField.value.split("-");
	var cdate = new Date();
	var cmonth = cdate.getMonth() + 1;
	var cyear = cdate.getFullYear();
	var imonth = parseInt(splitDate[1]);
	var iyear = parseInt(splitDate[0]);
	if(imonth==cmonth && iyear==cyear){
		dateField.setCustomValidity("");
	}else{
		dateField.setCustomValidity("You can enter Income for current month only");
	}
}

function checkEDATE(){
	var dateField = document.getElementById("edate");
	var splitDate = dateField.value.split("-");
	var cdate = new Date();
	var cmonth = cdate.getMonth() + 1;
	var cyear = cdate.getFullYear();
	var emonth = parseInt(splitDate[1]);
	var eyear = parseInt(splitDate[0]);
	if(emonth==cmonth && eyear==cyear){
		dateField.setCustomValidity("");
	}else{
		dateField.setCustomValidity("You can enter Expense for current month only");
	}
}

function checkEXPENSE(){
	var expField = document.getElementById("expense");
	if(expField.value >= 1){
		expField.setCustomValidity("");
	}else{
		expField.setCustomValidity("Expense Can't be below 1");
	}
}
window.onload = function () {
    document.getElementById("income").oninput = checkINCOME;
    document.getElementById("expense").oninput = checkEXPENSE;
    document.getElementById("idate").oninput = checkIDATE;
    document.getElementById("idate").onchange = checkIDATE;
    document.getElementById("edate").oninput = checkEDATE;
}