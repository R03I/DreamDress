$(function(){
var gomb1 = $("#osszes");
var gomb2 = $("#polok");
});
gomb1.on("click", function() {
	alert("ASD");
	$("#polo").addClass( "d-block" );
	$("#polo").removeClass( "d-none" );
	$("#bluz").addClass( "d-block" );
	$("#bluz").removeClass( "d-none" );
	$("#top").addClass( "d-block" );
	$("#top").removeClass( "d-none" );
	$("#hosszu_polo").addClass( "d-block" );
	$("#hosszu_polo").removeClass( "d-none" );
});
gomb2.on("click", function() {
	alert("KYS");
	$("#polo").addClass( "d-block" );
	$("#polo").removeClass( "d-none" );
	$("#bluz").addClass( "d-none" );
	$("#bluz").removeClass( "d-block" );
	$("#top").addClass( "d-none" );
	$("#top").removeClass( "d-block" );
	$("#hosszu_polo").addClass( "d-none" );
	$("#hosszu_polo").removeClass( "d-block" );
});