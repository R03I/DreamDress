$(function(){
var gomb1 = $("#osszes");
var gomb2 = $("#polok");
var gomb3 = $("#bluzok");
var gomb4 = $("#topok");
var gomb5 = $("#hossz_polok");

var bluz = $(".bluz");
var polo = $(".polo"); 
var top = $(".top");
var hosszu_polo = $(".hosszu_polo");
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