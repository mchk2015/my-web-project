// You need to browerify this JS file (containing CJS) before putting to use in HTML:
// > browserify extractSample.js > testJSON.js
// then in your HTML, add:
// <script src="test.JSON.js"></script>
var myCollection = require('./sample.json'); //require is a keyword in CJS!
console.log("Are musical instruments available for sale? " + myCollection["Musical Instruments"].sale);
console.log("What kind of instrument do you want to buy? " + myCollection["Musical Instruments"].type[3]);
console.log("What is the price? " + "$" + myCollection["Musical Instruments"].price);
console.log("What other kinds of collection do you have? " + "We have " + myCollection["HiFi and Accessories"].type);
console.log("and also " + myCollection["Books"].type);