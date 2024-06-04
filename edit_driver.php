<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Drivers Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">

  </head>
    <body>
<?php

include 'config.php';
$id = $_GET['id'];

 $select="SELECT * FROM drivers WHERE id='$id'";
 $select_q=mysqli_query($con, $select);
 $fetch=mysqli_fetch_array($select_q);

?>
<center>

<div class="form">
<h2 style= "color:#192a56;">Edit Driver</h2>
<form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $fetch['id'] ?>">
        <label for="names">Names  </label><br>
        <input type="text" name="names" placeholder="Enter full names..."
        value="<?php echo $fetch['names'] ?>" required>
        <br>
        <label for="id_number">ID Number </label><br>
        <input type="text" name="id_number" placeholder="Enter  ID Number... "
        value="<?php echo $fetch['id_number'] ?>" required>
        <br> 
        <label for="license_number">License Number </label><br>
        <input type="text" name="license_number" placeholder="Enter  License Number... "
        value="<?php echo $fetch['license_number'] ?>" required>
        <br> 
        <label for="email">Email </label><br>
        <input type="text" name="email" placeholder="Enter email... "
        value="<?php echo $fetch['email'] ?>" required>
        <br> 
        <label for="phone">Phone 1 </label><br>
        <input type="text" name="phone" placeholder="Enter Phone Number 1... "
        value="<?php echo $fetch['phone'] ?>" required>
        <br> 
        <label for="phone2">Phone 2 </label><br>
        <input type="text" name="phone2" placeholder="Enter Phone Number 2... "
        value="<?php echo $fetch['phone2'] ?>" required>
        <br> 
        <label for="address">Address </label><br>
        <input type="text" name="address" placeholder="Enter address... "
        value="<?php echo $fetch['address'] ?>" required>
        <br> 
        <label for="vehicle_assigned">Vehicle Assigned </label><br>
        <input type="text" name="vehicle_assigned"  placeholder="Enter vehicle assigned..."
        value="<?php echo $fetch['vehicle_assigned'] ?>" required>
        <br>
        <label for="route">Route </label><br>
        <input type="text" name="route"  placeholder="Enter route..."
        value="<?php echo $fetch['route'] ?>"required>
        <br><br>
        <label for="passport_photo">Passport Photo </label>
        <input type="file" name="passport_photo" required>
        <br>
        <img src="images/<?php echo $fetch['passport_photo'] ?>" width="70px">
        <br><br>

        <input type="submit" name="update_btn" value="Update">
        <input type="reset">
        <a href="view_driver.php" style="background-color: crimson;color: white; padding: 8px 18px; text-align: center; text-decoration: none; border-radius: 5px;";>Cancel</a>

        

    </form>
</div>
</center>

    <?php 
    if(isset($_POST['update_btn'])){
        $names=$_POST['names'];
        $id_number=$_POST['id_number'];
        $license_number=$_POST['license_number'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $phone2=$_POST['phone2'];
        $address=$_POST['address'];
        $vehicle_assigned=$_POST['vehicle_assigned'];
        $route=$_POST['route'];
        $image=$_FILES['passport_photo']['name'];
        $tmp_name=$_FILES['passport_photo']['tmp_name'];
        $destination="images/".$image;
        if($image!="")
        {
            $update="UPDATE drivers SET names='$names', id_number='$id_number', license_number='$license_number', email='$email', phone='$phone', phone2='$phone2', address='$address',vehicle_assigned='$vehicle_assigned', route ='$route', passport_photo='$image' WHERE id='$id'";
            $update_q=mysqli_query($con,$update);
            header('location:view_driver.php');
        }
        else
        {
            $update="UPDATE drivers SET names='$names', id_number='$id_number', license_number='$license_number', email='$email', phone='$phone', phone2='$phone2', address='$address' vehicle_assigned='$vehicle_assigned',route ='$route' WHERE id='$id'";
            $update_q=mysqli_query($con,$update);
            header('location:view_driver.php');        
        }
    }
    ?>

</body>
    </html>
