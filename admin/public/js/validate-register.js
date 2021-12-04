/* Validate Form  Register*/
function validatesub(){
	var fn = document.reForm.inputFirstName.value;
	var ln = document.reForm.inputLastName.value;
	var em = document.reForm.inputEmailAddress.value;
	var pw = document.reForm.inputPassword.value;
	var rpw = document.reForm.inputConfirmPassword.value;
	var letters = /^[A-Za-z]+$/;
	
	
	/* First name */
	if(document.reForm.inputFirstName.value.match(letters)){
		document.getElementById('inputFirstName').style.borderColor = "green";
        document.getElementById('checkfn').style.color = "green";
		document.getElementById('checkfn').innerHTML = ' &#10004;';
	}else{
		document.getElementById('inputFirstName').style.borderColor = "red";
		document.getElementById('checkfn').style.color = "red";
		document.getElementById('checkfn').innerHTML = ' Invalidte name (không dấu)!! &#10005;';
		document.reForm.inputFirstName.focus() ;
		return false;
	}
			
	/* Last name */
	if(document.reForm.inputLastName.value.match(letters)){
		document.getElementById('inputLastName').style.borderColor = "green";
        document.getElementById('checkln').style.color = "green";
		document.getElementById('checkln').innerHTML = ' &#10004;';
	}else{
		document.getElementById('inputLastName').style.borderColor = "red";
		document.getElementById('checkln').style.color = "red";
		document.getElementById('checkln').innerHTML = ' Invalidte name (không dấu)!! &#10005;';
		document.reForm.inputFirstName.focus() ;
		return false;
	}
	
	/* Email valid */
	var atposition = em.indexOf("@");
	var dotposition = em.lastIndexOf(".");
	if (atposition < 1 || dotposition < (atposition + 2) || (dotposition + 2) >= em.length) {
		document.getElementById('inputEmailAddress').style.borderColor = 'red';
		document.getElementById('checkem').style.color = "red";
		document.getElementById('checkem').innerHTML = ' Invalidate e-mail address. &#10005;';
		return false;
	}else{
		document.getElementById('inputEmailAddress').style.borderColor = "green";
		document.getElementById('checkem').style.color = "green";
		document.getElementById('checkem').innerHTML = ' &#10004;';
	}
	
	/* Password Length */
	if (document.reForm.inputPassword.value.length === 0) {
		document.getElementById('chw').style.color = "red";
		document.getElementById('chw').innerHTML = ' Pls, enter the password &#10005;';
		document.getElementById('inputPassword').style.borderColor = "red";
		document.reForm.inputPassword.focus();
		return false;
	}else{
    	document.getElementById('chw').style.color = "green";
        document.getElementById('chw').innerHTML = '&#10004;';
		document.getElementById('inputPassword').style.borderColor = "green";
        
        /* Password Confirm */
        if (pw == rpw) {
            document.getElementById('inputConfirmPassword').style.borderColor = "green";
            document.getElementById('inputPassword').style.borderColor = "green";
            document.getElementById('checkpw').style.color = "green";
            document.getElementById('checkpw').innerHTML = ' &#10004;';
        } else {
            document.getElementById('inputConfirmPassword').style.borderColor = 'red';
            document.getElementById('checkpw').style.color = "red";
            document.getElementById('checkpw').innerHTML = ' &#10005;';
            return false;
        }
        
        
    }
				
}