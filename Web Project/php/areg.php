<?php
$servername = "localhost:3306";
$username = "root";
$password = "root";
$dbname = "eadmin";

$first_name =  $_REQUEST['afname'];
$last_name = $_REQUEST['alname'];
$mobile_no = $_REQUEST['amobno'];
$email_id = $_REQUEST['aemailid'];
$key = $_REQUEST['akey'];


if($key === 'Natha#7557' ){
    
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO admindb (`aname`, alname,amob,amail)
VALUES ('$first_name','$last_name','$mobile_no','$email_id')";


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 
header("Location: ../html/signin.html");

}
else{

    header("Location: ../html/register.html");

}

?>