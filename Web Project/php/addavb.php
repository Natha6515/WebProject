<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendees</title>
</head>
<body>

<?php 


$servername = "localhost:3306";
$username = "root";
$password = "root";
$dbname = "participant";

$id = $_REQUEST['id'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM  npermanentdb where id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
    
                $did = $row['id'] ;
                $name = $row['pname'] ;
                $lname = $row['plname'] ;
                $mob = $row['pmob'] ;
                $mail = $row['pmail'] ;
                $city = $row['pcity'] ;
                $password = $row['ppass'] ;

}
  
} 


$sql2 = "INSERT INTO `attendee`(`id`,`pname`, `plname`,`pmob`,`pcity`,`pmail`,`ppass`)
VALUES ('$did','$name','$lname','$mob','$city','$mail','$password')";


$sql3 = "DELETE FROM npermanentdb WHERE id=$id";

if ($conn->query($sql2) === TRUE && $conn->query($sql3) === TRUE ) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
 }
  

$conn->close();

header("Location: attendee.php");

?>

</body>
</html>