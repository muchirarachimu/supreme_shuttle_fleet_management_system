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
                  <title> Vehicle Packages Page</title>
                  <!--- Link to CSS stylesheet ---->
                  <link rel="stylesheet" href="style.css">
                  <!--- Link to bootstrap online stylesheet ---->
                  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
                        <style>
                            body { background-color:lightgrey;}
                            .table img{
                                width:50%;
                                height:auto;
                                align-items: center;
                            }
                            .table td, tr{
                                border: solid #192a56 1px;
                                padding: 5px;
                            }
                         </style>

                          <SCRIPT type="text/javascript">
                            window.history.forward();
                            function noBack() { window.history.forward(); }
                          </SCRIPT>
              </head>
          <body>
              <div class="header">
                  <a href="home_driver.php"><img src="/images/supremeshuttlelogo.png"></a>
              </div>
              <div class="topnav" id="myTopnav">
                    <a href="home_customer.php"> HOME</a>
                    <a href="about_us.php">ABOUT US</a>
                    <a href="book_vehicle.php"> BOOK VEHICLE</a>
                    <a href="contacts.php"> CONTACTS</a>
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
                <!--<a href="index.php"><img src="images/supremeshuttlelogo.png"></a>
                <a href="#.php">xxx</a>
                <a href="#.php">xxx </a>
                <a href="#.php">xxx</a>-->
              </div>
              <center>
                  <!---Table to display vehicle packages ---->
                  <div class="table">
                      <h2>Vehicle Packages</h2>
                      <table>
                            <tr>
                                <th>Vehicle Category</th>
                                <th>Image</th>
                                <th>Cost</th>
                            </tr> 
                            <tr>
                                <td>7 seater </td> 
                                <td><img src = "images/7_seater.jpg" class="center"></td>
                                <td>200/= per Kilometer</td>
                            </tr>
                            <tr>
                                <td><a href="hire_vehicle.php">Book this Vehicle</a></td>
                            </tr>
                            <tr>
                                <td>14 seater </td>
                                <td><img src = "images/14_seater.png" class="center"></td>
                                <td>400/= per Kilometer</td>
                            </tr>
                            <tr>
                                <td><a href="hire_vehicle.php">Book this Vehicle</a></td>
                            </tr>
                            <tr>
                                <td>33 seater </td>
                                <td><img src = "images/busavatar.png" class="center"></td>
                                <td>1000/= per Kilometer</td>
                            </tr>
                            <tr>
                                <td><a href="hire_vehicle.php">Book this Vehicle</a></td>
                            </tr>
                            <tr>
                                <td>65 seater </td>
                                <td><img src = "images/65-seater.png" class="center"></td>
                                <td>2000/= per Kilometer</td>
                            </tr>
                            <tr>
                                <td><a href="hire_vehicle.php">Book this Vehicle</a></td>
                            </tr>
                        </table>
                  </div>
              </center>  
        </body>
    </html>

