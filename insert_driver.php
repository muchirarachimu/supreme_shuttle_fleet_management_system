<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Insert Driver Page</title>
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

<h2 style="color:#192a56";>Register Driver</h2>
<div class="form">
<form action="" method="POST" enctype="multipart/form-data">
  <label for="names">Names </label><br>
  <input type="text" name="names" placeholder="Enter full names..." required>
  <br>
  <label for="id_number">ID Number </label><br>
  <input type="text" name="id_number" placeholder="Enter ID Number..." >
  <br>
  <label for="license_number">License Number </label><br>
  <input type="text" name="license_number" placeholder="Enter License Number..." >
  <br>
  <label for="email">Email </label><br>
  <input type="text" name="email" placeholder="Enter email address..." required>
  <br>
  <label for="phone">Phone 1 </label><br>
  <input type="text" name="phone" placeholder="Enter phone number 1..." required>
<br>
<label for="phone2">Phone 2</label><br>
  <input type="text" name="phone2" placeholder="Enter phone number 2..." required>
<br>
    <label for="address">Address </label><br>
  <input type="text" name="address" placeholder="Enter address..." required>
  <br>
  <label for="vehicle_assigned">Vehicle Assigned </label><br>
  <input type="text" name="vehicle_assigned"  placeholder="Enter vehicle assigned..."required>
  <br>
  <label for="route"> Route </label><br>
  <input type="text" name="route"  placeholder="Enter route..."required>
  <br><br>
  <label for="passport_photo">Passport Photo </label>
  <input type="file" name="passport_photo"  required>
  <br>
  <input type="submit" name="insert_btn" value="Insert">
  <input type="reset">
  <p><a href="view_driver.php">View All Drivers</a></p>

  
</form>
</div>

</center>


<?php
include 'config.php';
error_reporting(0);
if(isset($_POST['insert_btn'])){
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
    move_uploaded_file($tmp_name, $destination);

   $id = "SELECT * FROM drivers WHERE id_number = '$id_number'";
    $result = mysqli_query($con, $id);
    $count = mysqli_num_rows($result);
    if ($count>0){
       //echo "Duplicate!!";
       ?>
      <script type="text/javascript">
          alert("Oops! Duplicate Entry. NB: ID Number, Email and Passport Photo must be unique! Please try again!");
      </script>
      <?php
    }
  $insert="INSERT INTO drivers (names, id_number,license_number,email,phone,phone2,address,vehicle_assigned,route, passport_photo)
  VALUES('$names', '$id_number', '$license_number','$email','$phone','$phone2','$address','$vehicle_assigned','$route','$image')";
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
          alert("Please try again. Note ID Number, email and passport photo must be unique");
      </script>
      <?php
  }

}

   






?>
   </body>
    </html>