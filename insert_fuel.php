<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Insert Fuel Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">

  <script>
    if(window.history.replaceState){
      window.history.replaceState(null,null,window.location.href);
    }
    </script>
  </head>
    <body>
    <center>

<h2 style="color:#192a56";> Insert Fuel</h2>
<div class="form">
<form action="" method="POST" enctype="multipart/form-data">
  <label for="date">Date </label><br>
  <input type="date" name="date" placeholder="Enter date..." required>
  <br>
  <label for="vehicle_reg_no">Vehicle Registration Number </label><br>
  <input type="text" name="vehicle_reg_no" placeholder="Enter Vehicle Registration Number..." required>
  <br>
  <label for="nickname">Nickname </label><br>
  <input type="text" name="nickname" placeholder="Enter nickname..." required>
  <br>
  <label for="fuel_cost_per_litre">Fuel Cost per Litre </label><br>
  <input type="number" name="fuel_cost_per_litre" placeholder="Enter fuel fuel_cost_per_litre..." required>
  <br>
  <label for="litres_consumed">Litres Consumed </label><br>
  <input type="number" name="litres_consumed" placeholder="Enter Litres Consumed..." required>
  <br>
 
  <br>
  <input type="submit" name="insert_btn" value="Compute & Insert">
  <input type="reset">
  <p><a href="view_fuel.php">View Fuel Consumed</a></p>

  
</form>
</div>

</center>

<?php
include 'config.php';

if(isset($_POST['insert_btn'])){
    $date=$_POST['date'];
    $vehicle_reg_no=$_POST['vehicle_reg_no'];
    $nickname=$_POST['nickname'];
    $fuel_cost_per_litre=$_POST['fuel_cost_per_litre'];
    $litres_consumed=$_POST['litres_consumed'];
    //$total_cost=$_POST['total_cost'];

    $total_cost = isset($_GET['total_cost']) ? $_GET['total_cost'] : '';

    //compute
    $total_cost = $fuel_cost_per_litre * $litres_consumed ;
    //$profit = $total - $expenses ;

$insert="INSERT INTO fuel (date, vehicle_reg_no,nickname,fuel_cost_per_litre,litres_consumed,total_cost)
  VALUES('$date', '$vehicle_reg_no', '$nickname','$fuel_cost_per_litre','$litres_consumed','$total_cost')"; 

  
  $insert_q=mysqli_query($con,$insert);
  if($insert_q){
      ?>
      <script type="text/javascript">
          alert("Data saved successfully");
      </script>
      <?php
  } 
  else
  {
      ?>
      <script type="text/javascript">
          alert("Please try again.");
      </script>
      <?php
  }

}

   






?>
   </body>
    </html>