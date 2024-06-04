<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Revenue Page</title>
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

 $select="SELECT * FROM revenue WHERE id='$id'";
 $select_q=mysqli_query($con, $select);
 $fetch=mysqli_fetch_array($select_q);

?>
<center>

<div class="form">
<h2 style= "color:blue;">Edit Revenue</h2>
<form action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $fetch['id'] ?>">
    <label for="date">Date </label><br>
    <input type="date" name="date" placeholder="Enter date..." 
    value="<?php echo $fetch['date'] ?>" required>
    <br>
    <label for="vehicle_reg_no">Vehicle Registration Number </label><br>
    <input type="text" name="vehicle_reg_no" placeholder="Enter Vehicle Registration Number..." value="<?php echo $fetch['vehicle_reg_no'] ?>" required>
    <br>
    <label for="nickname">Vehicle Nickname  </label><br>
    <input type="text" name="nickname" placeholder="Enter Vehicle Nickname..." value="<?php echo $fetch['nickname'] ?>" required>
    <br>
    <label for="psv_earnings_per_day">PSV Earnings per day </label><br>
    <input type="text" name="psv_earnings_per_day" placeholder="Enter  PSV Earnings per day..." value="<?php echo $fetch['psv_earnings_per_day'] ?>" required>
    <br>
    <label for="hired_earnings_per_day">Hired Earnings per day </label><br>
    <input type="text" name="hired_earnings_per_day" placeholder="Enter  Hired Earnings per day..." value="<?php echo $fetch['hired_earnings_per_day'] ?>" required>
    <br>
    <label for="expenses">Expenses </label><br>
    <input type="text" name="expenses" placeholder="Enter expenses..." value="<?php echo $fetch['expenses'] ?>" required>
    <br>
  
    <input type="submit" name="update_btn" value="Compute & Update">
    <input type="reset">
    <a href="view_revenue.php" style="background-color: crimson; color: white; padding: 8px 18px; text-align: center; text-decoration: none; border-radius: 5px;";>Cancel</a>

    </form>
</div>
</center>

    <?php 
    if(isset($_POST['update_btn'])){
        $date=$_POST['date'];
        $vehicle_reg_no=$_POST['vehicle_reg_no'];
        $nickname=$_POST['nickname'];
        $psv_earnings_per_day=$_POST['psv_earnings_per_day'];
        $hired_earnings_per_day=$_POST['hired_earnings_per_day'];
        $expenses=$_POST['expenses'];
        //$profit=$_REQUEST['profit'];
        $profit=$_REQUEST['profit'];

        //compute
        $total = $psv_earnings_per_day + $hired_earnings_per_day ;
        $profit = $total - $expenses ;

        $update="UPDATE revenue SET date='$date', vehicle_reg_no='$vehicle_reg_no', nickname = '$nickname', psv_earnings_per_day='$psv_earnings_per_day', hired_earnings_per_day='$hired_earnings_per_day', expenses='$expenses', profit='$profit'  WHERE id='$id'";
        $update_q=mysqli_query($con,$update);
        header('location:view_revenue.php');
        
    }
    ?>

</body>
    </html>
