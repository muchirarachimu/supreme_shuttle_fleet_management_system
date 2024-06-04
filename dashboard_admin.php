<?php
@include 'config.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"content="width=device-width, initial-scale=1.0">
        <title> Dashboard Page </title>
        <!--- custom cs file link---->
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <SCRIPT type="text/javascript">
   window.history.forward();
   function noBack() { window.history.forward(); }
</SCRIPT>

<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  background-color:lightgrey;
}


</style>
    </head>
      <body>    
                <div class="header">
                    <a href="#.php"><img src="/images/supremeshuttlelogo.png"></a>
                </div>
                <div class="topnav" id="myTopnav">
                        <a href="dashboard_admin.php"> DASHBOARD</a>
                        <a href="view_driver.php">DRIVER MANAGEMENT</a>
                        <a href="view_vehicle.php">VEHICLE MANAGEMENT</a>
                        <a href="view_fuel.php"> FUEL MANAGEMENT</a>
                        <a href="view_revenue.php">REVENUE MANAGEMENT</a>
                        <a href="view_issues.php">ISSUES MANAGEMENT</a>
                        <a href="upload_form.php">UPLOADS</a>
                        <a href="view_hired_vehicles.php"> HIRED VEHICLES</a>
                        <a href="index.php">LOGOUT</a>
                        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
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
                    
                <div class="secnav">
                  <!--<a href="index.php"><img src="images/supremeshuttlelogo.png"></a>-->
                  <a href="#.php"> </a>
                  <a href="#.php"> </a>
                  <a href="#.php"></a>
                </div>
                    <h2 style="color:#192a56; text-align:center;" >Admin Dashboard</h2>
                <hr>
                <!---TWO EQUAL COLUMNS FIRST-->
                <div class="rowequal">

                  <div class="columnequal" style="background-color:white;">
                  <!---<h4 style="color:blue; text-align:center;">At a Glance</h4> --->

                  <div class="rowcard">
                  <div class="columncard">
                    <div class="card">
                      <h4>Total Number of Vehicles</h4>
                      <img src="images/busavatar.png">

                <?php   
                require 'config.php';
                $query = "SELECT id FROM vehicles ORDER BY id";
                $query_run = mysqli_query ($con, $query);

                $row = mysqli_num_rows($query_run);

                echo '<h1>'.$row. '</h1>';

                  ?>
                <a href="view_vehicle.php">View More</a>
                  
                    </div>
                  </div>
                  
                  <div class="columncard">
                    <div class="card">
                    <h4>Total Number of Drivers</h4>
                    <img src="images/driverAvater.jpg">
                    <?php   
                require 'config.php';
                $query = "SELECT id FROM drivers ORDER BY id";
                $query_run = mysqli_query ($con, $query);

                $row = mysqli_num_rows($query_run);

                echo '<h1>'.$row. '</h1>';

                  ?>
                  <a href="view_driver.php">View More</a>

                    </div>
                  </div>
                  
                  <div class="columncard">
                    <div class="card">
                    <h4> Total Customer Complaints</h4>
                    <img src="images/customeravatar-removebg-preview.png">
                    <?php   
                require 'config.php';
                $query = "SELECT id FROM  complaints ORDER BY id";
                $query_run = mysqli_query ($con, $query);

                $row = mysqli_num_rows($query_run);

                echo '<h1>'.$row. '</h1>';

                  ?>
                    <a href="view_complaints.php">View More</a>

                    </div>
                  </div>

                  <div class="columncard">
                    <div class="card">
                    <h4>Total No. of Traffic Flaws</h4>
                    <img src="images/trafficirregularityavatar-removebg-preview.png">
                    <?php   
                require 'config.php';
                $query = "SELECT id FROM  traffic_irregularity ORDER BY id";
                $query_run = mysqli_query ($con, $query);

                $row = mysqli_num_rows($query_run);

                echo '<h1>'.$row. '</h1>';

                  ?>
                  <a href="view_traffic_irregularity.php">View More</a>
                    </div>
                  </div>


                  <div class="columncard">
                    <div class="card">
                    <h4>Total Number of Accidents</h4>
                    <img src="images/accidentavatar-removebg-preview.png">
                    <?php   
                require 'config.php';
                $query = "SELECT id FROM  issues ORDER BY id";
                $query_run = mysqli_query ($con, $query);

                $row = mysqli_num_rows($query_run);

                echo '<h1>'.$row. '</h1>';

                  ?>
                  <a href="view_issues.php">View More</a>
                    </div>
                  </div>
                </div>
                <!---END OF CARDS--->
                </div>

                <div class="columnequal" style="background-color:white;">
                <div class="rowcard">
                  <div class="columncard">
                    <div class="card">
                      <h4>Total Number of Displinary</h4>
                      <img src="images/busavatar.png">
                      <?php   
                require 'config.php';
                $query = "SELECT id FROM discplinary ORDER BY id";
                $query_run = mysqli_query ($con, $query);

                $row = mysqli_num_rows($query_run);

                echo '<h1>'.$row. '</h1>';

                  ?>
                <a href="view_discplinary.php">View More</a>
                  
                    </div>
                  </div>
                  
                  <div class="columncard">
                    <div class="card">
                    <h4>Total No. of Driver Messages</h4>
                    <img src="images/driverAvater.jpg">
                    <?php   
                require 'config.php';
                $query = "SELECT id FROM driver_messages ORDER BY id";
                $query_run = mysqli_query ($con, $query);

                $row = mysqli_num_rows($query_run);

                echo '<h1>'.$row. '</h1>';

                  ?>
                  <a href="view_driver_message.php">View More</a>

                    </div>
                  </div>
                  
                  <div class="columncard">
                    <div class="card">
                    <h4> Total No. of Customer Checkins</h4>
                    <img src="images/customeravatar-removebg-preview.png">
                    <?php   
                require 'config.php';
                $query = "SELECT id FROM  hirings ORDER BY id";
                $query_run = mysqli_query ($con, $query);

                $row = mysqli_num_rows($query_run);

                echo '<h1>'.$row. '</h1>';

                  ?>
                    <a href="view_hired_vehicles.php">View More</a>

                    </div>
                  </div>

                  <div class="columncard">
                    <div class="card">
                    <h4>Total No. of Vehicles Hired</h4>
                    <img src="images/trafficirregularityavatar-removebg-preview.png">
                    <?php   
                require 'config.php';
                $query = "SELECT id FROM  hirings ORDER BY id";
                $query_run = mysqli_query ($con, $query);

                $row = mysqli_num_rows($query_run);

                echo '<h1>'.$row. '</h1>';

                  ?>
                  <a href="view_hired_vehicles.php">View More</a>
                    </div>
                  </div>


                  <div class="columncard">
                    <div class="card">
                    <h4>Total Number of Downloads</h4>
                    <img src="images/download.png">
                    <?php   
                require 'config.php';
                $query = "SELECT id FROM  filedownload ORDER BY id";
                $query_run = mysqli_query ($con, $query);

                $row = mysqli_num_rows($query_run);

                echo '<h1>'.$row. '</h1>';

                  ?>
                  <a href="#.php">View More</a>
                    </div>
                  </div>
                </div>

                  </div>
                </div>

                <!---END OF TWO EQUAL COLUMNS FIRST-->
                <h4 style="color:#192a56; text-align:center;" >Revenue (Profit) Details</h4>
                <hr>

                <!---TWO EQUAL COLUMNS SECOND-->
                <div class="rowequal">
                  <div class="columnequal" style="background-color:none;">
                  <br><br>
                  <h5 style="color: #192a56; text-align:center;">Kindly Select Date Range</h5>
                  <br>
                  <form name="datafetch" action="" method="post">
                    <label>From Date:</label> <br>
                    <input type="date" name="firstDate" style="width:80%" ><br>
                    <label>To Date:</label><br>
                    <input type="date" name="secondDate" style="width:80%" ><br><br>
                    <button class="btn-primary btn" type="submit" name="submit">Submit</button>
                </form>

                  </div>
                  <!----SECOND PART OF COLUMN ROW HERE---->
                  <div class="columnequal" style="background-color:none;">
                  <?php
                if(isset($_POST['submit']))
                { 
                $firstDate=$_POST['firstDate'];
                $secondDate=$_POST['secondDate'];
                ?>
                <h5 style="padding-left: 10px;color:darkblue">Profit Report from <?php echo $firstDate?> to <?php echo $secondDate?></h5>
                <hr >

                <?php   
                require 'config.php';
                $sql = "SELECT  SUM(profit) from revenue where date between '$firstDate' and '$secondDate' ";

                $result = $con->query($sql);
                //display data on web page
                while($row = mysqli_fetch_array($result)){
                    echo "  <h5 style=color:darkblue;>Total profit for all Vehicles: </h5>". $row['SUM(profit)'];
                    //echo "<br>";
                    echo "  <h5 style=color:darkblue;>Total profit per Vehicle: </h5>";
                }
                $sql = "SELECT vehicle_reg_no, nickname, SUM(profit) FROM revenue where date between '$firstDate' and '$secondDate' GROUP BY vehicle_reg_no";
                $result = $con->query($sql);
                //display data on web page
                ?>

                <div class="table">
                <table>
                    <tr>
                        <th>Vehicle Registration Number</th>
                        <th> Vehicle Nickname </th>
                        <th> Total Profit</th>
                    </tr> 
                <?php
                while($row = mysqli_fetch_array($result)){
                  ?>
                  <tr>
                  <td><?php echo $row['vehicle_reg_no'];?></td>
                  <td><?php echo $row['nickname'];?></td>
                  <td><?php echo $row['SUM(profit)'];?></td>

                  </tr>
                  <?php
                  
                }
                }
                /*else
                {
                    ?>
                      <script type="text/javascript">
                          alert("No record found!!!");
                      </script>
                      <?php
                    //echo "No record found";
                }
                */
                ?>
                <?php

                ?>
                </table>
                </div>
                </div>
                </div>
                <!----END OF TWO EQUAL COLUMNS SECOND---->
                <hr>
                    </body>
    </html>

