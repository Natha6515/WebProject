
var count = 0;
var timer = false;
var min = 0;
var hour = 0;
var sec = 0;

$("#start").click(function(){

    timer = true;
    main();

});

$("#stop").click(function(){

    timer = false;

});

$("#resume").click(function(){
    
    count = 0;
    timer = false;
    min = 0;
    hour = 0;
    sec = 0

    
    document.getElementById("hr").innerHTML = "00";
    document.getElementById("min").innerHTML ="00";
    document.getElementById("sec").innerHTML ="00";
    document.getElementById("ms").innerHTML = "00";


});

function main(){

    if(timer == true){

        count = count + 1;

        if(count == 100){
           sec = sec + 1;
           count = 0;

        }

        if(sec == 60){

            min = min + 1;
            count = 0;
            sec = 0;
            
        }

        if(min == 60){

            hour =hour + 1;
            min = 0;
            count = 0;
            sec = 0;
            
        }

        
var mins = min;
var secs = sec;
var hrstring = hour;

if(sec<10){

    secs = "0" + secs;
}


if(min<10){

    mins = "0" + mins;
}


if(hour<10){

    hrstring = "0" + hrstring;
    
}


        document.getElementById("hr").innerHTML = hrstring;
        document.getElementById("min").innerHTML = mins;
        document.getElementById("sec").innerHTML = secs;
        document.getElementById("ms").innerHTML = count;

        setTimeout("main()",7.5);

}


}
