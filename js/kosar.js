$(document).ready(function(){
      $.ajax({
        type:'post',
        url:'php/cart_system.php',
        data:{
          vasarolt_termekek_szama:"totalitems"
        },
        success:function(data) {
          $("#total_items").html(data);
        }
      });
    });

    function cart(id)
    {
	  var ele=document.getElementById(id);
	  var img_src=document.getElementById(id+"._img").value;
	  var name=document.getElementById(id+"._name").value;
	  var price=document.getElementById(id+"._price").value;
    var button = document.getElementById(id+"._button");
    $(button).removeClass("animated heartBeat");
    $("#kosar").removeClass("animated swing");
	  $.ajax({
        type:'post',
        url:'php/cart_system.php',
        data:{
          item_src:img_src,
          item_name:name,
          item_price:price
        },
        success:function(data) {
          $("#total_items").html(data);
          $(button).addClass("animated heartBeat");
          $("#kosar").addClass("animated swing");
        }
      });
    };
    $("#kosar").on("click", function() {
      $.ajax({
      type:'post',
      url:'php/cart_system.php',
      data:{
        showcart:"cart"
      },
      success:function(data) {
		$("#kosarba").html(data);

		}
     });  
});
	$("#kosar_urit").on("click", function() {
		$.ajax({
        type:'post',
        url:'php/clear-cart.php',
        data:{
        },
        success:function(data) {
          $("#total_items").html("0");
          
        }
      });	
	});
  function delet_cart_item(id){
    var osszeghez = "#"+id+"money";
    $.ajax({
        type:'post',
        url:'php/delet_cart_item.php',
        data:{
          id:id
        },
        success:function(data) {
          console.log(data);
          $(data).hide(1000);
          $("#total_items").html($("#total_items").html()-1);
          $("#osszege").html($("#osszege").html()-$(osszeghez).html());
        }
      });
  }
  //KIS CUCCBA SZÁMOL
  $("#szamolo").on("click", function(){
    $.ajax({
    async:false,
        type:'POST',
        url: 'php/szamol.php',
        dataType:"TEXT",
        success:function(data6) {
          $("#jelenleg_osszeg").html(data6);
        }
      });
  });
  //ÖSSZEGZŐ
  $("#pay_model_open").on("click", function(){
  $.ajax({
    async:false,
        type:'POST',
        url: 'php/session_names.php',
        dataType:"TEXT",
        success:function(data) {
          if(data == "ures"){
            $("#kosar_error").removeClass("d-none");
            setTimeout(function () {
            $("#kosar_error").addClass('d-none');
            }, 3000);
          }else if(data == "not_logged"){
            $("#kosar_error2").removeClass("d-none");
            setTimeout(function () {
            $("#kosar_error2").addClass('d-none');
            }, 3000);
          }else{
            $('#kosar_modal').modal('hide');
            $("#kosar_fizet").modal('show');
            $("#finish_upload").html(data);
            $("#all_pay").html($("#osszertek").html());
          }
        }
      });
  });