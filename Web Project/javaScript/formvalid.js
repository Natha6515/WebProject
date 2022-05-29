$("#abutton").click(function(){

    if($("#afname").val() == ""){

        $("#afname").css({ "border": "1px solid red"});
        $("#a1").show();
        

    }
    if($("#alname").val() == ""){

        $("#alname").css({ "border": "1px solid red"});
        $("#a2").show();
        


    }
    if($("#amobno").val() == ""){

        $("#amobno").css({ "border": "1px solid red"});
        $("#a3").show();
        


    }
    if($("#aemailid").val() == ""){

        $("#aemailid").css({ "border": "1px solid red"});
        $("#a4").show();
        


    }
    if($("#akey").val() == "" && $("#akey").val() != "LDCE@#$%^?"){

        $("#akey").css({ "border": "1px solid red"});
        $("#a5").show();
        

    }
    
    
});

$("#abutton").submit(function(){

    if($("#afname").val() != "" && $("#alname").val() != "" && $("#amobno").val() != "" && $("#aemailid").val() != "" && 
    $("#akey").val() != ""){

        if($("#akey").val() != "" && $("#akey").val() == "LDCE@#$%^?"){

            return true;

        }

    }
    else{

        return false;
    }


});


$("#afname").keyup(function(){
    $("#a1").hide();
    $("#afname").css({ "border": "1px solid black"});
});

$("#alname").keyup(function(){
    $("#a2").hide();
    $("#alname").css({ "border": "1px solid black"});
});

$("#amobno").keyup(function(){
    $("#a3").hide();
    $("#amobno").css({ "border": "1px solid black"});
});

$("#aemailid").keyup(function(){
    $("#a4").hide();
    $("#aemailid").css({ "border": "1px solid black"});
});



$("#sbutton").click(function(){

    if($("#name").val() == ""){

        $("#afname").css({ "border": "1px solid red"});
        $("#p1").show();

    }
    if($("#lname").val() == ""){

        $("#lname").css({ "border": "1px solid red"});
        $("#p2").show();

    }
    if($("#mobno").val() == ""){

        $("#mobno").css({ "border": "1px solid red"});
        $("#p3").show();

    }
    if($("#emailid").val() == ""){

        $("#emailid").css({ "border": "1px solid red"});
        $("#p4").show();

    }
    if($("#pass").val() == ""){

        $("#pass").css({ "border": "1px solid red"});
        $("#p5").show();

    }

    if($("#cpass").val() == ""){

        $("#cpass").css({ "border": "1px solid red"});
        $("#p6").show();

    }

    if($("#pass").val() != $("#cpass").val())
   {
       $("#pass").css({ "border": "1px solid red"});
       $("#cpass").css({ "border": "1px solid red"});
       $("#p7").show();
   }
    
});


$("#name").keyup(function(){
    $("#p1").hide();
    $("#name").css({ "border": "1px solid black"});
});

$("#lname").keyup(function(){
    $("#p2").hide();
    $("#lname").css({ "border": "1px solid black"});
});

$("#mobno").keyup(function(){
    $("#p3").hide();
    $("#mobno").css({ "border": "1px solid black"});
});

$("#emailid").keyup(function(){
    $("#p4").hide();
    $("#emailid").css({ "border": "1px solid black"});
});

$("#pass").keyup(function(){
    $("#p5").hide();
    $("#pss").css({ "border": "1px solid black"});
});

$("#cpass").keyup(function(){
    $("#p6").hide();
    $("#cpass").css({ "border": "1px solid black"});
});



$("#abutton").submit(function(){

    if($("#name").val() != "" && $("#lname").val() != "" && $("#mobno").val() != "" && $("#emailid").val() != "" && $("#pass").val() != "" 
    && $("#cpass").val() != ""){

        if($("#pass").val() == $("#cpass").val()){

            return true;

        }

    }
    else{

        return false;
    }


});



