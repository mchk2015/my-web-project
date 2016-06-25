function FECI() {
       
    var listElements = document.getElementsByTagName("li");
    var paragraphs = document.getElementsByTagName("p");
    var msg = "This document contains " + paragraphs.length + " paragraphs\n";
    msg += "and " + listElements.length + " list items.";
    alert(msg);    
    
    var firstPara = document.getElementsByTagName("p")[0];
    var secondListItem = document.getElementsByTagName("li")[1];
    alert("The first paragraph is : " + firstPara.textContent);     // Without "textContent", only an object 
    alert("The second list item is: "+ secondListItem.textContent); // of an array will be returned for a tag name.
    
    var targetLink = document.getElementsByTagName("li")[2].getElementsByTagName("a")[0];
    alert("The linked item in the third list is: " + targetLink.textContent);
    
    var lastListElement = listElements[listElements.length - 1];
    alert("The last list item is: " + lastListElement.textContent);
    
    var firstClass = document.getElementsByClassName("paraStyle")[0];
    var classNum = document.getElementsByClassName("paraStyle").length;
    alert("There are " + classNum + " paragraphs with the class name 'paraStyle' ");    
    alert("and the first one is: "+ firstClass.textContent); // Without "textContent", only an object
                                                             // of an array will be returned for a class name.                                                                    
       
    var events = document.getElementById("eventsList");
    alert("The event list consists of: " + events.textContent); // Without "textContent", only a unique object
                                                                // will be returned for an element id.
                                                                
    var listHTML = document.getElementsByTagName("html")[0];
    alert("The content of the whole document is as follows: " + listHTML.textContent);                                                       
    
}
document.addEventListener("DOMContentLoaded", FECI, false);

