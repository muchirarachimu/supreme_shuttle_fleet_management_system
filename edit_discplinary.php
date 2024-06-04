<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Discplinary Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">

  </head>
    <body>
<?php

include 'config.php';
$id = $_GET['id'];

 $select="SELECT * FROM discplinary WHERE id='$id'";
 $select_q=mysqli_query($con, $select);
 $fetch=mysqli_fetch_array($select_q);

?>
<center>

<div class="form">
<h2 style= "color:#192a56;">Edit Indiscpline Issue</h2>
<form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $fetch['id'] ?>">
        <label for="names">Names </label><br>
        <input type="text" name="names" placeholder="Enter full names of driver..." 
        value="<?php echo $fetch['names'] ?>"required>
        <br>
        <label for="id_number">ID Number </label><br>
        <input type="number" name="id_number" placeholder="Enter ID Number..." 
        value="<?php echo $fetch['id_number'] ?>"required>
        <br>
        <label for="phone">Phone </label><br>
        <input type="number" name="phone" placeholder="Enter phone number of driver..." 
        value="<?php echo $fetch['phone'] ?>"required>
        <br><br>
        <label for="passport_photo">Passport Photo </label>
        <input type="file" name="passport_photo"  
        value="<?php echo $fetch['passport_photo'] ?>"required>
        <img src="images/<?php echo $fetch['passport_photo'] ?>" width="70px">
        <br><br>
        <label for="description">Description of the indiscpline </label><br>
        <input type="text" name="description" placeholder="Enter description of the indiscpline..." 
        value="<?php echo $fetch['description'] ?>"required>
        <br>
        <label for="action_taken">Action Taken </label><br>
        <input type="text" name="action_taken" placeholder="Enter action taken number to the driver..." 
        value="<?php echo $fetch['action_taken'] ?>"required>
        <br>
        <input type="submit" name="update_btn" value="Compute & Update">
        <input type="reset">
        <a href="view_discplinary.php" style="background-color: crimson;color: white; padding: 8px 18px; text-align: center; text-decoration: none; border-radius: 5px;";>Cancel</a>

        

    </form>
</div>
</center>

    <?php 
    if(isset($_POST['update_btn'])){
        $names=$_POST['names'];
        $id_number=$_POST['id_number'];
        $phone=$_POST['phone'];
        $image=$_FILES['passport_photo']['name'];
        $tmp_name=$_FILES['passport_photo']['tmp_name'];
        $destination="images/".$image;
        $description=$_POST['description'];
        $action_taken=$_POST['action_taken'];
        if($image!="")
        {
            $update="UPDATE discplinary SET names='$names', id_number='$id_number', phone='$phone',  passport_photo='$image',description='$description',action_taken='$action_taken' WHERE id='$id'";
            $update_q=mysqli_query($con,$update);
            header('location:view_discplinary.php');
        }
        else
        {
            $update="UPDATE discplinary SET names='$names', id_number='$id_number', phone='$phone',description='$description',action_taken='$action_taken' WHERE id='$id'";
            $update_q=mysqli_query($con,$update);
            header('location:view_discplinary.php');        
        }
    }
    ?>

</body>
    </html>
