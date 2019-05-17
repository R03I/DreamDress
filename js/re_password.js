$(function(){
	var old_password = $("#old_password");
	var new_password = $("#new_password");
	old_password.click(function(){
		old_password.removeClass("border border-danger");
	});
	new_password.click(function(){
		new_password.removeClass("border border-danger");
	});
	$('#newpassword').submit(function(event){
		event.preventDefault();
		if(old_password.val()=="" && new_password.val() ==""){
			$("#re_password_hiba").html("Töltse ki mindkét mezőt");
			old_password.addClass("border border-danger");
			new_password.addClass("border border-danger");
			setTimeout(function () {
            old_password.removeClass("border border-danger");
            new_password.removeClass("border border-danger");
        	}, 3000);
		}else if(old_password.val()==""){
			$("#re_password_hiba").html("Adja meg a régi jelszavát is");
			old_password.addClass("border border-danger");
			new_password.RemoveClass("border border-danger");
			setTimeout(function () {
            old_password.removeClass("border border-danger");
        	}, 3000);
		}else if(new_password.val()==""){
			old_password.RemoveClass("border border-danger");
			new_password.addClass("border border-danger");
			$("#re_password_hiba").html("Adja meg az új jelszavát is");
		}else{
		$.ajax({
		async:false,
        type:'POST',
        url: 'php/ajax.php',
        dataType:"json",
        data: {
        	username_rep: $("#user_acc_name").html(),
        	password_rep: old_password.val(),
        	new_password_rep: new_password.val()
        },
        success:function(data) {
        	if(data){
	        	old_password.val("");
	        	new_password.val("");
	        	$("#re_password_jo").removeClass("d-none");
	        	setTimeout(function () {
	            	$("#re_password_jo").addClass("d-none");
	        	}, 3000);
        	}else{
        		$("#re_password_hiba").removeClass("d-none");
        		setTimeout(function () {
            		$("#re_password_hiba").addClass("d-none");
        		}, 3000);	
        	}
        }
      });
	}
	});
});