$(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip();
    $('body').scrollspy({
        target: ".navbar",
        offset: 10
    });
    // Add smooth scrolling to all links inside a navbar
    $("#scroll-top a").on('click', function (event) {

        // Prevent default anchor click behavior
        //event.preventDefault();

        // Store hash (#)
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area (the speed of the animation)
        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 500, function () {

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
        });
    });
    $("#inputCP").change(function (e) {
        if ($(this).val() !== $("#inputPassword").val()) {
            $("#ErrPass").html("Does not match password");
            $("#inputSubmit").prop("disabled", true);
        } else {
            $("#ErrPass").html("");
            $("#inputSubmit").prop("disabled", false);
        }
    });

    /*
    -----desc: Add new inputs
    *********************************************/
    var count = [];
    count[0] = 0;
    count[1] = 0;
    count[2] = 0;
    count[3] = 0;
    $("#sAddressBtn").click(function () {
        var penultimate = "<div class='addresser'><input type='text' name='sAddress' id='sAddress' placeholder='New Sender Address line' class='form-control primary-border' value='' title=''></div>";
        $(".addresser").eq(count[0]).after(penultimate);
        count[0]++;
        console.log($(":input[name='sAddress']").length);
    });
    $("#rAddressBtn").click(function () {
        penultimate = "<div class='addressee'><input type='text' name='rAddress' id='rAddress' placeholder='New Receiver Address line' class='form-control primary-border' value='' title=''></div>";
        $(".addressee").eq(count[1]).after(penultimate);
        count[1]++;
    });
    $("#lBodyBtn").click(function () {
        penultimate = "<div class='lBody'><textarea name='lBody' class='form-control primary-border' placeholder='New paragraph' id='sAddress' rows='3' cols=''></textarea></div>";
        $(".lBody").eq(count[2]).after(penultimate);
        count[2]++;
    });
    $("#concludeBtn").click(function () {
        penultimate = "<div class='conclude'><input type='text' name='conclude' id='conclude' placeholder='New conclusion line' class='form-control primary-border' value='' title=''></div>";
        $(".conclude").eq(count[3]).after(penultimate);
        count[3]++;
    });

    /*
    -----desc: Remove additional input
    *********************************************/
    $("#sAddressRemove").click(function (e) { 
        e.preventDefault();
        if(count[0] !== 0 ){
            $(".addresser")
            .eq(count[0])   
            .remove();
            count[0]--;
        }
    });
    $("#rAddressRemove").click(function (e) { 
        e.preventDefault();
        if(count[1] !== 0 ){
            $(".addressee")
            .eq(count[1])   
            .remove();
            count[1]--;
        }
    });
    $("#lBodyRemove").click(function (e) { 
        e.preventDefault();
        if(count[2] !== 0 ){
            $(".lBody")
            .eq(count[2])   
            .remove();
            count[2]--;
        }
    });
    $("#concludeRemove").click(function (e) { 
        e.preventDefault();
        if(count[3] !== 0 ){
            $(".conclude")
            .eq(count[3])   
            .remove();
            count[3]--;
        }
    });

    function concatInput(selector, stringVar, elem) {
        if (elem == "input") {
            selector.each(function (index, element) {
                if (index == 0) {
                    stringVar = '(nl) ' + $(this).val() + ' (:nl)';
                } else {
                    stringVar += '(nl) ' + $(this).val() + ' (:nl)';
                }
            });
        } else {
            selector.each(function (index, element) {
                if (index == 0) {
                    stringVar = '(nl) ' + $(this).html() + ' (:nl)';
                } else {
                    stringVar += '(nl) ' + $(this).html() + ' (:nl)';
                }
            });
        }
        return stringVar;
    }

    /*
    -----desc: Submit form to Backend(PHP) 
    *********************************************/
    $("#createLetter").submit(function (e) {
        var loopString = [];
        var elemType = [];
        elemType[0] = "input";
        loopString[0] = concatInput($(":input[name='sAddress']"), loopString[0], elemType[0]);
        loopString[1] = concatInput($(":input[name='rAddress']"), loopString[1], elemType[0]);
        loopString[2] = concatInput($("textarea[name='lBody']"), loopString, elemType[0]);
        loopString[3] = concatInput($(":input[name='conclude']"), loopString, elemType[0]);
        console.log(loopString[0]);
        console.log(loopString[1]);
        console.log(loopString[2]);
        console.log(loopString[3]);
        var serial = "senderAdd="+loopString[0]+"&recieverAdd="+loopString[1]+"&header="+$(":input[name='header']").val();
        serial +="&letterBody="+loopString[2]+"&conclusion="+loopString[3]+"&letterTitle="+$(":input[name='lTitle']").val(); 
        serial +="&ui="+$(":input[name='ui']").val()+"&compliment="+$(":input[name='compliment']").val();

        $.ajax({
            type:$("#createLetter").attr('method'),
            url: $("#createLetter").attr('action'),
            data: serial,
            success: function (response) {
                alert(response);


            },
            error: function(){
                console.log('An error occured');
                console.log( $("#createLetter").attr('action'));
            }
        });
        e.preventDefault();
    });
});