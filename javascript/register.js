function myFocus(element) {
  element.focus();
}  
function chkPasswords() {
  var init = document.getElementById("pass");
  var sec = document.getElementById("cpass");
  if (init.value == "") {
    alert("You did not enter a password \n" +
          "Please enter one now");
    init.focus();
    return false;
  }
  if (init.value != sec.value) {
    alert("The two passwords you entered are not the same \n" +
          "Please re-enter both now");
    init.focus();
    init.select();
    return false;
  } else
    {   
     return true;
    
    }
}

function chkPhone() {
  var myPhone = document.getElementById("phn");

  var pos = myPhone.value.search(/^\d{3}-\d{3}-\d{4}$/);

  if (pos != 0) {
    alert("The phone number you entered (" + myPhone.value +
          ") is not in the correct form. \n" +
          "The correct form is: ddd-ddd-dddd \n" +
          "Please go back and fix your phone number");
    myPhone.focus();
    myPhone.select();
    return false;
  } else{
      alert("Phone No. is in correct format");    
  return true;
  }
}

function chkEmail() {
  var myEmail = document.getElementById("Email");

  var pos = myEmail.value.search(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/);

  if (pos != 0) {
    alert("The E-mail you entered (" + myEmail.value +
          ") is not in the correct form. \n" +
          "The correct form is: xyz@domain.com \n" +
          "Please go back and fix your E-mail");
    myEmail.focus();
    myEmail.select();
    return false;
  } else{
      alert("E-mail is in correct format");    
  return true;
  }
}
function chkUserName(){
var uname=document.getElementById("UserName"); 
if (name==null || name==""){  
  alert("Name can't be blank"); 
  uname.focus();
  uname.select();
  return false;  
}
}

function validate(){
  chkUserName();
  chkEmail();
  chkPhone();
  chkPasswords();
}