<?php require_once("config.php");
if(!isset($_SESSION["login_sess"])) 
{
    header("location:login.php"); 
}
  $email=$_SESSION["login_email"];
  $findresult = mysqli_query($dbc, "SELECT * FROM users WHERE email= '$email'");
if($res = mysqli_fetch_array($findresult))
{
$username = $res['username']; 
$fname = $res['fname'];   
$lname = $res['lname'];  
$email = $res['email'];  
$image= $res['image'];
}
 ?> 
 <!DOCTYPE html>
<html>
<!--<head>
    <title> My Account - magmalanka</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="style.css">
</head>-->
<head>
<title>ManageLanka/Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="CSS/1.css">
    <link rel="stylesheet" href="CSS/2.css">
    <link rel="stylesheet" href="CSS/3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
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
  <a href="#login.php" class="ml-hide-small navBar-item buttonML ml-mobile ml-medium ml-right" style="margin-top:15px;">LOGIN/REGISTER</a>
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


<div class="container">

    <div class="row">
        <div class="col-sm-3">
            
        </div>
        <div class="col-sm-6">
        
  <div class="login2_form">

          <div class="row">
            <div class="col"></div>
           <div class="col-6"> 
             <?php if(isset($_GET['profile_updated'])) 
      { ?>
    <div class="successmsg">Profile saved ..</div>
      <?php } ?>
        <?php if(isset($_GET['password_updated'])) 
      { ?>
    <div class="successmsg">Password has been changed...</div>
      <?php } ?>
            <center>
            <?php if($image==NULL)
                {
                 echo '<img src="https://technosmarter.com/assets/icon/user.png">';
                } else { echo '<img src="images/'.$image.'" style="height:80px;width:auto;border-radius:50%;">';}?> 

  <p> Welcome! <span style="color:#33CC00"><?php echo $username; ?></span> </p>
  </center>
           </div>
            <div class="col"><p><a href="logout.php"><span style="color:red;">Logout</span> </a></p>
         </div>
          </div>

          <table class="table">
          <tr>
              <th>First Name </th>
              <td><?php echo $fname; ?></td>
          </tr>
          <tr>
              <th>Last Name </th>
              <td><?php echo $lname; ?></td>
          </tr>
          <tr>
              <th>Username </th>
              <td><?php echo $username; ?></td>
          </tr>
           <tr>
              <th>Email </th>
              <td><?php echo $email; ?></td>
          </tr>
          </table>
           <div class="row">
            <div class="col-sm-2">
            </div>
             <div class="col-sm-4">
                <a href="edit-profile.php"><button type="button" class="btn btn-primary">Edit Profile</button></a>
            </div>
            <div class="col-sm-6">
         <a href="change-password.php"><button type="button" class="btn btn-warning">Change Password</button></a>
            </div>
           </div>
        </div>
        <div class="col-sm-3">
        </div>
    </div>
</div> 
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</html>