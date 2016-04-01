function CRR_Part3() {
    if (!document.getElementById || !document.createTextNode) {
        return;
    }
    var noJSmsg = document.getElementById("noscripting");
    if (!noJSmsg) {
        return;
    }
    // Create and replace the noscripting message directly using innnerHTML
    var replaceMessage;
    replaceMessage = "<h1>Browser test succeeded!</h1>";
    replaceMessage += "<p>We tested if your browser is capable of ";
    replaceMessage += "supporting the application, and all checkedout fine. ";
    replaceMessage += "Please proceed by activating the following link.</p>";
    replaceMessage += "<p><a href='application.php'>Proceed to application</a></p>"; 
                       // Mind that only single quotation marks are allowed within double quotation marks
                       // or vice versa. It is invalid to use both single or double ones in a statement!
       
    noJSmsg.innerHTML = replaceMessage;                                 
}
document.addEventListener("DOMContentLoaded", CRR_Part3, false);



