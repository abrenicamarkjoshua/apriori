var hasError = false;
var errorMessage = "";
function loginValidate(){
	
	blankValidate("elementUsername", "errorUsername", "username must not be blank");
	blankValidate("elementPassword", "errorPassword", "password must not be blank");
	
	return checkError();

}
function applyLeaveValidate(){
	hasError = false;
	var typeOfLeave = document.getElementsByName("TypeOfLeave");
	var selectedTypeOfLeave = "";
	for(var i = 0; i < typeOfLeave.length; i++) {
	   if(typeOfLeave[i].checked == true) {
	       selectedTypeOfLeave = typeOfLeave[i].value;
	   }
	 }
	if(selectedTypeOfLeave == ""){
		setError("errorTypeOfLeave", "Please select type of leave");
	} else{ clearError("errorTypeOfLeave");}
	blankValidate("elementAddress", "errorAddress", "Address must not be blank");
	blankValidate("elementContact", "errorContact", "Contact must not be blank");
	blankValidate("elementReason", "errorReason", "Reason must not be blank");
	blankValidate("elementNoOfDays", "errorNoOfDays", "No of days must not be blank");
	blankValidate("elementDateFrom", "errorDateFrom", "'Date from' must not be blank");
	blankValidate("elementDateTo", "errorDateTo", "'Date to' must not be blank");

	
	return checkError();
}
function setError(errorDivId, ErrorMessage){
	hasError = true; 
	errorMessage += ErrorMessage;
	errorMessage += "\n";
	document.getElementById(errorDivId).innerHTML = ErrorMessage;

}
function checkError(){
		if(hasError == true){
		alert(errorMessage);
		errorMessage = "";
		return false;
	} else{
		
		return true;
	}	
}
function blankValidate(elementId, errorDivId, ErrorMessage){
	if(document.getElementById(elementId).value == ""){
		setError(errorDivId, ErrorMessage);
	} else{
		clearError(errorDivId);
	}
}
function clearError(errorDivId){
	document.getElementById(errorDivId).innerHTML = "";

}
