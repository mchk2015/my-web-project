function CPSV_Part3_1() {
    // Access the <a> element with id="linkedItem" 
    var myLinkItem = document.getElementById("linkedItem");
    var parentElm1 = myLinkItem.parentNode;
    var parentElm2 = myLinkItem.parentNode;
    // and get information about its parent up to the body element
    while (parentElm1 != document.body ) {
        parentElm1 = parentElm1.parentNode;
        alert(parentElm1.nodeName.toLowerCase());  // ul -> div -> body
    }
    
    // and get information about its parent up to the class name = "dynamic"
    while (parentElm2.className != "dynamic" ) {
        parentElm2 = parentElm2.parentNode;
        alert(parentElm2.nodeName.toLowerCase());  // ul -> div -> body -> html
    }
    
    // Access the <a> element with id="linkedItem" and its parent, and then find out
    // the node value of this parent's first and last siblings
    function init() {
        var myLinkItem = document.getElementById("linkedItem");
        var first = firstElmSibling(myLinkItem.parentNode);
        var last = lastElmSibling(myLinkItem.parentNode);
        alert(getTextContent(first));
        alert(getTextContent(last));
    }
    
    function firstElmSibling(node) {
        var tempObj = node.parentNode.firstChild;
        while (tempObj.nodeType != 1 && tempObj.nextSibling != null) {
            tempObj = tempObj.nextSibling;
        }
        return (tempObj.nodeType == 1)?tempObj:false;
    }
    
    function lastElmSibling(node) {
        var tempObj = node.parentNode.lastChild;
        while (tempObj.nodeType != 1 && tempObj.previousSibling != null) {
            tempObj = tempObj.previousSibling;
        }
        return (tempObj.nodeType == 1)?tempObj:false;
    }
   
   function getTextContent(node) {
       return node.firstChild.nodeValue;
   }
   
  init();
}
document.addEventListener("DOMContentLoaded", CPSV_Part3_1, false);


