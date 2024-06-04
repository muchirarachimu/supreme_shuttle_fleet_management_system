<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Insert Inspection Page</title>
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

<h2 style="color:#192a56";> Insert Inspection Details</h2>
<div class="form">
<form action="" method="POST" enctype="multipart/form-data">
    <label for="vehicle_reg_no">Vehicle Registration Number </label><br>
    <input type="text" name="vehicle_reg_no" placeholder="Enter Vehicle Registration Number..." required>
    <br>
    <label for="nickname">Vehicle's Nickname </label><br>
    <input type="text" name="nickname" placeholder="Enter vehicle's nickname..." required>
    <br>
    <label for="last_inspection">Date of Last Inspection </label><br>
    <input type="date" name="last_inspection" placeholder="Enter Date of Last Inspection..." required>
    <br>
    <label for="next_inspection">Date of Next Inspection </label><br>
    <input type="date" name="next_inspection" placeholder="Enter Date of Next Inspection..." required>
    <br>
    
    <input type="submit" name="insert_btn" value="Insert">
    <input type="reset">
    <p><a href="view_inspection.php">View Inspection Details</a></p>

  
</form>
</div>

</center>

<?php
include 'config.php';

if(isset($_POST['insert_btn'])){
    $vehicle_reg_no=$_POST['vehicle_reg_no'];
    $nickname=$_POST['nickname'];
    $last_inspection=$_POST['last_inspection'];
    $next_inspection=$_POST['next_inspection'];
    $status = isset($_GET['status']) ? $_GET['status'] : '';
    $remaining_days = isset($_GET['remaining_days']) ? $_GET['remaining_days'] : '';


    //compute
$today_date = date('Y-m-d'); 
//convert to strtotime
$exp = strtotime($next_inspection);
$td = strtotime($today_date);
 //now compare using if logic
 if($td > $exp)
 {
    //calculate days left
    $diff = $td-$exp;
    $remaining_days= abs(floor($diff / (60 * 60 * 24)));
    $status= "Expired";
    //echo "Expired";
   // echo "<br/> Days Left:".$remaining_days;
 }
 else
{
    $diff = $td-$exp;
    $remaining_days=abs(floor($diff / (60 * 60 * 24)));
    $status= "Active";
    //echo "Active";
   // echo "<br/> Days Left:".$remaining_days;
}
$insert="INSERT INTO inspection (vehicle_reg_no,nickname,last_inspection,next_inspection,status, remaining_days)
  VALUES('$vehicle_reg_no', '$nickname','$last_inspection','$next_inspection','$status','$remaining_days')"; 

  
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