<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Send Message Driver Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">
    <style>
.hero { 
    position: relative; 
    height: 100vh;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background-image: url('images/road3.jpg');
    background-size: cover;
}

.hero::before {
    content: "";
    position: absolute;
    top: 0px;
    right: 0px;
    bottom: 0px;
    left: 0px;
    background-color: rgba(0,0,0,0.25);
}
</style>
  <script>
    if(window.history.replaceState){
      window.history.replaceState(null,null,window.location.href);
    }
    </script>
  </head>
    <body>

    <div class="header">
    <a href="home_driver.php"><img src="/images/supremeshuttlelogo.png"></a>
    </div>
        <div class="topnav" id="myTopnav">
    <!--<a href="index.php"><img src="images/supremeshuttlelogo.png"></a>-->
    <a href="home_driver.php"> HOME</a>
     <a href="appraisal_report.php">APPRAISAL REPORT</a>
      <a href="downloads_driver.php"> DOWNLOADS</a>
      <a href="notices.php"> NOTICES</a>
      <a href="send_message_driver.php"> SEND MESSAGE</a>
      <a href="index.php">LOGOUT</a>
    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
     
<div class="secnav">
  <!--<a href="index.php"><img src="images/supremeshuttlelogo.png"></a>-->
  <a href="#.php"></a>
  <a href="#.php"> </a>
  <a href="#.php"></a>
</div>
   
 
  <!---<div class="hero"> --->

    <center>
<h3 style="color:#192a56";>Send Message </h3>
<div class="form">
<form action="" method="POST" enctype="multipart/form-data">
  <label for="names">Full Names  </label><br>
  <input type="text" name="names" placeholder="Enter Full Names..." required>
  <br>
  <label for="email"> Email </label><br>
  <input type="email" name="email" placeholder="Enter Email..." >
  <br>
  <label for="phone">Phone Number  </label><br>
  <input type="number" name="phone"  placeholder="Enter Phone Number..." required>
  <br>
  <label for="address">Address </label><br>
  <input type="text" name="address" placeholder="Enter address ..." required>
  <br>
  <label for="date_created"> Date</label><br>
  <input type="date" name="date_created" placeholder="Date ..." required ><br>
  <br>
  <label for="message">Message:</label> <br>
    <textarea name="message" rows="5" cols="80">
      </textarea>
      <br>
  <input type="submit" name="insert_btn" value="Send">
  <input type="reset">

</form>
<!---</div>--->

</center>

<?php
include 'config.php';
error_reporting(0);


if(isset($_POST['insert_btn'])){
    $names=$_POST['names'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $date_created=$_POST['date_created'];
    $message=$_POST['message'];
    
  $insert="INSERT INTO driver_messages (names, email, phone, address, date_created, message)
  VALUES('$names', '$email', '$phone','$address','$date_created', '$message')";
  $insert_q=mysqli_query($con,$insert);
  if($insert_q){
      ?>
      <script type="text/javascript">
          alert("Message Sent successfully");
      </script>
      <?php
  } 
  else
  {
      ?>
      <script type="text/javascript">
          alert("Sorry! Message Not Sent. Please Try Again!");
      </script>
      <?php
  }

}


?>




   </body>
    </html>