<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Insurance Page</title>
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

 $select="SELECT * FROM insurance WHERE id='$id'";
 $select_q=mysqli_query($con, $select);
 $fetch=mysqli_fetch_array($select_q);

?>
<center>

<div class="form">
<h2 style= "color:blue;">Edit Insurance</h2>
<form action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $fetch['id'] ?>">
    <label for="vehicle_reg_no">Vehicle Registration Number </label><br>
    <input type="text" name="vehicle_reg_no" placeholder="Enter Vehicle Registration Number..." 
    value="<?php echo $fetch['vehicle_reg_no'] ?>" required>
    <br>
    <label for="nickname">Vehicle's Nickname </label><br>
    <input type="text" name="nickname" placeholder="Enter vehicle's nickname..." 
    value="<?php echo $fetch['nickname'] ?>" required>
    <br>
    <label for="previous_insurance_date">Date of Previous Insurance </label><br>
    <input type="date" name="previous_insurance_date" placeholder="Enter Date of previous Insurance..." 
    value="<?php echo $fetch['previous_insurance_date'] ?>" required>
    <br>
    <label for="next_insurance_date">Date of Next Insurance </label><br>
    <input type="date" name="next_insurance_date" placeholder="Enter Date of next Insurance..." 
    value="<?php echo $fetch['next_insurance_date'] ?>" required>
    <br>
   <!-- <label for="remaining_days">Remaining Days </label><br>
    <input type="text" name="remaining_days" placeholder="remaining days..." 
    value="<?php //echo $fetch['remaining_days'] ?>" required>-->
    <br>
  
    <input type="submit" name="update_btn" value="Compute & Update">
    <input type="reset">
    <a href="view_insurance.php" style="background-color: blue;color: white; padding: 8px 18px; text-align: center; text-decoration: none; border-radius: 5px;";>Cancel</a>

    </form>
</div>
</center>

    <?php 
    if(isset($_POST['update_btn'])){
        $vehicle_reg_no=$_POST['vehicle_reg_no'];
        $nickname=$_POST['nickname'];
        $last_insurance=$_POST['last_insurance'];
        $next_insurance=$_POST['next_insurance'];
        $driver=$_POST['driver'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];

        //$profit=$_REQUEST['profit'];

        $update="UPDATE insurance SET vehicle_reg_no='$vehicle_reg_no', nickname='$nickname', last_insurance='$last_insurance', next_insurance='$next_insurance',driver='$driver',phone='$phone',email='$email' WHERE id='$id'";
        $update_q=mysqli_query($con,$update);
        header('location:view_insurance.php');
        
    }
    ?>

</body>
    </html>
