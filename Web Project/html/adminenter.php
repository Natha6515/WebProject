<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../css/admin_page.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

</head>
<body>
    
        <div class="navbar">
        <a href="">Home</a>
        <div class="dropdown">
        <button class="dropbtn">Tools</button>
        <div class="content">
        <a id="calc">Calculator</a>
        <a id="swatch">Stop Watch</a>
        </div>
        </div>
        <div class="dropdown">

        <button class="dropbtn">Set Exam</button>
        <div class="content">
         <a href="../php/dateandtime.php">Set Exam</a>
         <a href="../php/updateevent.php">Update Exam</a>
        </div>
        </div>
        <div class="dropdown">
        <button class="dropbtn">Participants Data</button>
        <div class="content">
         <a href="../php/allparticipants.php">All Participants</a>
         <a href="../php/attendee.php">Take Attendance</a>
         <a href="../php/presentstd.php">Present Students</a>
        </div>
        </div>
        <a href="../php/participantres.php">Participants Responses</a>
        <a href="aboutus.html">Help</a>
        <div id="user">
			<h2 > Admin Page </h2>
		</div> 
    
        </div>
        </div>

<?php 
        
        
$servername = "localhost:3306";
$username = "root";
$password = "root";
$dbname = "eventdate";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM eventdt WHERE id=1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    $ind = 1;
    while($row = $result->fetch_assoc()) {

?>
        

        <div class="etime">

        <div class="leftdiv">
            <h3 class="tr">Time Remains</h3>

            <p id="contdown"><span id="min"><?php echo $row['Min'] ?></span> min : <span id="sec"> 00 </span> Sec
            </p>
        </div>
        </div>
        <div class="timer">

                <h2>Event Exam will Start In</h2>
                <p id="dbox"><?php echo $row['date'] ?></p>
                <h2 id="end"></h2>

        </div>

        
		<div id="submitform">
		
             <button class="button button1"><a href="../php/seeresponse.php">Click Hereto see Responses</a></button>

        </div>
    
        		
<script>
</script>

<script src="../javaScript/jquery.min.js"></script>
<script src="../javaScript/cdtd.js"></script>
<script src="../javaScript/popupwindow.js"></script>
<script id="scrpt"></script>
<script src="../javaScript/homepageact.js"></script>

<?php

} 

$conn->close();
}

?>
</body>
</html>