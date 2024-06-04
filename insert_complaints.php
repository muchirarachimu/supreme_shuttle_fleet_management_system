<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Insert Complaints Page</title>
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

<h2 style="color:#192a56";>Insert Complaint Details</h2>
<div class="form">
<form action="" method="POST" enctype="multipart/form-data">
  <label for="vehicle_reg_no">Vehicle registration Number </label><br>
  <input type="text" name="vehicle_reg_no" placeholder="Enter Vehicle registration Number..." required>
  <br>
  <label for="nickname">Vehicle Nickname </label><br>
  <input type="text" name="nickname" placeholder="Enter Vehicle Nickname..." >
  <br>
  <label for="date_of_complaint">Date of Complaint  </label><br>
  <input type="date" name="date_of_complaint"  placeholder="Enter Date of Complaint..." required>
  <br>
  <label for="driver_incharge">Driver Incharge </label><br>
  <input type="text" name="driver_incharge" placeholder="Enter Driver Incharge ..." required>
  <br>
  <label for="id_number">Driver ID Number </label><br>
  <input type="number" name="id_number" placeholder="Enter Driver ID Number ..." required>
  <br>
  <label for="complaint_description">Description of Complaint </label><br>
  <input type="text" name="complaint_description" placeholder="Enter brief complaint description ..." required>
    <br>
    <label for="action_taken"> Action Taken </label><br>
  <input type="text" name="action_taken" placeholder="Enter Action Taken ..." required>
  <br>
  <input type="submit" name="insert_btn" value="Insert">
  <input type="reset">
  <p><a href="view_complaints.php">View Complaint(s) </a></p>

</form>
</div>

</center>


<?php
include 'config.php';


if(isset($_POST['insert_btn'])){
    $vehicle_reg_no=$_POST['vehicle_reg_no'];
    $nickname=$_POST['nickname'];
    $date_of_complaint=$_POST['date_of_complaint'];
    $driver_incharge=$_POST['driver_incharge'];
    $id_number=$_POST['id_number'];
    $complaint_description=$_POST['complaint_description'];
    $action_taken=$_POST['action_taken'];
    
  $insert="INSERT INTO complaints (vehicle_reg_no, nickname,date_of_complaint, driver_incharge, id_number, complaint_description,action_taken)
  VALUES('$vehicle_reg_no', '$nickname', '$date_of_complaint','$driver_incharge','$id_number','$complaint_description','$action_taken')";
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