<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Search Vehicle Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">
    <SCRIPT type="text/javascript">
   window.history.forward();
   function noBack() { window.history.forward(); }
</SCRIPT>

  </head>
  <body>
   <!--NAVIGATION BAR-->
<div class="header">
<a href="#.php"><img src="/images/supremeshuttlelogo.png"></a>
</div>
<div class="topnav" id="myTopnav">
  <!--<a href="index.php"><img src="images/supremeshuttlelogo.png"></a>-->
  <a href="dashboard_admin.php"> DASHBOARD</a>
 <a href="view_driver.php">DRIVER MANAGEMENT</a>
  <a href="view_vehicle.php">VEHICLE MANAGEMENT</a>
  <a href="view_fuel.php"> FUEL MANAGEMENT</a>
  <a href="view_revenue.php">REVENUE MANAGEMENT</a>
  <a href="view_issues.php">ISSUES MANAGEMENT</a>
  <a href="upload_form.php">UPLOADS</a>
  <a href="view_hired_vehicles.php"> HIRED VEHICLES</a>
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
  <a href="#.php"></a>
  <a href="#.php"> </a>
</div>

<center>  
<form action="" method="post">
    <br>
    <h3>Enter Vehicle Registration Number</h3>

    <input style="width: 30%" type="text" name="registration_number" style="width:80%" ><br><br>
    <button class="btn-primary btn" type="submit" name="submit">Search</button>
</form>
</center>

<?php
if(isset($_POST['submit']))
{ 
$registration_number = $_POST['registration_number'];
?>
<h3 style="padding-left: 10px;color:darkblue; text-align:center">Search Results</h3>
<hr >

<?php
require 'config.php';
$sql = "SELECT  * from vehicles WHERE registration_number = '$registration_number' ";

$result = $con->query($sql);

//display data on web page
while($row = mysqli_fetch_array($result)){    

}


$sql = "SELECT * FROM vehicles WHERE registration_number = '$registration_number'";
$result = $con->query($sql);
//display data on web page
?>

<center>  
<div class="table">
<table>
    <tr>
    <th> Registration Number</th>
        <th>Engine Number</th>
        <th>Make</th>
        <th>Model</th>
        <th>Colour</th>
        <th>Year of Manufacture</th>
        <th> Nickname</th>
        <th> Vehicle Photo</th>
        <th> Driver</th>
        <th>Driver ID </th>
    </tr> 
<?php
while($row = mysqli_fetch_array($result)){

  ?>
  <tr>
  <td><?php echo $row['registration_number'] ?></td>
            <td><?php echo $row['engine_number'] ?></td>
            <td><?php echo $row['make'] ?></td>
            <td><?php echo $row['model'] ?></td>
            <td><?php echo $row['colour'] ?></td>
            <td><?php echo $row['year_of_manufacture'] ?></td>
            <td><?php echo $row['nickname'] ?></td>
            <td><img src="images/<?php echo $row['vehicle_photo'] ?>" width="80px"></td>
            <td><?php echo $row['names'] ?></td>
            <td><?php echo $row['id_number'] ?></td>
  </tr>
  <?php
  
}
}
else
{
    ?>
      <script type="text/javascript">
          //alert("No record found!!!");
      </script>
      <?php
    //echo "No record found";
}
?>
<?php

?>
</table>
</div>

</center>

</body>
    </html>








