<?php
@include 'config.php';

/*session_start();

if(!isset($_SESSION['admin_name'])){
    header('location:login_form.php');
}*/
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"content="width=device-width, initial-scale=1.0">
        <title> Print Report </title>
        <!--- custom cs file link---->
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        
<style>
    *{ 
        margin: 0px;

     }
    table { 
        width: 70%;
        text-align: center;

     }
    table tr td{ 
        border: solid black 1px;

     }
</style>

    </head >
    <body>
   <div class="header">
    <a href="home_driver.php"><img src="/images/supremeshuttlelogo.png"></a>
    </div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

<br>
<center>
<div class="form">
<form action="print_report.php" method="GET">
<a href="index.php" ><span hidden>Back</span></a>
<label hidden> ID Number</label>
<input hidden type="text" style="width: 20%;" name= "id_number" value= "<?php if (isset($_GET['id_number'])){echo $_GET['id_number'];}?>"></input>
<!--<button type = "submit">Search</button>-->
<input type="submit" name="insert_btn" value="Search" hidden>
<!--<a href="print_report.php" class="btn btn-printing btn-lg" onClick="print()"><span>Print Report</span></a>-->
<button onClick="window.print()">Print Report</button>
</form> 
</div>

<br>
        <table>       

            <?php
            include 'config.php';
        if(isset($_GET['id_number']))
        {
            $id_number = $_GET['id_number'];    
                    $query = "SELECT appraisal.integrity, appraisal.discpline, appraisal.punctuality, appraisal.accident_free, appraisal.decent, appraisal.points,appraisal.remarks, drivers.names,
                    drivers.id_number, drivers.license_number,  drivers.phone, drivers.phone2, drivers.email, drivers.address,drivers.vehicle_assigned,drivers.passport_photo,
                    vehicles.registration_number, vehicles.nickname
                    FROM drivers, vehicles, appraisal
                    WHERE drivers.id_number = '$id_number'
                    AND appraisal.id_number ='$id_number'
                    AND vehicles.id_number = '$id_number'
                    ";

            $query_run = mysqli_query($con,$query);

            if(mysqli_num_rows($query_run) > 0)
            {
                foreach($query_run as $row)
                {
                    //echo $row ['id_number'];
                    ?>
            <tr>
                <td colspan="5"> <img src ="images/supremeshuttlelogo.png" style="width: 30%;"> <b> </b> </td>
                <td rowspan="4"><img src="images/<?php echo $row['passport_photo'] ?>" width="80px"></td>
            </tr>
            <tr>
            <td colspan="5" style= "color: #0984e3;"><b> P.O. BOX 3333, THIKA</b></td>
            </tr>
            <tr>
            <td colspan="5" style= "color: #0984e3;"><b> PHONE: 07337363663</b></td>
            </tr>
            <tr>
            <td colspan="5" style= "color: #0984e3;"><b>EMAIL: supremeshuttle@gmail.com</b></td>

            </tr>

            <tr>
                <td colspan="6"> ______________________________________________________</td>
            </tr>
            <tr>
                <td colspan="6" style= "color: #0984e3;"><b> DRIVER DETAILS</b></td>
            </tr>
            <tr>
                <td><b>Name:</b></td>
                <td colspan="3"><?php echo $row['names'] ?> </td>
                <td><b>ID No.:</b></td>
                <td> <?php echo $row['id_number'] ?></td>
            </tr>
            <tr>
                <td><b>Phone No. 1:</b></td>
                <td> <?php echo $row['phone'] ?></td>
                <td><b>Phone No. 2: </b></td>
                <td><?php echo $row['phone2'] ?></td>
                <td><b>License No.: </b></td>
                <td><?php echo $row['license_number'] ?> </td>
            </tr>
            <tr>
                <td><b>E-mail: </b></td>
                <td colspan="2"> <?php echo $row['email'] ?></td>
                <td><b>Address: </b></td>
                <td colspan="2"> <?php echo $row['address'] ?></td>
            </tr>
            <tr>
                <td colspan="6" style= "color: #0984e3;"><b>VEHICLE ALLOCATED</b></td>
            </tr>
            <tr>
            <tr>
                <td><b> Vehicle Reg. No.:</b></td>
                <td colspan="2"><?php echo $row['vehicle_assigned'] ?></td>
                <td><b>Nickname: </b></td>
                <td colspan="2"> <?php echo $row['nickname'] ?>  </td>
            </tr>
            <tr>
                <td><b> Criteria:</b></td>
                <td><b> Points:</b></td>
                <td><b>Criteria: </b></td>
                <td><b>Points: </b></td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td><b>Integrity: </b></td>
                <td><?php echo $row['integrity'] ?> </td>
                <td><b>Accident-free: </b></td>
                <td><?php echo $row['accident_free'] ?>  </td>
                <td style= "color: #0984e3;"><b>Average Points:</b></td>
                <td> <?php echo $row['points'] ?></td>
            </tr>
            <tr>
                <td><b> Discipline:</b></td>
                <td> <?php echo $row['discpline'] ?> </td>
                <td><b>Decency: </td>
                <td> <?php echo $row['decent'] ?> </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td><b> Punctuality:</b></td>
                <td> <?php echo $row['punctuality'] ?> </td>
                <td> </td>
                <td style= "color: #0984e3;"><b>Remarks: </b></td>
                <td colspan="2"><?php echo $row['remarks'] ?> </td>
            </tr>
            <tr>
                <td colspan="6"> ______________________________________________________</td>
            </tr>
            <tr>
                <td colspan="2" style= "color: #0984e3;"><b> Chairman</b></td>
                <td colspan="2"> </td>
                <td colspan="2" style= "color: #0984e3;"><b>Managing Director </b></td>
            </tr>
            <tr>
                <td colspan="2" > Sign</td>
                <td colspan="2"> </td>
                <td colspan="2" > Sign </td>
            </tr>
            <tr>
                <td colspan="2" > Mr. Jackson Ole Ntutu</td>
                <td colspan="2"> </td>
                <td colspan="2" >Mr. keneth Matiya Gerany  </td>
            </tr>

        </tr>

        <?php
    }
}
else
{
    ?>
      <script type="text/javascript">
          alert("No record found!!!");
      </script>
      <?php
    //echo "No record found";
}
}
?>

      </table>
      <br>
      <p><i>********** This is a Computer Generated Report **********</i></p>
</center>
<br><br>

<!--
<div class="container">
    <button type="" class="btn btn-info no print" style="width:40%" onclick="window.location.replace('appraisal_report.php');">CANCEL PRINTING</button>
</div> -->
    </body>
</html>

