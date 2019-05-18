$(function(){
	$.ajax({
		url: 'php/ajax.php',
		type: 'POST',
		dataType: 'json',
		data: 
		{
			item_id_comment_show: $("#comment_send").val(),
			username_id_comment_show: $("#user_acc_name").html()
		},
		success:function(data) {
			if(!data){
	        	$("#kommenteles").addClass("d-none");
	        }
        }
	});

	$('#ertekeles').on("change mousemove", function() {
	    $(pontozas).html($(this).val());
	});

	$("#comment_send").click(function(){
		$("#comment_send").removeClass("border border-danger");
	});

	$("#comment_send").on("click", function(){
		if($("#szoveg_tartalom").val()==""){
			$("#szoveg_tartalom").addClass("border border-danger");	
			$("#ures_a_cucc").popover("show");
			setTimeout(function () {
            	$("#ures_a_cucc").popover('hide');
        	}, 3000);
		}else{
			var nev_mutat;
			if($("#neve").checked){
				var nev_mutat=1;
			}else{
				var nev_mutat=0;
			}
			$.ajax({
				url: 'php/ajax.php',
				type: 'POST',
				dataType: 'text',
				data: 
				{
					rate: $("#ertekeles").val(),
					id: $("#comment_send").val(),
					comment: $("#szoveg_tartalom").val(),
					anonim: nev_mutat,
					username_comm: $("#user_acc_name").html()
				},
				success:function() {
        			$("#elkuldve").removeClass("d-none");
        			$("#kommenteles").addClass("d-none");
        			setTimeout(function () {
            			$("#elkuldve").addClass("d-none");
        			}, 5000);
        		}
			});
		}
	});
});
