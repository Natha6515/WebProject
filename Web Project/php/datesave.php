<?php
session_start();
$con = mysqli_connect("localhost:3306","root","root","eventdate");

if(isset($_POST['save_datetime']))
{
    $name = $_POST['name'];
    $event_dt = $_POST['event_dt'];
    $event_min = $_POST['event_min'];
    $event_link = $_POST['event_link'];


    $query = "UPDATE `eventdt` SET `Name`='$name',`date`='$event_dt',`Min`='$event_min',`link`='$event_link' where id=1;";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Exam Data Inserted Successfully Inserted Successfully";
        header("Location: dateandtime.php");
    }
    else
    {
        $_SESSION['status'] = "Not Inserted";
        header("Location: dateandtime.php");
    }
}
?>