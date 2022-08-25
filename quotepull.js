window.addEventListener('load', function(){
"use strict";

const URL_QUOTES = 'getQuote.php';
const URL_QUOTES_JSON = URL_QUOTES + '?useJSON';
const URL_QUOTES_XML = URL_QUOTES + '?useXML';


const htmlCallback = function (data) {
  document.getElementById("quotes").innerHTML = data;
}

const jsonCallback = function (data) {
	document.getElementById("quotes1").innerHTML = data.filename + "'alt'" + data.description;
}

const xmlCallback = function (data) {
	let parser = new DOMParser();
	parser.parseFromString(data,"text/xml");
	document.getElementById("quotes2").innerHTML = data.filename + "'alt'" + data.description;
}


const fetchquotes = function(URL, callback) {
	fetch(URL)
		.then(
			function(response){
				const contentType = response.headers.get('content-type');
			if (contentType.includes('application/json')) {
				return response.json();
			}
			return response.text();
		})
		.then(
			function(data) {
				callback(data);
		})
		.catch(
			function (err){
				console.log ("something went wrong!", err);
		});
	}
	const mainHTML = function () {
		fetchquotes(URL_QUOTES, htmlCallback);
	}

	const mainJSON = function () {
		fetchquotes(URL_QUOTES_JSON, jsonCallback);
	}

	const mainXML = function () {
		fetchquotes(URL_QUOTES_XML, xmlCallback);
	}

	mainHTML();
	mainJSON();
	mainXML();
	setInterval(mainHTML, 5000);
	setInterval(mainJSON, 5000);
	setInterval(mainXML, 5000);
});

