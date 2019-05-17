$(function(){
var gomb1 = $("#osszes");
var gomb2 = $("#farmer");
var gomb3 = $("#rovid_farmer");
var gomb4 = $("#szoknya");

var bluz = $(".farmer");
var polo = $(".rovid_farmer"); 
var top = $(".szoknya");
gomb1.on("click", function() {
	bluz.show();
	polo.show();
	top.show();
});
gomb2.on("click", function() {
	polo.show();
	bluz.hide();
	top.hide();
});
gomb3.on("click", function() {
	polo.hide();
	bluz.hide();
	top.show();
});
gomb4.on("click", function() {
	polo.hide();
	bluz.show();
	top.hide();
});
});