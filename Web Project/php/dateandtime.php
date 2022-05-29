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

<style>

body{

    display:flex;
    justify-content:center;
    align-items:center;
    background-color:steelblue;
}

</style>

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

                <div class="card mt-5">
                    <div class="card-header">
                        <h4>Insert Date and Time of Your Event and Duration of Event</h4>
                    </div>
                    <div class="card-body">

                        <form action="datesave.php" method="POST">
                            <div class="form-group mb-3">
                                <label for="name">Event Name</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="event_dt">Event Date & Time</label>
                                <input type="datetime-local" name="event_dt" id="event_dt" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <label for="event_min">Exam Duration in Minute</label>
                                <input type="number" name="event_min" id="event_min" class="form-control">
                            </div>
                            
                            <div class="form-group mb-3">
                                <label for="event_link">Exam Question Link</label>
                                <input type="text" name="event_link" id="event_link" class="form-control">
                            </div>

                            <div class="form-group mb-3 text-center">
                                <button type="submit" name="save_datetime" class="btn btn-primary">Save Event</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>