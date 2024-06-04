<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Insert Revenue Page</title>
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

<h2 style="color:#192a56";> Insert Revenue</h2>
<div class="form">
<form action="" method="POST" enctype="multipart/form-data">
  <label for="date">Date </label><br>
  <input type="date" name="date" placeholder="Enter date..." required>
  <br>
  <label for="vehicle_reg_no">Vehicle Registration Number </label><br>
  <input type="text" name="vehicle_reg_no" placeholder="Enter Vehicle Registration Number..." required>
  <br>
  <label for="nickname">Vehicle Nickname  </label><br>
    <input type="text" name="nickname" placeholder="Enter Vehicle Nickname..."  required>
    <br>
  <label for="psv_earnings_per_day">PSV Earnings per day </label><br>
  <input type="text" name="psv_earnings_per_day" placeholder="Enter  PSV Earnings per day..." required>
  <br>
  <label for="hired_earnings_per_day">Hired Earnings per day </label><br>
  <input type="text" name="hired_earnings_per_day" placeholder="Enter  Hired Earnings per day..." required>
  <br>
  <label for="expenses">Expenses </label><br>
  <input type="text" name="expenses" placeholder="Enter expenses..." required>
  <br>
  <input type="submit" name="insert_btn" value="Compute & Insert">
  <input type="reset">
  <p><a href="view_revenue.php">View All Revenue</a></p>

  
</form>
</div>

</center>

<?php
include 'config.php';

if(isset($_POST['insert_btn'])){
    $date=$_POST['date'];
    $vehicle_reg_no=$_POST['vehicle_reg_no'];
    $nickname=$_POST['nickname'];
    $psv_earnings_per_day=$_POST['psv_earnings_per_day'];
    $hired_earnings_per_day=$_POST['hired_earnings_per_day'];
    $expenses=$_POST['expenses'];
    //$profit=$_REQUEST['profit'];
    $profit = isset($_GET['profit']) ? $_GET['profit'] : '';

//compute
$total = $psv_earnings_per_day + $hired_earnings_per_day ;
$profit = $total - $expenses ;
//echo $profit;
//Apply proper formatting
//$profit = number_format($profit,2);
   
$insert="INSERT INTO revenue (date, vehicle_reg_no,nickname,psv_earnings_per_day,hired_earnings_per_day,expenses,profit)
  VALUES('$date', '$vehicle_reg_no','$nickname', '$psv_earnings_per_day','$hired_earnings_per_day','$expenses', '$profit')"; 

  
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