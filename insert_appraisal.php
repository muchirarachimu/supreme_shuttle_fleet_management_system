<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Insert Appraisal Page</title>
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

<h2 style="color:#192a56";>Insert Driver Appraisal Details</h2>
<div class="form">
<form action="" method="POST" enctype="multipart/form-data">
  <label for="names">Names </label><br>
  <input type="text" name="names" placeholder="Enter full names..." required>
  <br>
  <label for="id_number">ID Number </label><br>
  <input type="text" name="id_number" placeholder="Enter ID Number..." >
  <br><br>
  <label for="passport_photo">Passport Photo </label>
  <input type="file" name="passport_photo"  required>
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
  <!---<label for="remarks">Remarks </label><br>
  <input type="text" name="remarks" placeholder="Enter remarks..." required>
  <br>-->
  <input type="submit" name="insert_btn" value="Insert">
  <input type="reset">
  <p><a href="view_appraisal.php">View Appraisal </a></p>

  
</form>
</div>

</center>


<?php
include 'config.php';


if(isset($_POST['insert_btn'])){
    $names=$_POST['names'];
    $id_number=$_POST['id_number'];
    $image=$_FILES['passport_photo']['name'];
    $tmp_name=$_FILES['passport_photo']['tmp_name'];
    $destination="images/".$image;
    move_uploaded_file($tmp_name, $destination);
    $integrity=$_POST['integrity'];
    $discpline=$_POST['discpline'];
    $punctuality=$_POST['punctuality'];
    $accident_free=$_POST['accident_free'];
    $decent=$_POST['decent'];
   // $points=$GET['points'];
    $points = isset($_GET['points']) ? $_GET['points'] : '';
    //$remarks=$_POST['remarks'];
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



  $insert="INSERT INTO appraisal (names, id_number,passport_photo,integrity,discpline,punctuality,accident_free,decent,points, remarks )
  VALUES('$names', '$id_number', '$image','$integrity','$discpline','$punctuality','$accident_free','$decent','$points', '$remarks')";
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
          alert("Please try again.");
      </script>
      <?php
  }

}


?>
   </body>
    </html>