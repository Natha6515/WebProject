<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>All Participants</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/data.css">

<style>

tr,td,th{

    color:black;
}

body{

font-family: Arial, Helvetica, sans-serif;

}


</style>

</head>
<body>


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

$sql = "SELECT * FROM  `response`";
$result = $conn->query($sql);

?>

<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>All Participants <b> Responses </b></h2></div>
                    <div class="col-sm-4">
                        
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Index</th>
                        <th>Event Name</th>
                        <th>Full Name of User</th>
                        <th>Mobile No.</th>
                        <th>Result Link</th>
                    </tr>
                </thead>
                <tbody>

<?php 

if ($result->num_rows > 0) {

    $ind = 1;
    while($row = $result->fetch_assoc()) {
    
?>

                
                    <tr>
                        <td><?php echo "<h6>" .$ind. "<?h6>"?></td>
                        <td><?php echo "<h6>". $row['ename']  ."</h6>"?></td>
                        <td><?php echo "<h6>". $row['username'] ."</h6>" ?></td>
                        <td><a href="tel:+91 <?php echo $row['mobno']?>"><?php echo "<h6>". $row['mobno']  ."</h6>"?></a></td>
                        <td><a target="_blank" href='<?php echo $row['anslink']  ?>'><?php echo "<h6>". $row['anslink']  ."</h6>"?></a></td>
                        
                    </tr>
                    
                    

                    <?php 
                    
                    $ind ++;

  }
  
  $conn->close();
                    
                    ?>
                </tbody>
            </table>
            
    </div>  
</div> 



<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
    
<?php }?>
</body>
</html>