<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Insert Discplinary Page</title>
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

<h2 style="color:#192a56;">Insert Indiscpline Issue</h2>
<div class="form">
<form action="" method="POST" enctype="multipart/form-data">
  <label for="names">Names </label><br>
  <input type="text" name="names" placeholder="Enter full names of driver..." required>
  <br>
  <label for="id_number">ID Number </label><br>
  <input type="text" name="id_number" placeholder="Enter ID Number..." >
  <br>
  <label for="phone">Phone </label><br>
  <input type="number" name="phone" placeholder="Enter phone number of driver..." required>
<br><br>
  <label for="passport_photo">Passport Photo </label>
  <input type="file" name="passport_photo"  required>
  <br><br>
  <label for="description">Description of the indiscpline </label><br>
  <input type="text" name="description" placeholder="Enter description of the indiscpline..." required>
<br>
<label for="action_taken">Action Taken </label><br>
  <input type="text" name="action_taken" placeholder="Enter action taken  to the driver..." required>
<br>

  <input type="submit" name="insert_btn" value="Insert">
  <input type="reset">
  <p><a href="view_discplinary.php">View All Indiscpline Issues</a></p>

  
</form>
</div>

</center>


<?php
include 'config.php';
if(isset($_POST['insert_btn'])){
    $names=$_POST['names'];
    $id_number=$_POST['id_number'];
    $phone=$_POST['phone'];
    $image=$_FILES['passport_photo']['name'];
    $tmp_name=$_FILES['passport_photo']['tmp_name'];
    $destination="images/".$image;
    move_uploaded_file($tmp_name, $destination);
    $description=$_POST['description'];
    $action_taken=$_POST['action_taken'];

  $insert="INSERT INTO discplinary (names, id_number,phone, passport_photo, description, action_taken)
  VALUES('$names', '$id_number','$phone','$image', '$description','$action_taken' )";
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