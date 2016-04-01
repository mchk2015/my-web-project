function CRR_Part2() {
    if (!document.getElementById || !document.createTextNode) {
        return;
    }
    var noJSmsg = document.getElementById("noscripting");
    if (!noJSmsg) {
        return;
    }
    // Create, style and add content to header
    var headline = "Browser test succeeded!";
    
    var head = document.createElement("h1");
    head.appendChild(document.createTextNode(headline));
    
    noJSmsg.parentNode.insertBefore(head, noJSmsg);  
    
    // Create, style and replace the noscripting message with a message + a link to application
    var replaceMessage = "We tested if your browser is capable of ";
    replaceMessage += "supporting the application, and all checkedout fine. ";
    replaceMessage += "Please proceed by activating the following link. ";
    var linkMessage = "Proceed to application ";
    
    var infoPara = document.createElement("p");
    infoPara.appendChild(document.createTextNode(replaceMessage));
    
    noJSmsg.parentNode.insertBefore(infoPara, noJSmsg);
    
    var linkPara = document.createElement("p");
    var appLink = document.createElement("a");
    appLink.setAttribute("href", "application.php");
    appLink.appendChild(document.createTextNode(linkMessage));
    linkPara.appendChild(appLink);
    
    noJSmsg.parentNode.replaceChild(linkPara, noJSmsg);                                 
}
document.addEventListener("DOMContentLoaded", CRR_Part2, false);

