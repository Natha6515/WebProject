<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date and Time</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                         unset($_SESSION['status']);
                    }
                ?>

                
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

                <div class="card mt-5">
                    <div class="card-header">
                        <h4>Update Date and Time of Your Event and Duration of Event</h4>
                    </div>
                    <div class="card-body">

                        <form action="datesave.php" method="POST">
                            <div class="form-group mb-3">
                                <label for="">Event Name</label>
                                <input type="text" name="name" value='<?php echo $row['Name'] ?>' class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Event Date & Time</label>
                                <input type="datetime-local" value='<?php echo $row['date'] ?>' name="event_dt" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">And Min</label>
                                <input type="number_format" value='<?php echo $row['Min'] ?>' name="event_min" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" name="save_datetime" class="btn btn-primary">Update Event</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php 
} 

  $conn->close();
}
?>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>