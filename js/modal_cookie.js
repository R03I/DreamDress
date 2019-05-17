$( document ).ready(function() {
if(!(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) ) {
	if($.cookie('the_cookie') != 1){
        $('#hirlevel_modal').modal('show');
        $('#myForm2').submit(function(event){
        if($("#email2").val()==""){
            event.preventDefault();
            $("#email2").addClass("border border-danger");
            setTimeout(function () {
            $("#email2").removeClass("border border-danger");
            }, 3000);
        }else{
        var email2=$("#email2").val();
            $.post('php/MailSendScript.php', { emailpost: email2});
            $("#hide").hide();
            $("#hide2").show();
            $.cookie('the_cookie', '1' , { expires : 7 });
            $('#hirlevel_modal').modal('hide');
        }
      	});
        }
	}
});