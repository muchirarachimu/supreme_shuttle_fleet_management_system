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
        <title> Hire Vehicle Page </title>
        <!--- custom cs file link---->
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <SCRIPT type="text/javascript">
              window.history.forward();
              function noBack() { window.history.forward(); }
        </SCRIPT>
        <style>
            body { background-color:lightgrey;}
        </style>
    </head>
      <body>
                <!--- Header---->
                  <div class="header">
                        <a href="home_driver.php"><img src="/images/supremeshuttlelogo.png"></a> 
                  </div>  
                 <!--- Navigation Bar---->
                  <div class="topnav" id="myTopnav">
                        <a href="home_customer.php"> HOME</a>
                        <a href="about_us.php">ABOUT US</a>
                        <a href="hire_vehicle.php"> HIRE VEHICLE</a>
                        <a href="contacts.php"> CONTACTS</a>
                        <a href="index.php">LOGOUT</a>
                        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
                    </div>
                  <!--- Script to collapse navigation bar ---->
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
      <!--- Secondary Navigation Bar---->
                  <div class="secnav">
                    
                  </div>
                  <center>
                  <h3 style="color:#192a56";>Kindly Book Your Vehicle Here</h3>
                      <a href="vehicle-packages.php"> Before you book a vehicle view the available Packages Here </a> 
                  <h5 style="color:#192a56; text-decoration:underline;";> Personal Details </h5>
                  <div class="form">
                      <form action="" method="POST" enctype="multipart/form-data">
                          <label for="names">Full Names  </label><br>
                                <input type="text" name="names" placeholder="Enter Full Names..." required>
                                <br>
                                <label for="id_number">ID Number  </label><br>
                                <input type="number" name="id_number" placeholder="Enter ID Number..." required>
                                <br>
                                <label for="email"> Email </label><br>
                                <input type="email" name="email" placeholder="Enter Email..." >
                                <br>
                                <label for="phone">Phone Number  </label><br>
                                <input type="number" name="phone"  placeholder="Enter Phone Number..." required>
                                <br>
                                <label for="address">Address </label><br>
                                <input type="text" name="address" placeholder="Enter address ..." required>
                                <br>
                                <h5 style="color:#192a56; text-decoration:underline;";> Vehicle Details </h5>
                                      <select name="vehicle_category">
                                          <option value="7_seater">7 Seater (Ksh.200/Km) </option>
                                          <option value="14_seater">14 Seater (Ksh.400/Km) </option>
                                          <option value="33 seater">33 Seater (Ksh.1000/Km)</option> 
                                          <option value="65 seater">65 Seater (Ksh.2000/Km)</option> 
                                      </select>
                                    <br>
                                <label for="start_date">Expected Start Date </label><br>
                                <input type="date" name="start_date" placeholder="Enter Expected Start Date ..." required>
                                <br>
                                <label for="end_date">Expected End Date </label><br>
                                <input type="date" name="end_date" placeholder="Enter Expected End Date ..." required>
                                <br>
                                <label for="message">Additional Comment:</label> <br>
                                <textarea name="message" rows="5" cols="80"> </textarea>
                                <br>
                                <input type="submit" name="insert_btn" value="Book">
                                <input type="reset">
                      </form>
                  </center>
                  <?php
                  include 'config.php';
                  if(isset($_POST['insert_btn'])){
                      $names=$_POST['names'];
                      $id_number=$_POST['id_number'];
                      $email=$_POST['email'];
                      $phone=$_POST['phone'];
                      $address=$_POST['address'];
                      $vehicle_category=$_POST['vehicle_category'];
                      $start_date=$_POST['start_date'];
                      $end_date=$_POST['end_date'];
                      $message=$_POST['message'];
                      
                      $insert="INSERT INTO hirings (names, id_number, email, phone, address, vehicle_category, start_date, end_date, message)
                      VALUES('$names','$id_number', '$email', '$phone','$address', '$vehicle_category','$start_date', '$end_date', '$message')";
                      $insert_q=mysqli_query($con,$insert);
                            if($insert_q){
                                ?>
                                <script type="text/javascript">
                                    alert("Booking Placed Successfully");
                                </script>
                                <?php
                            } 
                            else {
                                ?>
                                <script type="text/javascript">
                                    alert("Sorry! Message Not Sent. Please Try Again!");
                                </script>
                                <?php
                            }
                        }
                  ?>
    </body>
    </html>

