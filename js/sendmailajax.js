$( document ).ready(function() {
    $("#hide2").hide();
    if($.cookie('the_cookie') == 1){
        $("#hide").hide();
        $("#hide2").hide();
        $("#hide3").hide();
    }
    $('#myForm').submit(function(event){
        event.preventDefault();
        $.cookie('the_cookie', '1' , { expires : 7 });
        $.cookie('modal_hirlevel', '1' , { expires : 7 });       
        var email=$("#email").val();
        if($("#email").val() == ""){
            $("#error9").popover("show");
            $("#email").addClass("border border-danger");
            setTimeout(function () {
            $("#email").removeClass("border border-danger");
            $("#error9").popover("hide");
            }, 3000);
        }else{
            $.post('php/ajax.php', { emailpost: email});
            $("#hide").hide();
            $("#hide2").show();
        }
    });
});