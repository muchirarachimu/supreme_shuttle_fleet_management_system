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
        <title> Contacts Page </title>
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<style>


</style>
    </head>
    <body>
                <div class="header">
                    <a href="home_driver.php"><img src="/images/supremeshuttlelogo.png"></a>
                </div>
                      <div class="topnav" id="myTopnav">
                          <!--<a href="index.php"><img src="images/supremeshuttlelogo.png"></a>-->
                          <a href="home_customer.php"> HOME</a>
                          <a href="about_us.php">ABOUT US</a>
                          <a href="hire_vehicle.php"> HIRE VEHICLE</a>
                          <a href="contacts.php"> CONTACTS</a>
                          <a href="index.php">LOGOUT</a>
                          <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
                      </div>

                    <!---Java Script to collapse the navigation bar -->
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
                  <!---Secondary navigation Bar  -->
                  <div class="secnav">
                    <!--
                    <a href="#.php">xxx</a>
                    <a href="#.php">xxx </a>
                    <a href="#.php">xxx</a>-->
                  </div>
                    <!---Two Equa Columns-->
                <div class="rowequal">
                          <div class="columnequal" style="background-color:lightgrey;">
                          <!---<h4 style="color:blue; text-align:center;">At a Glance</h4> --->
                              <div class="contacts">
                                  <h4>Contacts </h4>
                                      <p> 0705608609 </p>
                                      <p> 0716719625 </p>
                                      <h4>Email </h4>
                                      <p> supremeshuttle@gmail.com </p>
                              </div>
                                <!--- GOOGLE MAP-->
                                <h4>Location </h4>
                                    </iframe>    
                                          <div class="map-responsive">
                                          <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3354.758443838002!2d37.15875766244634!3d-0.7207887111735202!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sMuranga%20supreme%20shuttle%20!5e0!3m2!1sen!2ske!4v1694361843098!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                                  </div>
                                <br><br>
                          </div>
                          <div class="columnequal" style="background-color:lightgrey;">
                                  <center>
                                   <h3 style="color:#192a56";>Send Message </h3>
                                  <div class="form">
                                        <form action="" method="POST" enctype="multipart/form-data">
                                                <label for="names">Full Names  </label><br>
                                                <input type="text" name="names" placeholder="Enter Full Names..." required>
                                                <br>
                                                <label for="id_number">ID Number  </label><br>
                                                <input type="text" name="id_number" placeholder="Enter ID Number..." required>
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
                                                <label for="message">Message:</label> <br>
                                                  <textarea name="message" rows="5" cols="80">
                                                    </textarea>
                                                    <br>
                                                <input type="submit" name="insert_btn" value="Send">
                                                <input type="reset">
                                        </form>
                                  </div>
                                  </center>
                                              <?php
                                              include 'config.php';

                                              if(isset($_POST['insert_btn'])){
                                                  $names=$_POST['names'];
                                                  $id_number=$_POST['id_number'];
                                                  $email=$_POST['email'];
                                                  $phone=$_POST['phone'];
                                                  $address=$_POST['address'];
                                                  $message=$_POST['message'];
                                                  
                                                $insert="INSERT INTO contact_us (names, id_number, email, phone, address, message)
                                                VALUES('$names', '$id_number', '$email', '$phone','$address','$message')";

                                                $insert_q=mysqli_query($con,$insert);
                                                      if($insert_q){
                                                          ?>
                                                              <script type="text/javascript">
                                                                  alert("Message Sent successfully");
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
                          </div>
                  </div>                                 
          </body>
    </html>

