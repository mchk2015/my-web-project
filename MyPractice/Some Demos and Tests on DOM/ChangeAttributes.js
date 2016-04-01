 function changeAttributes() {
    // Changing by talking to the elements directly
    var firstLink = document.getElementsByTagName("a")[0];
    firstLink.href = "http://www.google.com";

    var mainImage1 = document.getElementById("nav").getElementsByTagName("img")[0];
    mainImage1.src = "dynamiclogo.gif";
    mainImage1.alt = "Generic Corporation - We do generic stuff";
    mainImage1.title = "Go back to Home";
    
    // Changing by using DOM methods
    var secondLink = document.getElementsByTagName("a")[1];
    if (secondLink.getAttribute("href") == "search2.html") {
        secondLink.setAttribute("href", "http://www.google.com.hk");
    }
    var mainImage2 = document.getElementById("nav").getElementsByTagName("img")[1];
    mainImage2.setAttribute("src", "dynamiclogo.gif");
    mainImage2.setAttribute("alt", "Generic Corporation - We go generic stuff");
    mainImage2.setAttribute("title", "Go back to Home");
    
}
document.addEventListener("DOMContentLoaded", changeAttributes, false);

