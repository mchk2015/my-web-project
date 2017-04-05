(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
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
},{"./sample.json":2}],2:[function(require,module,exports){
module.exports={
	"Musical Instruments" : {
		"type" : ["woodwind", "brass", "string", "keyboard"],
		"price" : 10000,
		"sale" : true
	},
	"HiFi and Accessories" : {
		"type" : ["cd player", "md recorder", "earphone", "headphone", "amplifier"],
		"price" : 1000,
		"sale" : true
	},
	"Books" : {
		"type" : ["textbooks", "novel", "reference", "languages"],
		"price" : 100,
		"sale" : false
	}
}

},{}]},{},[1]);
