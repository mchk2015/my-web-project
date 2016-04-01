function CPSV_Part2() {
    // Access the UL element and get information about its children
    function myDOMInspector() {
        var DOMString1 = "";
        var DOMString2 = "";
        var demoList = document.getElementById("eventsList");
        if (!demoList) {
            return;
        } else {
            if (demoList.hasChildNodes()) {
                var ch = demoList.childNodes;
                for (var i = 0; i < ch.length; i++) {
                    DOMString1 += ch[i].nodeName.toLowerCase() + "\n";
                    DOMString2 += ch[i].textContent + "\n";
                }
            }
            alert(DOMString1);
            alert(DOMString2);
        }       
    }
    myDOMInspector();
}
document.addEventListener("DOMContentLoaded", CPSV_Part2, false);

