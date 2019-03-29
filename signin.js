"use strict";

window.onload=pageLoad;
function pageLoad(){
	document.getElementById("submitButton").onclick=chkNameAndPhone;
}

function chkNameAndPhone() {
  
  //id
  var myid = document.getElementById("custID").value;


	var pattern1 = /^[a-z0-9]+$/;
	var result = pattern1.test(myid);
	

	if (result==false) 
	{
		alert("please do not empty your ID");
	document.getElementById("custID").select();
    
		return false;
	}
 
 //password
  var init_value = document.getElementById("passwords").value;
  var sec_value = document.getElementById("checkpassword").value;
  if (init_value == "") {
    alert("You did not enter a password. Please enter one now");
    document.getElementById("passwords").focus();
    return false;
  }
  if (init_value != sec_value) {
    alert("The two passwords you entered are not the same. Please re-enter both now");
    document.getElementById("passwords").focus();
    document.getElementById("passwords").select();
    return false;
  }
   
	
 //name
	var myname = document.getElementById("custName").value;
	var pattern1 = /^[A-Za-z\s]+$/;
	var result = pattern1.test(myname);

	if (result==false) 
	{
	alert("please do not empty your name");
	document.getElementById("custName").select();
   
		return false;
	}
	

//phone
	var myphone = document.getElementById("phoneNum").value;
	
	var pattern1 = /\d{3}-\d{3}-\d{4}$/;
	var result = pattern1.test(myphone);
	
	if (result==false) 
	{
	alert("please do not empty your phone number or follow the example");
	document.getElementById("phoneNum").select();
	
	return false;
	}
	
//email
	var myemail = document.getElementById("email").value;
	
	var pattern1 = /^[\w\s@]+[\D]+\.[\D]+/;
	var result = pattern1.test(myemail);
	
	if (result==false) 
	{
	alert("please do not empty your e-mail or should be include '@' and .com or .edu .... ");
	document.getElementById("email").select();
	
	return false;
	}
	
}


