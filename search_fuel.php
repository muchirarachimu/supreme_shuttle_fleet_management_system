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

    <input style="width: 30%" type="text" name="vehicle_reg_no" style="width:80%" ><br><br>
    <button class="btn-primary btn" type="submit" name="submit">Search</button>
</form>
</center>

<?php
if(isset($_POST['submit']))
{ 
$vehicle_reg_no = $_POST['vehicle_reg_no'];
?>
<h3 style="padding-left: 10px;color:darkblue; text-align:center">Search Results</h3>
<hr >

<?php
require 'config.php';
$sql = "SELECT  * from fuel WHERE vehicle_reg_no = '$vehicle_reg_no' ";

$result = $con->query($sql);

//display data on web page
while($row = mysqli_fetch_array($result)){    

}


$sql = "SELECT * FROM fuel WHERE vehicle_reg_no = '$vehicle_reg_no'";
$result = $con->query($sql);
//display data on web page
?>

<center>  
<div class="table">
        <table>
        <tr>
            <th> Date</th>
            <th>Vehicle Registration Number</th>
            <th>Nickname</th>
            <th>Fuel Cost per Litre</th>
            <th>Litres Consumed</th>
            <th>Total Cost </th>
        </tr> 
                <?php
                while($row = mysqli_fetch_array($result)){
                  ?>
        <tr>
        <td><?php echo $row['date'] ?></td>
            <td><?php echo $row['vehicle_reg_no'] ?></td>
            <td><?php echo $row['nickname'] ?></td>
            <td><?php echo $row['fuel_cost_per_litre'] ?></td>
            <td><?php echo $row['litres_consumed'] ?></td>
            <td style= "font-weight:bold; color:blue;"><?php echo $row['total_cost'] ?></td>
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








