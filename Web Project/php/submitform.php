<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam Link & Form Submission Page</title>

    
<style>

body{

    display:flex;
    justify-content:center;
    align-items:center;
    background-color:steelblue;
}
@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
html,body{
  display: grid;
  height: 100%;
  place-items: center;
}
::selection {
  color: #fff;
  background: #18b495;
}
textarea{
  padding: 10px;
  font-size: 17px;
  resize: none;
  text-align: justify;
  color: #202020;
}
textarea:focus{
  outline-color: #16a085;
  border-color: #16a085;
}
.btn{
  margin: 5px 0 40px 0;
}
.btn button{
  padding: 9px 15px;
  font-size: 17px;
  text-transform: uppercase;
  font-weight: 500;
  background: linear-gradient(#18b495,#16a085);
  border: none;
  color: #f2f2f2;
  cursor: pointer;
  letter-spacing: 1px;
  border-radius: 3px;
  outline: none;
}
.btn .tooltip{
  position: relative;
  margin-left: -10px;
  font-size: 17px;
  font-weight: 500;
  color: #f2f2f2;
  z-index: -1;
  background: linear-gradient(#18b495,#16a085);
  padding: 5px 10px;
  border-radius: 3px;
  text-transform: uppercase;
  letter-spacing: 1px;
  opacity: 0;
  pointer-events: none;
  transition: opacity 0.4s, margin-left 0.4s;
}
.btn .tooltip.show{
  margin-left: 10px;
  opacity: 1;
  pointer-events: auto;
}
.tooltip:before{
  content: '';
  position: absolute;
  height: 15px;
  width: 15px;
  background: linear-gradient(#18b495,#16a085);
  top: 50%;
  left: -5px;
  z-index: -1;
  transform: translateY(-50%) rotate(45deg);
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

$sql = "SELECT * FROM eventdt WHERE id=1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    $ind = 1;
    while($row = $result->fetch_assoc()) {


?>

<div class="examquestion">
<h2 style="color:white;">Exam Link Is Here</h2>
<textarea id="copyText" cols="60" rows="5"> <?php echo $row['link'] ?> </textarea>
         <br/>
         <div class="btn">
            <button>copy in clipboard</button><span class="tooltip">copied</span>
         </div>
      </div>
      
</div>
<script>
         </script>
				

			
		<div class="row justify-content-center">
            <div class="col-md-8">

               

                <div class="card mt-5" >
                    <div class="card-header">	
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
                        <h4>Insert Your Result Link Like github Repository</h4>
                    </div>
                    <div class="card-body">
                        <form action="submitresponse.php" method="POST">
                            <div class="form-group mb-3">
                                <label for="name">Event Name</label>
                                <input type="text" name="name" value='<?php echo $row['Name'] ?>' class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="pname">Your Full Name</label>
                                <input type="text" name="pname" class="form-control">
                            </div>

                            
                            <div class="form-group mb-3">
                                <label for="contact">Mobile No</label>
                                <input type="number" name="contact" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <label for="link">Link Of Output and Code:</label>
                                <input type="text" name="link" class="form-control">
                            </div>
                            
                            <div class="form-group mb-3 text-center">
                                <button type="submit" name="save_output" class="btn btn-primary">Submit</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

        <script src="../javaScript/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script defer src="../javaScript/submitform.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<?php 
} 

  $conn->close();
}
?>	
        
</body>
</html>