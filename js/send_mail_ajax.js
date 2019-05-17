    $('#myForm').submit(function(event){
    	event.preventDefault();
        $.ajax({
            type: $(this).attr('php/MailSendScript.php'),
            data: $('#myForm').serialize(),
            success: function(data) {
		    	$("p").html(data);
		    }
        });
    });
