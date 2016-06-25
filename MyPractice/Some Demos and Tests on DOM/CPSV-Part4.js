function CPSV_Part4() {
    //Get the previous and next sibling of the third <li> element
    var myLinkItem = document.getElementById("linkedItem");
    var listItem = myLinkItem.parentNode;
    var prevListItem = listItem.previousElementSibling; // previousSibling and nextSibling are not used here
    var nextListItem = listItem.nextElementSibling;     // to avoid whitespace between elements being counted 
    alert(listItem.textContent);                        // as a text node, which is not what we want!
    alert(prevListItem.textContent);
    alert(nextListItem.textContent);
    
}
document.addEventListener("DOMContentLoaded", CPSV_Part4, false);

