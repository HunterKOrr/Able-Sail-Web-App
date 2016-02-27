function loginFunction() {
	var url = "login.html";
	window.open(url);
}

function createAccountFunction() {
	var url = "createAccount.html";
	window.open(url);
}

function registrationFunction() {
	var url = "register.php";
	window.open(url);
}

function updateInfoFunction(){
	var url = "updateInfo.php";
	window.open(url);
	
}

function fixRegistryFunction(ID){
//need to access database and remove old entry so they can redo the web form

}

function serviceFunction(){
	var url = "services.html";
	window.open(url);
}

function endFunction(){
	var url = "confirmation.html";
	window.open(url);
}

function getCurrentUser(){
	if(currentUser == null){
		return "";
	}
	return currentUser;
}

function textFilled(username, password) {
	if (username != null || password != null) {
		return false;
	}
	return true;
}

function updateLength(field, output) {
	var curr_length = document.getElementById(field).value.length;
	var field_mLen = document.getElementById(field).maxLength;
	document.getElementById(output).innerHTML = curr_length + '/' + field_mLen;
}

function checkTextField(field) {
    if (field.value == '')
        alert("Field is empty");
}