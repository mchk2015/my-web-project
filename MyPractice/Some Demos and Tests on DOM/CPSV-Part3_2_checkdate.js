function checkDate() {
    var dateField = document.getElementById("date");    
    var errorContainer = dateField.parentNode.getElementsByTagName("span")[0];
    var checkPattern = new RegExp("([0-2][1-9]|[3][0-1])/([0][1-9]|[1][0-2])/\\d{4}"); //not perfect one!
    var errorMessage = "";
    errorContainer.firstChild.nodeValue="";
    var dateValue = dateField.value;
    if (dateValue == "") {
        errorMessage = "Please provide a date.";
    } else if (!checkPattern.test(dateValue)) {
        errorMessage = "Please provide the date in the defined format.";
    }
    if (errorMessage != "") {
        errorContainer.firstChild.nodeValue = errorMessage;
        dateField.focus();
        return false;                       // i.e. the form cannot be submitted by post for processing yet!
    } else {
        return true;                        // i.e. the form can be submitted by post for processing now!
    }
}   