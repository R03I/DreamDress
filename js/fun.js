if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
$("#ugral").mouseover(function(){
        $("#ugral").addClass( "animated pulse infinite" );
}).mouseout(function(){
        $("#ugral").removeClass( "animated pulse infinite" );
});
$("#ugral2").mouseover(function(){
        $("#ugral2").addClass( "animated pulse infinite" );
}).mouseout(function(){
        $("#ugral2").removeClass( "animated pulse infinite" );
});
$("#ugral3").mouseover(function(){
        $("#ugral3").addClass( "animated pulse infinite" );
}).mouseout(function(){
        $("#ugral3").removeClass( "animated pulse infinite" );
});
$("#emailpopup").on("click", function() {
	$("#up").popover("show");
	setTimeout(function () {
    $("#up").popover('hide');
    }, 5000);
});
}