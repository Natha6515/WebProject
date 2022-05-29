<?php
$servername = "localhost:3306";
$username = "root";
$password = "root";
$dbname = "eadmin";


$email_id = $_REQUEST['ale'];
$key = $_REQUEST['alp'];
$flag = false;

if($key === 'Natha#7557' ){
    
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



$sql = "SELECT * FROM `admindb` WHERE `amail` LIKE '".$email_id."%'";


$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {

        $data = $row['amail'];

        if($email_id === $data ){

            $flag = true;
            
        }
    }
    
if($flag === TRUE){

    header("Location: ../html/adminenter.php");

}

}

else {
    header("Location: ../html/register.html");
}


$conn->close();

}
else{

    header("Location: ../html/signin.html");

}
 


?>