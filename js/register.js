$(function(){
	var user_kinezet = $("#reg_username")
	var pass_kinezet = $("#reg_password");
	var pass2_kinezet = $("#reg_password2");
	var em_kinezet = $("#reg_email");
	var hiba1=0;
	var hiba2=0;
	user_kinezet.click(function(){
		user_kinezet.removeClass("border border-danger");
	});
	pass_kinezet.click(function(){
		pass_kinezet.removeClass("border border-danger");
	});
	pass2_kinezet.click(function(){
		pass2_kinezet.removeClass("border border-danger");
	});
	em_kinezet.click(function(){
		em_kinezet.removeClass("border border-danger");
	});
	$( "#reg_username" ).blur(function( event ) {
		var user = $("#reg_username").val();
		$.ajax(
    	{
    	async:false,
        type:'POST',
        url: 'php/ajax.php',
        data: {username_reg: user},
        dataType:"json",
        success: function(data)
        {
        	hiba1=data;
        }
	});if(hiba1 == 1){
			user_kinezet.addClass("border border-danger");	
			$("#error10").popover("show");
			setTimeout(function () {
            $("#error10").popover('hide');
        }, 3000);
		}else{
			user_kinezet.removeClass("border border-danger");
		}
	});
		$( "#reg_email" ).blur(function( event ) {
		var em = $("#reg_email").val();
		$.ajax(
    {
    	async:false,
        type:'POST',
        url: 'php/ajax.php',
        data: {email_reg: em},
        dataType:"json",
        success: function(data2)
        {
        	hiba2=data2;
        }
    });
		if(hiba2 == 1){
			em_kinezet.addClass("border border-danger");	
			$("#error11").popover("show");
			setTimeout(function () {
            $("#error11").popover('hide');
        }, 3000);
		}else{
			em_kinezet.removeClass("border border-danger");
		}
	});
	$("#reged_modal").hide();
	$('#reg_form').submit(function(event){
	event.preventDefault();
	var user = $("#reg_username").val();
	var pass = $("#reg_password").val();
	var pass2 = $("#reg_password2").val();
	var em = $("#reg_email").val();
	$.ajax(
    {
    	async:false,
        type:'POST',
        url: 'php/ajax.php',
        data: {username_reg: user},
        dataType:"json",
        success: function(data)
        {
        	hiba1=data;
        }
    });
    $.ajax(
    {
    	async:false,
        type:'POST',
        url: 'php/ajax.php',
        data: {email_reg: em},
        dataType:"json",
        success: function(data2)
        {
        	hiba2=data2;
        }
    });
	if(user=="" && pass=="" && pass2=="" && em==""){
			$("#error4").popover("show");
			user_kinezet.addClass("border border-danger");
			pass_kinezet.addClass("border border-danger");
			pass2_kinezet.addClass("border border-danger");
			em_kinezet.addClass("border border-danger");
			setTimeout(function () {
			user_kinezet.removeClass("border border-danger");
			pass_kinezet.removeClass("border border-danger");
			pass2_kinezet.removeClass("border border-danger");
			em_kinezet.removeClass("border border-danger");
            $("#error4").popover('hide');
        	}, 3000);
		}else if(user==""){
			$("#error5").popover("show");
			user_kinezet.addClass("border border-danger");
			setTimeout(function () {
			user_kinezet.removeClass("border border-danger");
            $("#error5").popover('hide');
        	}, 3000);
		}else if(pass==""){
			$("#error6").popover("show");
			pass_kinezet.addClass("border border-danger");
			setTimeout(function () {
            $("#error6").popover('hide');
            pass_kinezet.removeClass("border border-danger");
        	}, 3000);
		}else if((pass2=="") || (pass2!== pass)){
			$("#error7").popover("show");
			pass_kinezet.addClass("border border-danger");
			pass2_kinezet.addClass("border border-danger");
			setTimeout(function () {
            $("#error7").popover('hide');
            pass_kinezet.removeClass("border border-danger");
            pass2_kinezet.removeClass("border border-danger");
        	}, 3000);
		}else if((em=="") || ((em.indexOf('@') == -1)) || ((em.indexOf('.') == -1))){
			$("#error8").popover("show");
			em_kinezet.addClass("border border-danger");
			setTimeout(function () {
			em_kinezet.removeClass("border border-danger");
            $("#error8").popover('hide');
        	}, 3000);
        }else if(hiba1){
			$("#error10").popover("show");
			user_kinezet.addClass("border border-danger");
			setTimeout(function () {
			user_kinezet.removeClass("border border-danger");
            $("#error10").popover('hide');
        	}, 3000);
		}else if(hiba2){
			$("#error11").popover("show");
			em_kinezet.addClass("border border-danger");
			setTimeout(function () {
            $("#error11").popover('hide');
            em_kinezet.removeClass("border border-danger");
        	}, 3000);
		}else{
			$.post('php/ajax.php', { usernamepost_reg: user , passwordpost_reg: pass , emailpost_reg : em} , function(data){
				$("#siker_reg").html(data);
			});
			$("#reg_modal").hide();
			$("#register").hide();
			$("#cancel").hide();
			$("#reged_modal").show();
		}
	});
});