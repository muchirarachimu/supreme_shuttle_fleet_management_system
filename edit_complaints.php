<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Complaints Page </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">
    <script>
    if(window.history.replaceState){
      window.history.replaceState(null,null,window.location.href);
    }
    </script>
  </head>
    <body>
<?php

include 'config.php';
$id = $_GET['id'];

 $select="SELECT * FROM complaints WHERE id='$id'";
 $select_q=mysqli_query($con, $select);
 $fetch=mysqli_fetch_array($select_q);

?>
<center>

<div class="form">
<h2 style= "color:blue;">Edit Accident Details</h2>
<form action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $fetch['id'] ?>">
    <label for="vehicle_reg_no">Vehicle registration Number </label><br>
  <input type="text" name="vehicle_reg_no" placeholder="Enter Vehicle registration Number..." 
  value="<?php echo $fetch['vehicle_reg_no'] ?>" required>
  <br>
  <label for="nickname">Vehicle Nickname </label><br>
  <input type="text" name="nickname" placeholder="Enter Vehicle Nickname..." 
  value="<?php echo $fetch['vehicle_reg_no'] ?>" required>
  <br>
  <label for="date_of_complaint">Date of Complaint  </label><br>
  <input type="date" name="nickname"  placeholder="Enter Date of Complaint..." 
  value="<?php echo $fetch['nickname'] ?>" required>
  <br>
  <label for="driver_incharge">Driver Incharge </label><br>
  <input type="text" name="driver_incharge" placeholder="Enter Driver Incharge ..." 
  value="<?php echo $fetch['driver_incharge'] ?>" required>
  <br>
  <label for="id_number">Driver ID Number </label><br>
  <input type="number" name="id_number" placeholder="Enter Driver ID Number ..." 
  value="<?php echo $fetch['id_number'] ?>" required>
  <br>
  <label for="complaint_description">Description of Complaint </label><br>
  <input type="text" name="complaint_description" placeholder="Enter brief complaint description ..." 
  value="<?php echo $fetch['complaint_description'] ?>" required>
    <br>
    <label for="action_taken"> Action Taken </label><br>
  <input type="text" name="action_taken" placeholder="Enter Action Taken ..." 
  value="<?php echo $fetch['complaint_description'] ?>" required>
  <br>
    <input type="submit" name="update_btn" value="Compute & Update">
    <input type="reset">
    <a href="view_complaints.php" style="background-color: crimson;color: white; padding: 8px 18px; text-align: center; text-decoration: none; border-radius: 5px;">Cancel</a>

    </form>
</div>
</center>

    <?php 
    if(isset($_POST['update_btn'])){
        $vehicle_reg_no=$_POST['vehicle_reg_no'];
        $nickname=$_POST['nickname'];
        $date_of_complaint=$_POST['date_of_complaint'];
        $driver_incharge=$_POST['driver_incharge'];
        $id_number=$_POST['id_number'];
        $complaint_description=$_POST['complaint_description'];
        $action_taken=$_POST['action_taken'];

        $update="UPDATE complaints SET vehicle_reg_no='$vehicle_reg_no', nickname='$nickname', date_of_complaint='$date_of_complaint', driver_incharge='$driver_incharge',id_number='$id_number',complaint_description='$complaint_description', action_taken='$action_taken' WHERE id='$id'";
        $update_q=mysqli_query($con,$update);
        header('location:view_complaints.php');
        
    }
    ?>

</body>
    </html>
