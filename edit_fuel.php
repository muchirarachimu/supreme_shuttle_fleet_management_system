<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Fuel Page</title>
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

 $select="SELECT * FROM fuel WHERE id='$id'";
 $select_q=mysqli_query($con, $select);
 $fetch=mysqli_fetch_array($select_q);

?>
<center>

<div class="form">
<h2 style= "color:blue;">Edit Fuel Consumption</h2>
<form action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $fetch['id'] ?>">
    <label for="date">Date </label><br>
    <input type="date" name="date" placeholder="Enter date..." 
    value="<?php echo $fetch['date'] ?>" required>
    <br>
    <label for="vehicle_reg_no">Vehicle Registration Number </label><br>
    <input type="text" name="vehicle_reg_no" placeholder="Enter Vehicle Registration Number..." value="<?php echo $fetch['vehicle_reg_no'] ?>" required>
    <br>
    <label for="nickname">Nickname</label><br>
    <input type="text" name="nickname" placeholder="Enter vehicle's nickname..." value="<?php echo $fetch['nickname'] ?>" required>
    <br>
    <label for="fuel_cost_per_litre">Fuel Cost per Litre </label><br>
    <input type="number" name="fuel_cost_per_litre" placeholder="Enter fuel fuel_cost_per_litre..." value="<?php echo $fetch['fuel_cost_per_litre'] ?>" required>
    <br>
    <label for="litres_consumed">Litres Consumed </label><br>
    <input type="number" name="litres_consumed" placeholder="Enter Litres Consumed..." value="<?php echo $fetch['litres_consumed'] ?>" required>
    <br>
    <input type="submit" name="update_btn" value="Compute & Update">
    <a href="view_fuel.php" style="background-color: blue;color: white; padding: 8px 18px; text-align: center; text-decoration: none; border-radius: 5px;";>Cancel</a>

    </form>
</div>
</center>

    <?php 
    if(isset($_POST['update_btn'])){
      $date=$_POST['date'];
      $vehicle_reg_no=$_POST['vehicle_reg_no'];
      $nickname=$_POST['nickname'];
      $fuel_cost_per_litre=$_POST['fuel_cost_per_litre'];
      $litres_consumed=$_POST['litres_consumed'];
      $total_cost=$_POST['total_cost'];
      $total_cost=$_REQUEST['total_cost'];

      //compute
      $total_cost = $fuel_cost_per_litre * $litres_consumed ;
  

        $update="UPDATE fuel SET date='$date', vehicle_reg_no='$vehicle_reg_no', nickname='$nickname', fuel_cost_per_litre='$fuel_cost_per_litre', litres_consumed='$litres_consumed',total_cost='$total_cost' WHERE id='$id'";
        $update_q=mysqli_query($con,$update);
        header('location:view_fuel.php');
        
    }
    ?>

</body>
    </html>
