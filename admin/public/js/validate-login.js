/* Validate Form  Register*/
function checksub(){
	var em = document.cForm.inputEmailAddress.value;
	var pw = document.cForm.inputPassword.value;
	
	
	/* Email valid */
	var atposition = em.indexOf("@");
	var dotposition = em.lastIndexOf(".");
	if (atposition < 1 || dotposition < (atposition + 2) || (dotposition + 2) >= em.length) {
		document.getElementById('inputEmailAddress').style.borderColor = 'red';
		document.getElementById('checkem').style.color = "red";
		document.getElementById('checkem').innerHTML = ' Invalidate. &#10005;';
		return false;
	}	
	/* Password Confirm */
			
	
			
}