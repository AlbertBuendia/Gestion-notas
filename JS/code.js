function validacionForm() {
	var email=document.getElementById('email_administrador').value;
   	var password=document.getElementById('passwd_administrador').value;
   	if (email=='' && password=='') {
   		document.getElementById('passwd_administrador').style.borderColor="red";
        document.getElementById('email_administrador').style.borderColor="red";
        document.getElementsByTagName("label")[0].style.color="red";
        document.getElementsByTagName("label")[1].style.color="red";
    } else if (email=='') {
    	document.getElementById('passwd_administrador').style.borderColor="grey";
        document.getElementById('email_administrador').style.borderColor="red";
        document.getElementsByTagName("label")[0].style.color="red";
        document.getElementsByTagName("label")[1].style.color="black";
    } else if (password=='') {
    	document.getElementById('passwd_administrador').style.borderColor="red";
        document.getElementById('email_administrador').style.borderColor="grey";
        document.getElementsByTagName("label")[0].style.color="black";
        document.getElementsByTagName("label")[1].style.color="red";
   	} else {
   		return true;
   	}
   	return false;
}