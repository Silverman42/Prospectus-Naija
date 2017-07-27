$(document).ready(function(){
    $("#name").blur(function () { 
        var out = $(this).val();
        if(out=="off"){
            $("#submit").prop("disabled",true);
            $("#error").html("Submit: off")
        }
        else{
            $("#submit").prop("disabled",false);
            $("#error").html("Submit: on")
        }
        $("#out").html(out);
    });
});