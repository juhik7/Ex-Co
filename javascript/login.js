const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});

function checkAGE(){
	var ageField=document.getElementById("rage");
	var age = ageField.value;
	if (age>=13) {
		ageField.setCustomValidity("");
	}else if (age>=1) {
		ageField.setCustomValidity("User should be above 13 years of age");
	}else{
		ageField.setCustomValidity("Please fill out this field");
	}

}

function checkPASS(){
	var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
	var passField = document.getElementById("rpass");
	if(passField.value.match(passw)){
		passField.setCustomValidity("");
	}else{
		passField.setCustomValidity("Password must be between 6 to 20 characters which contain at least one numeric digit, one uppercase and one lowercase letter");
	}
}


function checkCPASS(){
	var passField = document.getElementById("rpass");
	var passCField = document.getElementById("rcpass");
	if(passField.value == passCField.value){
		passCField.setCustomValidity("");
	}else{
		passCField.setCustomValidity("Confirm Password & Password not matching");
	}
}
window.onload = function () {
    document.getElementById("rage").oninput = checkAGE;
    document.getElementById("rpass").oninput = checkPASS;
    document.getElementById("rcpass").oninput = checkCPASS;
    document.getElementById("rage").onchange = checkAGE;
    document.getElementById("rpass").onchange = checkPASS;
    document.getElementById("rcpass").onchange = checkCPASS;
}