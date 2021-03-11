
function a(e){
	e.stopPropagation();
	var1=document.getElementById('inc');
	if (var1<0)
		alert("Income can not be negative");
}
function b(e){
	e.stopPropagation();
	var1=document.getElementById('exp');
	if (var1<0)
		alert("Epense can not be negative");
}
