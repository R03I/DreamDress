$(function(){
	var username = $("#username");
	var password = $("#password");
	username.click(function(){
		username.removeClass("border border-danger");
	});
	password.click(function(){
		password.removeClass("border border-danger");
	});
	//LOGIN ELLENŐR
	$('#log_form').submit(function(event){
	event.preventDefault();
		var username_login=username.val();
		var password_login=password.val();
		var hiba1;

		$.ajax({
		async:false,
        type:'POST',
        url: 'php/ajax.php',
        dataType:"json",
        data: {
        	username: username_login,
        	password: password_login
        },
        success:function(data) {
        	hiba1 = data;
        }
      });
		if(username.val()=="" && password.val()==""){
			$("#error").popover("show");
			password.addClass("border border-danger");
			username.addClass("border border-danger");
			setTimeout(function () {
            $("#error").popover('hide');
            password.removeClass("border border-danger");
			username.removeClass("border border-danger");
        	}, 3000);
		}else if(username.val()==""){
			$("#error2").popover("show");
			username.addClass("border border-danger");
			setTimeout(function () {
            $("#error2").popover('hide');
			username.removeClass("border border-danger");
        	}, 3000);
		}else if(password.val()==""){
			$("#error3").popover("show");
			password.addClass("border border-danger");
			setTimeout(function () {
            $("#error3").popover('hide');
            password.removeClass("border border-danger");
        	}, 3000);
		}else if(hiba1==0){
			$("#error13").popover("show");
			password.addClass("border border-danger");
        	username.addClass("border border-danger");
			setTimeout(function () {
            $("#error13").popover('hide');
           	password.removeClass("border border-danger");
           	username.removeClass("border border-danger");
        	}, 3000);
        }else if(hiba1){
        	$.ajax({
		async:false,
        type:'POST',
        url: 'php/ajax.php',
        data: {
            logged: ""
        },
        dataType:"TEXT",
        success:function(data2) {
        	var valami = data2;
        	$("#user_acc_name").html(data2);
			$('#login_modal').modal('hide');
        	$("#reg_log_menu").hide();
        	$("#account_menu").removeClass("d-none");
        	$("#logout").removeClass("d-none");
        }
      });
		}
	});
	//SESSION ELLENŐR
	$.ajax({
		async:false,
        type:'POST',
        url: 'php/ajax.php',
        data: {
            logged: ""
        },
        dataType:"TEXT",
        success:function(data2) {
        	if(data2){
        	$("#user_acc_name").html(data2);
			$('#login_modal').modal('hide');
        	$("#reg_log_menu").hide();
        	$("#account_menu").removeClass("d-none");
        	$("#logout").removeClass("d-none");
        }
        }
    });
	//LOGOUT
	$('#logout').click(function(event){
		$.ajax({
		async:false,
        type:'POST',
        url: 'php/ajax.php',
        data: {
            destory: ""
        },
        dataType:"TEXT",
        success:function(data3) {
        	$("#user_acc_name").html("");
        	$("#reg_log_menu").show();
        	$("#account_menu").addClass("d-none");
        	$("#logout").addClass("d-none");
        	$("#bye").html(data3);
        	$("#goodbye").removeClass("d-none");
        	setTimeout(function () {
            $("#goodbye").addClass("d-none");
        	}, 3000);
        }
    });
	});
	});