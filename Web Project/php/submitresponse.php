
<?php

session_start();
$con = mysqli_connect("localhost:3306","root","root","eventdate");

if(isset($_POST['save_output']))
{

$full_name =  $_POST['name'];
$event_name = $_POST['pname'];
$mobno = $_POST['contact'];
$link = $_POST['link'];


    
$query = "INSERT INTO  `response`(`ename`,`username`,`mobno`,`anslink`)
VALUES ('$event_name','$full_name','$mobno','$link')";

    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Response is added";
        header("Location: submitform.php");
    }
    else
    {
        $_SESSION['status'] = "did not get the response";
        header("Location: submitform.php");
    }
}
?>