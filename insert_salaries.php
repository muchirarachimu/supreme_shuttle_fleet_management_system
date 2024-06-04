<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Insert Salaries Page</title>
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

<h2 style="color:#192a56";> Insert Salary</h2>
<div class="form">
<form action="" method="POST" enctype="multipart/form-data">
  <label for="date">Date  </label><br>
  <input type="date" name="date" placeholder="Enter date..." required>
  <br>
  <label for="driver_names">Driver names  </label><br>
  <input type="text" name="driver_names" placeholder="Enter driver names..." required>
  <br>
  <label for="id_number">ID Number </label><br>
  <input type="number" name="id_number" placeholder="Enter ID Number..." required>
  <br>
  <label for="account_number">Account Number  </label><br>
    <input type="number" name="account_number" placeholder="Enter Account Number..."  required>
    <br>
  <label for="basic_pay">Basic Salary </label><br>
  <input type="number" name="basic_pay" placeholder="Enter Basic Pay..." required>
  <br>
  <label for="special_allowance">Special Allowance </label><br>
  <input type="number" name="special_allowance" placeholder="Enter Special Allowance..." required>
  <br>
  <label for="bonus">Bonus </label><br>
  <input type="number" name="bonus" placeholder="Enter bonus..." required>
  <br>
  <label for="advance">Advance </label><br>
  <input type="number" name="advance" placeholder="Enter advance..." required>
  <br>
  <label for="NSSF">NSSF </label><br>
  <input type="number" name="NSSF" placeholder="Enter NSSF..." required>
  <br>
  <label for="NHIF">NHIF </label><br>
  <input type="number" name="NHIF" placeholder="Enter NHIF..." required>
  <br>
  <label for="tax">Tax </label><br>
  <input type="number" name="tax" placeholder="Enter tax..." required>
  <br>

  <input type="submit" name="insert_btn" value="Compute & Insert">
  <input type="reset">
  <p><a href="view_salaries.php">View All Salaries</a></p>

  
</form>
</div>

</center>

<?php
include 'config.php';

if(isset($_POST['insert_btn'])){
    $date=$_POST['date'];
    $driver_names=$_POST['driver_names'];
    $id_number=$_POST['id_number'];
    $account_number=$_POST['account_number'];
    $basic_pay=$_POST['basic_pay'];
    $special_allowance=$_POST['special_allowance'];
    $bonus=$_POST['bonus'];
    $gross_salary = isset($_GET['gross_salary']) ? $_GET['gross_salary'] : '';
    $advance=$_POST['advance'];
    $NSSF=$_POST['NSSF'];
    $NHIF=$_POST['NHIF'];
    $tax=$_POST['tax'];
    $deductions = isset($_GET['deductions']) ? $_GET['deductions'] : '';
    $net_pay = isset($_GET['net_pay']) ? $_GET['net_pay'] : '';

//compute
$gross_salary = $basic_pay + $special_allowance + $bonus ;
$deductions =  $NSSF + $NHIF + $tax + $advance;
$net_pay = $gross_salary - $deductions ;

//echo $profit;
//Apply proper formatting
//$profit = number_format($profit,2);
   
$insert="INSERT INTO salary (date, driver_names,id_number,account_number,basic_pay,special_allowance,bonus,gross_salary, advance, NSSF,NHIF,tax,deductions, net_pay)
  VALUES('$date', '$driver_names','$id_number', '$account_number','$basic_pay','$special_allowance', '$bonus','$gross_salary', '$advance','$NSSF','$NHIF', '$tax', '$deductions','$net_pay')"; 

  
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