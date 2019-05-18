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
			var nev_mutat;
			if($("#checkbox").is(':checked')){
				nev_mutat=1;
			}else{
				nev_mutat=0;
			}
		if($("#szoveg_tartalom").val()==""){
			$("#szoveg_tartalom").addClass("border border-danger");	
			$("#ures_a_cucc").popover("show");
			setTimeout(function () {
            	$("#ures_a_cucc").popover('hide');
        	}, 3000);
		}else{
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
					var nev_megjelenit;
					if(nev_mutat==0){
						nev_megjelenit = $("#user_acc_name").html();
					}else{
						nev_megjelenit = "Anonimus";
					}
        			$("#elkuldve").removeClass("d-none");
        			$("#kommenteles").addClass("d-none");
        			$("#uj_comment").html(
        				$("#uj_comment").html()+
        				"<div class=\"col-lg-12\">"+
						"<p class=\"lead font-weight-bold\">"
						+ nev_megjelenit +"<span class=\"float-right\">" + $("#ertekeles").val() + "/5</span></p>" +
						"<p class=\"rounded\">" + $("#szoveg_tartalom").val() +"</p>" +
						"<hr>" +
						"</div>"
        			);
        			setTimeout(function () {
            			$("#elkuldve").addClass("d-none");
        			}, 5000);
        		}
			});
		}
	});
});
