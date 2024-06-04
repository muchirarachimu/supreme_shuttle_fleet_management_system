<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Vehicle Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">

  </head>
    <body>
<?php

include 'config.php';
$id = $_GET['id'];

 $select="SELECT * FROM vehicles WHERE id='$id'";
 $select_q=mysqli_query($con, $select);
 $fetch=mysqli_fetch_array($select_q);

?>
<center>
<div class="form">
<h2 style= "color:blue;">Edit Vehicle</h2>
<form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $fetch['id'] ?>">
        <label for="registration_number">Registration Number  </label><br>
        <input type="text" name="registration_number" placeholder="Enter Registration Number of vehicle..."
        value="<?php echo $fetch['registration_number'] ?>" required>
        <br>
        <label for="engine_number">Engine Number </label><br>
        <input type="text" name="engine_number" placeholder="Enter  Engine Number... "
        value="<?php echo $fetch['engine_number'] ?>" required>
        <br> 
        <label for="make">Make </label><br>
        <input type="text" name="make" placeholder="Enter make  of vehicle... "
        value="<?php echo $fetch['make'] ?>" required>
        <br> 
        <label for="model">Model </label><br>
        <input type="text" name="model" placeholder="Enter model of vehicle... "
        value="<?php echo $fetch['model'] ?>" required>
        <br> 
        <label for="colour">Address </label><br>
        <input type="text" name="colour" placeholder="Enter colour of vehicle... "
        value="<?php echo $fetch['colour'] ?>" required>
        <br> 
        <label for="year_of_manufacture">Year of Manufacture </label><br>
        <input type="text" name="year_of_manufacture"  placeholder="Enter vehicle's Year of Manufacture..."
        value="<?php echo $fetch['year_of_manufacture'] ?>" required>
        <br>
        <label for="nickname">Route </label><br>
        <input type="text" name="nickname"  placeholder="Enter nickname of vehicle..."
        value="<?php echo $fetch['nickname'] ?>"required>
        <br><br>
        <label for="vehicle_photo">Vehicle Photo </label>
        <input type="file" name="vehicle_photo" required>
        <br>
        <img src="images/<?php echo $fetch['vehicle_photo'] ?>" width="70px">
        <br>
        <label for="names"> Driver In Charge </label><br>
        <input type="text" name="names"  placeholder="Enter name of driver incharge..."
        value="<?php echo $fetch['names'] ?>" required>
        <br>
        <label for="id_number"> Driver ID Number </label><br>
        <input type="number" name="id_number"  placeholder="Enter ID number of driver..."
        value="<?php echo $fetch['id_number'] ?>" required>
        <br><br>

        <input type="submit" name="update_btn" value="Update">
        <input type="reset">
        <a href="view_vehicle.php" style="background-color: crimson;color: white; padding: 8px 18px; text-align: center; text-decoration: none; border-radius: 5px;";>Cancel</a>

        

    </form>
</div>
</center>

    <?php 
    if(isset($_POST['update_btn'])){
        $registration_number=$_POST['registration_number'];
        $engine_number=$_POST['engine_number'];
        $make=$_POST['make'];
        $model=$_POST['model'];
        $colour=$_POST['colour'];
        $year_of_manufacture=$_POST['year_of_manufacture'];
        $nickname=$_POST['nickname'];
        $image=$_FILES['vehicle_photo']['name'];
        $tmp_name=$_FILES['vehicle_photo']['tmp_name'];
        $destination="images/".$image;
        $names=$_POST['names'];
        $id_number=$_POST['id_number'];

        if($image!="")
        {
            $update="UPDATE vehicles SET registration_number='$registration_number', engine_number='$engine_number', make='$make', model='$model', colour='$colour',year_of_manufacture='$year_of_manufacture', nickname ='$nickname', vehicle_photo='$image',names='$names',id_number='$id_number' WHERE id='$id'";
            $update_q=mysqli_query($con,$update);
            header('location:view_vehicle.php');
        }
        else
        {
            $update="UPDATE vehicles SET registration_number='$registration_number', engine_number='$engine_number', make='$make', model='$model', colour='$colour',year_of_manufacture='$year_of_manufacture', nickname ='$nickname',names='$names',id_number='$id_number' WHERE id='$id'";
            $update_q=mysqli_query($con,$update);
            header('location:view_vehicle.php');        
        }
    }
    ?>

</body>
    </html>
