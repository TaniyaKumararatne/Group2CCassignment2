<?php
session_start();
require 'dbcon.php';
?>   


<!doctype html>
<html lang="en">
<head>
    <title>ManageLanka/Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="CSS/1.css">
    <link rel="stylesheet" href="CSS/2.css">
    <link rel="stylesheet" href="CSS/3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      html {scroll-behavior: smooth;}
      h1,h2,h3,h4,h5,h6 {font-family: "Roboto"}
      body {font-family: "Source Sans Pro"}
      
    </style>
  </head>
<body class="ml-margin ml-light-green">

<!-- Navigation bar with links -->
<div class="navBar ml-dark-greenie blackText" style="max-width:100%">
  <a href="Home.html"><img src="Images/logo-removebg.png" class="left tagML ml-dark-greenie" width="200px"></a>
  <a href="login.php" class="ml-hide-small navBar-item buttonML ml-mobile ml-medium ml-right" style="margin-top:15px;">LOGIN/REGISTER</a>
  <a href="ContactUs.html" class="ml-hide-small navBar-item buttonML ml-mobile ml-medium ml-right" style="margin-top:15px;">CONTACT US</a>
  <a href="About Us.html" class="ml-hide-small navBar-item buttonML ml-mobile ml-medium ml-right" style="margin-top:15px;">ABOUT US</a>
  <a href="Home.html" class="ml-hide-small navBar-item buttonML ml-mobile ml-medium ml-right" style="margin-top:15px;">HOME</a>
  <a href="javascript:void(0)" class="navBar-item buttonML ml-right ml-hide-medium ml-hide-large" style="margin-top:15px;" onclick="myFunction()"> &#9776;</a>
</div>

<div id="demo" class="navBar-block whiteBg ml-hide ml-hide-large ml-small">
  <a href="#Home" class="navBar-item buttonML">HOME</a>
  <a href="About Us.html" class="navBar-item buttonML">ABOUT US</a>
  <a href="ContactUs.html" class="navBar-item buttonML">CONTACT US</a>
  <a href="signup.php" class="navBar-item buttonML">LOGIN/REGISTER</a>
</div>
<br>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>schedule Edit 
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $schedule_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM schedule WHERE id='$schedule_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $schedule = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="schedule_id" value="<?= $schedule['id']; ?>">

                                    <div class="mb-3">
                                        <label> Truck Number</label>
                                        <input type="text" name="truck_name" value="<?=$schedule['truck_name'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Area</label>
                                        <input type="text" name="area" value="<?=$schedule['area'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Division</label>
                                        <input type="text" name="division" value="<?=$schedule['division'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Time</label>
                                        <input type="text" name="clock" value="<?=$schedule['clock'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_schedule" class="btn btn-primary">
                                            Update schedule
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>