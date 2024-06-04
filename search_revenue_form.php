<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Search Revenue Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">
    <SCRIPT type="text/javascript">
   window.history.forward();
   function noBack() { window.history.forward(); }
</SCRIPT>

  </head>
  <body onload="noBack();" 
   onpageshow="if (event.persisted) noBack();" onunload="">
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
<h2>Search Revenue (Profit)</h2>

<form action="" method="post">
    <label>From Date:</label> <br>
    <input style="width: 30%" type="date" name="firstDate" style="width:80%" ><br>
    <label>To Date:</label><br>
    <input style="width: 30%" type="date" name="secondDate" style="width:80%" > <br> <br>
    <button class="btn-primary btn" type="submit" name="submit">Search</button>
</form>
</center>

<?php
if(isset($_POST['submit']))
{ 
$firstDate=$_POST['firstDate'];
$secondDate=$_POST['secondDate'];
?>
<h3 style="padding-left: 10px;color:darkblue; text-align:center">Revenue Report from <?php echo $firstDate?> to <?php echo $secondDate?></h3>
<hr >
<center>  

<!----<h5 style=color:darkblue;text-align:center;>Total profit per Vehicle: </h5>---->
<div class="table">
<table>
    
    </center>
<?php
require 'config.php';
$sql = "SELECT  SUM(profit) from revenue where date between '$firstDate' and '$secondDate' ";

$result = $con->query($sql);

//display data on web page
while($row = mysqli_fetch_array($result)){
    echo "<h4 style=color:darkblue;text-align:center;>Total profit for all Vehicles: </h4>".$row['SUM(profit)'];
    

}


$sql = "SELECT vehicle_reg_no, nickname, SUM(profit) FROM revenue where date between '$firstDate' and '$secondDate' GROUP BY vehicle_reg_no";
$result = $con->query($sql);
//display data on web page
?>

<center>  
<div class="table">
<table>
  <h4 style="color:darkblue;"> Profit (Revenue) per Vehicle</h4>
    <tr>
        <th>Vehicle Registration Number</th>
        <th> Vehicle Nickname </th>
        <th> Total Profit</th>
    </tr> 
<?php
while($row = mysqli_fetch_array($result)){

  ?>
  <tr>
  <td><?php echo $row['vehicle_reg_no'];?></td>
  <td><?php echo $row['nickname'];?></td>
  <td><?php echo $row['SUM(profit)'];?></td>

  </tr>
  <?php
  
}
}
else
{
    ?>
      <script type="text/javascript">
          //alert("No record found!!! Please Enter a Date Range");
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








