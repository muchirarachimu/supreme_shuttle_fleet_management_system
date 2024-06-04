<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Driver Notices Page</title>
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
    background-image: url('images/road4.jpg');
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
<div class="hero">
<h3 style="text-align: center; color:white;"> Ooops! Currently there are no notices on this page. Kindly, check back later.</h3>
</div>
    
    


</body>
</html>