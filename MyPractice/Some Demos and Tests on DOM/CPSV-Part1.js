function CPSV_Part1() {
    // This is <!DOCTYPE html>
    var docFirstCN = document.childNodes[0];
    alert("The first child node of this document has \n"
          + "node type:" + docFirstCN.nodeType + "\n" 
          + "node name: " + docFirstCN.nodeName.toLowerCase() + "\n"
          + "node value: " + docFirstCN.nodeValue);    
    
    // This is <html>
    var docSecondCN = document.childNodes[1];
    alert("The second child node of this document has \n"
          + "node type:" + docSecondCN.nodeType + "\n" 
          + "node name: " + docSecondCN.nodeName.toLowerCase() + "\n"
          + "node value: " + docSecondCN.nodeValue);
    
    
    // This is <head>, the first child of <html>
    var headElement = document.childNodes[1].children[0];
    alert("The <head> element has \n"
          + "node type:" + headElement.nodeType + "\n" 
          + "node name: " + headElement.nodeName.toLowerCase() + "\n"
          + "node value: " + headElement.nodeValue);    
    
    var headChildNodes = document.childNodes[1].children[0].children;
    alert("The <head> element has " + headChildNodes.length + " child nodes, which are: \n"
          + headChildNodes[0].nodeName.toLowerCase() + ", " 
          + headChildNodes[1].nodeName.toLowerCase() + ", and " 
          + headChildNodes[2].nodeName.toLowerCase());       
          
    // This is <body>, the last child of <html>      
    var bodyElement = document.childNodes[1].lastChild; // lastChild = childNodes[document.childNodes[1].childNodes.length - 1]
    alert("The <body> element has \n"
          + "node type:" + bodyElement.nodeType + "\n" 
          + "node name: " + bodyElement.nodeName.toLowerCase() + "\n"
          + "node value: " + bodyElement.nodeValue);
          
    var bodyChildNodes = document.childNodes[1].children[1].children;
    alert("The <body> element has " + bodyChildNodes.length + " child nodes, which are: \n"
          + bodyChildNodes[0].nodeName.toLowerCase() + ", " + bodyChildNodes[1].nodeName.toLowerCase() + ", "
          + bodyChildNodes[2].nodeName.toLowerCase() + ", " + bodyChildNodes[3].nodeName.toLowerCase() + ", "
          + bodyChildNodes[4].nodeName.toLowerCase() + ", " + bodyChildNodes[5].nodeName.toLowerCase() + ", "
          + bodyChildNodes[6].nodeName.toLowerCase() + ", and " + bodyChildNodes[7].nodeName.toLowerCase());
            
    // This is <li>      
    var myTestNode1 = document.getElementsByTagName("li").item(0).childNodes[0]; // ...("li").item(0) = ...("li")[0]
    alert("The first child node of the first <li> element has \n"
          + "node type:" + myTestNode1.nodeType + "\n" 
          + "node name: " + myTestNode1.nodeName.toLowerCase() + "\n"
          + "node value: " + myTestNode1.nodeValue);
          
    var myTestNode2 = document.getElementsByTagName("li")[2].children[0];
    alert("The first child element node of the third <li> element has \n"
          + "node type:" + myTestNode2.nodeType + "\n" 
          + "node name: " + myTestNode2.nodeName.toLowerCase() + "\n"
          + "node value: " + myTestNode2.nodeValue);
          
    var myTestNode3 = document.getElementsByTagName("li")[2].children[0].childNodes[0];
    alert("The first child node of first child element node of the third <li> element has \n"
          + "node type:" + myTestNode3.nodeType + "\n" 
          + "node name: " + myTestNode3.nodeName.toLowerCase() + "\n"
          + "node value: " + myTestNode3.nodeValue);
    
    // This is <a>
    var myTestNode4 = document.getElementsByTagName("a")[0].childNodes[0];
    alert("The first child node of the first <a> element has \n"
          + "node type:" + myTestNode4.nodeType + "\n" 
          + "node name: " + myTestNode4.nodeName.toLowerCase() + "\n"
          + "node value: " + myTestNode4.nodeValue);
    
    // This is <p>
    var myTestNode5 = document.getElementsByTagName("p")[3].firstChild;  // firstChild is a shortcut to childNodes[0]
    alert("The first child node of the fourth <p> element has \n" 
          + "node type:" + myTestNode5.nodeType + "\n" 
          + "node name: " + myTestNode5.nodeName.toLowerCase() + "\n"
          + "node value: " + myTestNode5.nodeValue);
          
    // This is <p class="paraStyle">
    var myTestNode6 = document.getElementsByClassName("paraStyle")[0];
    alert("The element with attribute named 'paraStyle' firstly has \n"
          + "node type:" + myTestNode6.nodeType + "\n" 
          + "node name: " + myTestNode6.nodeName.toLowerCase() + "\n"
          + "node value: " + myTestNode6.nodeValue);
        
    // Replacement of node value    
    document.getElementsByTagName("p")[0].firstChild.nodeValue="Hello World";
    alert(document.getElementsByTagName("p")[0].textContent);       
                                                     
    
}
document.addEventListener("DOMContentLoaded", CPSV_Part1, false);

