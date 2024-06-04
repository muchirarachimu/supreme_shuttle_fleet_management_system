<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Inspection Page</title>
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

 $select="SELECT * FROM inspection WHERE id='$id'";
 $select_q=mysqli_query($con, $select);
 $fetch=mysqli_fetch_array($select_q);

?>
<center>

<div class="form">
<h2 style= "color:blue;">Edit Inspection</h2>
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
    <label for="last_inspection">Date of Last Inspection </label><br>
    <input type="date" name="last_service" placeholder="Enter Date of Last Inspection..." 
    value="<?php echo $fetch['last_inspection'] ?>" required>
    <br>
    <label for="next_inspection">Date of Next Inspection </label><br>
    <input type="date" name="next_inspection" placeholder="Enter Date of Next Inspection..." 
    value="<?php echo $fetch['next_inspection'] ?>" required>
    <br>

    <input type="submit" name="update_btn" value="Compute & Update">
    <input type="reset">
    <a href="view_inspection.php" style="background-color: blue;color: white; padding: 8px 18px; text-align: center; text-decoration: none; border-radius: 5px;";>Cancel</a>

    </form>
</div>
</center>

    <?php 
    if(isset($_POST['update_btn'])){
        $vehicle_reg_no=$_POST['vehicle_reg_no'];
        $nickname=$_POST['nickname'];
        $last_inspection=$_POST['last_inspection'];
        $next_inspection=$_POST['next_inspection'];
        //$profit=$_REQUEST['profit'];

        $update="UPDATE inspection SET vehicle_reg_no='$vehicle_reg_no', nickname='$nickname', last_inspection='$last_inspection', next_inspection='$next_inspection' WHERE id='$id'";
        $update_q=mysqli_query($con,$update);
        header('location:view_inspection.php');
        
    }
    ?>

</body>
    </html>
