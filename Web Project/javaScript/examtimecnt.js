const tm = document.getElementById("min").innerHTML;
const sc = document.getElementById("sec").innerHTML;

let tm2 = tm * 60;
console.log(tm2);

var minute = document.getElementById("min");
var seconds = document.getElementById("sec");

setInterval(counterstart,1000);


function counterstart(){

    
    let mn = Math.floor(tm2/60);
    let sc = tm2 % 60;

    sc =sc<10 ? '0' + sc :sc;

    if(mn <= 0 && sc <= 0){

     seconds.innerHTML = `00`;
     minute.innerHTML = `00`;

     var buttonlink1 = document.getElementsByClassName('sdf');
        
     for (var i = 0; i < buttonlink1.length; i ++) {
         buttonlink1 [i].style.display = 'none';
     }
     
    }
    else{
     
     seconds.innerHTML = `${sc}`;
     minute.innerHTML = `${mn}`;
     tm2--;
    }

    

    
        
}


