<?php
$servername = "localhost:3306";
$username = "root";
$password = "root";
$dbname = "participant";


$email_id = $_REQUEST['ple'];
$password = $_REQUEST['plp'];
$flag = false;
    
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `permanentdb` WHERE `ppass` LIKE '".$password."%' or `pmail` LIKE '".$email_id."%'";


$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {

        $data = $row['pmail'];
        $passdb = $row['ppass'];

        if($email_id === $data && $password === $passdb ){

            $flag = true;
            
        }
    }
    
if($flag === TRUE){

    header("Location: ../html/enter page.php");

}


}

else {
    header("Location: ../html/signin.html");
}

if($flag === false){

    header("Location: ../html/signin.html");

}


$conn->close();



 


?>