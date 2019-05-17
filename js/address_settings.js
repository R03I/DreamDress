$(function(){
    var name = $("#legit_name");
    var address = $("#address");
    var comment =$("#comment");

    $("#account_menu").click(function(){
	$.ajax({
		async:false,
        type:'POST',
        url: 'php/ajax.php',
        dataType:"json",
        data: {
        	add_username: $("#user_acc_name").html()
        },
        success:function(data) {
            name.val(data[0].name);
            address.val(data[0].address);
            comment.html(data[0].comment);
    	}
      });
    });
    name.click(function(){
        name.removeClass("border border-danger");
    });
    address.click(function(){
        address.removeClass("border border-danger");
    });

	$('#address_settings').submit(function(event){
		event.preventDefault();
		if(name.val() == "" && address.val() == ""){
			name.addClass("border border-danger");
			address.addClass("border border-danger");
			setTimeout(function () {
            name.removeClass("border border-danger");
            address.removeClass("border border-danger");
        	}, 3000);
		}else if(name.val() == ""){
			name.addClass("border border-danger");
			address.removeClass("border border-danger");
			setTimeout(function () {
            name.removeClass("border border-danger");
            address.removeClass("border border-danger");
        	}, 3000);
		}else if(address.val() == ""){
			name.removeClass("border border-danger");
			address.addClass("border border-danger");
			setTimeout(function () {
            name.removeClass("border border-danger");
            address.removeClass("border border-danger");
        	}, 3000);
		}else{
		$.ajax({
			async:false,
        	type:'POST',
        	url: 'php/ajax.php',
    	    dataType:"TEXT",
	        data: {
        	username_add: $("#user_acc_name").html(),
        	name_add: name.val(),
        	address_add: address.val(),
        	comment_add: comment.val()
        	},
        	success:function(data) {
        	$("#adat_siker").html(data);
        	$("#adat_siker").removeClass("d-none");
        	setTimeout(function () {
            $("#adat_siker").addClass("d-none");
        	}, 3000);
    		}
      	});
		}
    });
});