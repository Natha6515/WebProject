/**
 * 
 */


let btn = document.getElementById("calc");
let url = "calculator.html";
let name = "calc";
let features = "height=600,width=500"


btn.addEventListener('click',function(){
	
	window.open(url,"calc",features);
	
	
});



let btn1 = document.getElementById("swatch");
let url1 = "stopwatch.html";
let name1 = "swatch";
let features1 = "height=500,width=900"


btn1.addEventListener('click',function(){
	
	window.open(url1,name1,features1);
	
	
});