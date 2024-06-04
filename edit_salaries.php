<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Salaries Page</title>
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

 $select="SELECT * FROM salary WHERE id='$id'";
 $select_q=mysqli_query($con, $select);
 $fetch=mysqli_fetch_array($select_q);

?>
<center>

<div class="form">
<h2 style= "color:blue;">Edit Revenue</h2>
<form action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $fetch['id'] ?>">
    <label for="date">Date </label><br>
    <input type="date" name="date" placeholder="Enter date..." value="<?php echo $fetch['date'] ?>" required>
    <br>
    <label for="driver_names">Driver names  </label><br>
    <input type="text" name="driver_names" placeholder="Enter driver names..." value="<?php echo $fetch['driver_names'] ?>" required>
    <br>
    <label for="id_number">ID Number </label><br>
    <input type="number" name="id_number" placeholder="Enter ID Number..." value="<?php echo $fetch['id_number'] ?>" required>
    <br>
    <label for="account_number">Account Number  </label><br>
    <input type="number" name="account_number" placeholder="Enter Account Number..." value="<?php echo $fetch['account_number'] ?>" required>
    <br>
    <label for="basic_pay">Basic Salary </label><br>
    <input type="number" name="basic_pay" placeholder="Enter Basic Pay..." value="<?php echo $fetch['basic_pay'] ?>" required>
    <br>
    <label for="special_allowance">Special Allowance </label><br>
    <input type="number" name="special_allowance" placeholder="Enter Special Allowance..." value="<?php echo $fetch['special_allowance'] ?>" required>
    <br>
    <label for="bonus">Bonus </label><br>
    <input type="number" name="bonus" placeholder="Enter bonus..." value="<?php echo $fetch['bonus'] ?>" required>
    <br>
    <label for="advance">Advance </label><br>
    <input type="number" name="advance" placeholder="Enter advance..." value="<?php echo $fetch['advance'] ?>" required>
    <br>
    <label for="NSSF">NSSF </label><br>
    <input type="number" name="NSSF" placeholder="Enter NSSF..." value="<?php echo $fetch['NSSF'] ?>" required>
    <br>
    <label for="NHIF">NHIF </label><br>
    <input type="number" name="NHIF" placeholder="Enter NHIF..." value="<?php echo $fetch['NHIF'] ?>" required>
    <br>
    <label for="tax">Tax </label><br>
    <input type="number" name="tax" placeholder="Enter tax..." value="<?php echo $fetch['tax'] ?>" required>
    <br>
  
    <input type="submit" name="update_btn" value="Compute & Update">
    <input type="reset">
    <a href="view_salaries.php" style="background-color: crimson; color: white; padding: 8px 18px; text-align: center; text-decoration: none; border-radius: 5px;";>Cancel</a>

    </form>
</div>
</center>

    <?php 
    if(isset($_POST['update_btn'])){
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
        //$profit=$_REQUEST['profit'];
        $net_pay = isset($_GET['net_pay']) ? $_GET['net_pay'] : '';
    
    //compute
    $gross_salary = $basic_pay + $special_allowance + $bonus ;
    $deductions =  $NSSF + $NHIF + $tax + $advance;
    $net_pay = $gross_salary - $deductions ;
       
        $update="UPDATE salary SET date='$date', driver_names='$driver_names', id_number = '$id_number', account_number='$account_number', basic_pay='$basic_pay', special_allowance='$special_allowance', bonus='$bonus', gross_salary='$gross_salary', advance='$advance',NSSF='$NSSF', NHIF='$NHIF', tax='$tax', deductions='$deductions', net_pay='$net_pay'    WHERE id='$id'";
        $update_q=mysqli_query($con,$update);
        header('location:view_salaries.php');
        
    }
    ?>

</body>
    </html>
