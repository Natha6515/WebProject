<?php
$servername = "localhost:3306";
$username = "root";
$password = "root";
$dbname = "participant";

$first_name =  $_REQUEST['name'];
$last_name = $_REQUEST['lname'];
$city = $_REQUEST['city'];
$mobile_no = $_REQUEST['mobno'];
$email_id = $_REQUEST['emailid'];
$password = $_REQUEST['pass'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO permanentdb (`pname`, plname,pmob,pcity,pmail,`ppass`)
VALUES ('$first_name','$last_name','$city','$mobile_no','$email_id','$password')";


$sql2 = "INSERT INTO npermanentdb (`pname`, plname,pmob,pcity,pmail,`ppass`)
VALUES ('$first_name','$last_name','$city','$mobile_no','$email_id','$password')";


if ($conn->query($sql) === TRUE && $conn->query($sql2) === TRUE ) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 
header("Location: ../html/signin.html");

?>