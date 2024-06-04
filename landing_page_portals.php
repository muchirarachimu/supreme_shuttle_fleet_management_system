<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"content="width=device-width, initial-scale=1.0">
        <title> Landing Page Portals</title>
        <!--- custom cs file link---->
        <link rel="stylesheet" href="style.css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <style>
        body { background-color:lightgrey; }
        /* Float four columns side by side */
        </style>

        
    </head>


    <body>
    <div class="header">
    <a href="#.php"><img src="/images/supremeshuttlelogo.png"></a>
    </div>
<div class="topnav" id="myTopnav">
  <!--<a href="index.php"><img src="images/supremeshuttlelogo.png"></a>-->
  <a href="index.php"> HOME</a>
 
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
  <a href="#.php"> </a>
  <a href="#.php"> </a>
  <a href="#.php"></a>
</div>
<h1 style="text-align:center;color:#192a56;"> Supreme Shuttle Fleet Management System </h1>
<hr>
<br><br>
<center>
          <p><a href="login-user-driver.php">Driver Portal</a></p><br>
          <p><a href="login-user-customer.php">Customer Portal</a></p>
</center>
          

    </body>
</html>






