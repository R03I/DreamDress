$(function(){
var gomb1 = $("#osszes");
var gomb2 = $("#csizma");
var gomb3 = $("#magassarku");
var gomb4 = $("#szandal");
var gomb5 = $("#futo_cipo");

var bluz = $(".csizma");
var polo = $(".magassarku"); 
var top = $(".szandal");
var hosszu_polo = $(".futo_cipo");
gomb1.on("click", function() {
	bluz.show();
	polo.show();
	top.show();
	hosszu_polo.show();
});
gomb2.on("click", function() {
	polo.show();
	bluz.hide();
	top.hide();
	hosszu_polo.hide();
});
gomb3.on("click", function() {
	polo.hide();
	bluz.hide();
	top.show();
	hosszu_polo.hide();
});
gomb4.on("click", function() {
	polo.hide();
	bluz.show();
	top.hide();
	hosszu_polo.hide();
});

gomb5.on("click", function() {
	polo.hide();
	bluz.hide();
	top.hide();
	hosszu_polo.show();
});
});