function confirmExit()
{
 alert("exiting");
 window.location.href='index.html';
 return true;
}
window.onbeforeunload = confirmExit;

var submitform3 = document.getElementById('submitform');
submitform3.style.display = 'none';

var submitform2 = document.getElementsByClassName('sdf');
        
for (var i = 0; i < submitform2.length; i ++) {
	submitform2[i].style.display = 'none';
}

	var dat = document.getElementById("dbox").innerHTML;

	var countDownDate = new Date(dat).getTime();
	
	
	var myfunc = setInterval(function() {
	
	var now = new Date().getTime();
	var timeleft = countDownDate - now;
		
	var days = Math.floor(timeleft / (1000 * 60 * 60 * 24));
	var hours = Math.floor((timeleft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
	var minutes = Math.floor((timeleft % (1000 * 60 * 60)) / (1000 * 60));
	var seconds = Math.floor((timeleft % (1000 * 60)) / 1000);
		
	document.getElementById("dbox").innerHTML = '<span style="font-size: 40px;"> '+days+' </span>' + "days <span style='font-size: 40px;''>:</span>" + '<span style="font-size: 40px;"> '+hours+' </span>' + "hr<span style='font-size: 20px;''><span style='font-size: 40px;''> : </span>" +
	'<span style="font-size: 40px;"> '+minutes+' </span>' + "min<span style='font-size: 40px;''> : </span>" + '<span style="font-size: 40px;"> '+seconds+' </span>' +"sec";
	if (timeleft < 0) {
		
		clearInterval(myfunc);


		// clock starts 	
        var appBanners = document.getElementsByClassName('etime');

        for (var i = 0; i < appBanners.length; i ++) {
            appBanners[i].style.display = '';
        }

		// Start timer of exam
		// when exam day counter is over
		var scrpt = document.getElementById("scrpt");
        scrpt.setAttribute("src","../javaScript/examtimecnt.js");

		//document.getElementById("dbox").innerHTML = "00" + "days " + "00" + "hr" + "00" + "min" + "00" +"sec";
	     //document.getElementById("end").innerHTML = "TIME UP!!";
	   
		// form and exam link button
	    var buttonlink = document.getElementsByClassName('sdf');
        
           for (var i = 0; i < buttonlink.length; i ++) {
               buttonlink[i].style.display = '';
           }


	}
	}, 1000);

