<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Appraisal Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">

  </head>
    <body>
<?php

include 'config.php';

$id = $_GET['id'];

 $select="SELECT * FROM appraisal WHERE id='$id'";
 $select_q=mysqli_query($con, $select);
 $fetch=mysqli_fetch_array($select_q);

?>
<center>

<div class="form">
<h2 style= "color:#192a56;">Edit Driver Appraisal Details</h2>
<form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $fetch['id'] ?>">
    <label for="names">Names </label><br>
  <input type="text" name="names" placeholder="Enter full names..." value="<?php echo $fetch['names'] ?>"  required>
  <br>
  <label for="id_number">ID Number </label><br>
  <input type="text" name="id_number" placeholder="Enter ID Number..." value="<?php echo $fetch['id_number'] ?>" required>
  <br><br>
  <label for="passport_photo">Passport Photo </label>
  <input type="file" name="passport_photo"  required>
  <img src="images/<?php echo $fetch['passport_photo'] ?>" width="70px">

  <br><br>

  <h3 style="color:#192a56";>Appraisal Section</h3>
  <label for="integrity">Integrity </label><br>
  <select name="integrity">
                <option value="5">5</option>
                <option value="4">4</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="1">1</option>
    </select>
    <br>
    <label for="discpline">Discpline </label><br>
    <select name="discpline">
                <option value="5">5</option>
                <option value="4">4</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="1">1</option>
    </select>
    <br>
  <label for="punctuality">Punctuality  </label><br>
  <select name="punctuality">
                <option value="5">5</option>
                <option value="4">4</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="1">1</option>
    </select>
    <br>
  <label for="accident_free"> Accident Free </label><br>
  <select name="accident_free">
                <option value="5">5</option>
                <option value="4">4</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="1">1</option>
   </select>
  <br>
  <label for="decent"> Decency  </label><br>
  <select name="decent">
                <option value="5">5</option>
                <option value="4">4</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="1">1</option>
    </select>
    <br>

        <input type="submit" name="update_btn" value="Compute & Update">
        <input type="reset">
        <a href="view_appraisal.php" style="background-color: crimson;color: white; padding: 8px 18px; text-align: center; text-decoration: none; border-radius: 5px;";>Cancel</a>

        

    </form>
</div>
</center>

    <?php 
    if(isset($_POST['update_btn'])){
        $names=$_POST['names'];
        $id_number=$_POST['id_number'];
        $image=$_FILES['passport_photo']['name'];
        $tmp_name=$_FILES['passport_photo']['tmp_name'];
        $destination="images/".$image;
        $email=$_POST['email'];
        $integrity=$_POST['integrity'];
        $discpline=$_POST['discpline'];
        $punctuality=$_POST['punctuality'];
        $accident_free=$_POST['accident_free'];
        $decent=$_POST['decent'];

        $points = isset($_GET['points']) ? $_GET['points'] : '';
        $remarks = isset($_GET['remarks']) ? $_GET['remarks'] : '';

        //compute
        $total = $integrity + $discpline + $punctuality + $accident_free + $decent ;
        $points = $total / 5 ;
    
        $remarks = $points;

        if($points>=4.5)
        {
          $remarks="Outstanding";
          echo "Outstanding";
        }
        elseif($points<4.5 && $points>=3.5)
        {
          $remarks="Exceeds Expectation";
          echo "Exceeds Expectation";
        }
        elseif($points<3.5 && $points>=2.5)
        {
          $remarks="Meets Expectation";
              echo "Meets Expectation";
      
        }
        elseif($points<3 && $points>=2)
        {
          $remarks=" Needs Improvement";
              echo "Needs Improvement";
      
        }
        elseif($points<2 && $points>=1)
        {
          $remarks=" Unacceptable";
              echo "Unacceptable";
        }
        else
        {
          echo "Pathetic";
        }
      
        if($image!="")
        {
            $update="UPDATE appraisal SET names='$names', id_number='$id_number', passport_photo='$image', integrity='$integrity',discpline='$discpline', punctuality ='$punctuality',accident_free ='$accident_free', decent ='$decent', points ='$points', remarks='$remarks'  WHERE id='$id'";
            $update_q=mysqli_query($con,$update);
            header('location:view_appraisal.php');
        }
        else
        {
            $update="UPDATE appraisal SET names='$names', id_number='$id_number', integrity='$integrity',discpline='$discpline', punctuality ='$punctuality',accident_free ='$accident_free',decent ='$decent',  points ='$points', remarks='$remarks'  WHERE id='$id'";
            $update_q=mysqli_query($con,$update);
            header('location:view_appraisal.php');        
        }
    }
    ?>

</body>
    </html>
