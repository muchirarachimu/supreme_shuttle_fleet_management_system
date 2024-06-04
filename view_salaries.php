<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Salaries Page</title>
    <!--- Link to bootstrap online stylesheet ---->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!--- Link to external CSS stylesheet ---->
    <link rel="stylesheet" href="/style.css">
          <SCRIPT type="text/javascript">
                window.history.forward();
                function noBack() { window.history.forward(); }
          </SCRIPT>
  </head>
        <body>
              <!--Company Logo-->
              <div class="header">
                    <a href="#.php"><img src="/images/supremeshuttlelogo.png"></a>
              </div>
              <!--Navigation Bar-->
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
                      <!--Java Script to Collapse Navigation Bar-->
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
                   <!--Secondary Navigation Bar-->
              <div class="secnav">
                      <a href="#.html">Driver Salaries</a>
                      <a href="#.php"> </a>
                      <a href="#.php"></a>
                      <a href="#.php"></a>
                      <a href="#.php"> </a>
              </div>
                    <?php
                        include 'config.php'; // connect to database
                        //SQL Query to select all data from a table called salary
                        $select="SELECT*FROM salary";
                        $select_q=mysqli_query($con,$select);
                        $data=mysqli_num_rows($select_q);
                    ?>
              <!--Table to display data fetched from the database ---->
              <div class="table">
                    <h2>View Driver Salaries</h2>
                    <p><a href="insert_salaries.php">Insert Salary </a></p> 
                    <table>
                        <tr>
                            <th> Date</th>
                            <th>Driver Names</th>
                            <th> ID Number</th>
                            <th>Account Number</th>
                            <th>Basic Pay</th>
                            <th>Special Allowance</th>
                            <th>Bonus</th>
                            <th>Gross Salary</th>
                            <th>Advance</th>
                            <th>NSSF</th>
                            <th>NHIF</th>
                            <th>Tax</th>
                            <th>Deductions</th>
                            <th>Net Pay</th>
                            <th colspan="2">Actions</th>
                        </tr> 
                            <?php
                                if($data){
                                    while ($row=mysqli_fetch_array($select_q)){
                            ?>
                        <tr>
                            <td><?php echo $row['date'] ?></td>
                            <td><?php echo $row['driver_names'] ?></td>
                            <td><?php echo $row['id_number'] ?></td>
                            <td><?php echo $row['account_number'] ?></td>
                            <td><?php echo $row['basic_pay'] ?></td>
                            <td><?php echo $row['special_allowance'] ?></td>
                            <td><?php echo $row['bonus'] ?></td>
                            <td style= "font-weight:bold; color:green;"><?php echo $row['gross_salary'] ?></td>
                            <td><?php echo $row['advance'] ?></td>
                            <td><?php echo $row['NSSF'] ?></td>
                            <td><?php echo $row['NHIF'] ?></td>
                            <td><?php echo $row['tax'] ?></td>
                            <td style= "font-weight:bold; color:red;"><?php echo $row['deductions'] ?></td>
                            <td style= "font-weight:bold; color:blue;"><?php echo $row['net_pay'] ?></td>
                            <td><a href="edit_salaries.php?id=<?php echo $row['id'] ?> " style="background-color: #0984e3;color: white; padding: 5px 15px; text-align: center; text-decoration: none; border-radius: 5px;"; >Edit</td>
                            <td><a onclick="return confirm('Are you sure you want to delete?')" href="delete_salaries.php?id=<?php echo $row['id'] ?>" style="background-color: crimson;color: white; padding: 5px 15px; text-align: center; text-decoration: none; border-radius: 5px;"; >Delete</td>
                        </tr>
                            <?php
                                  }
                                  }
                                  else
                                  {
                                      ?>
                                        <!--Java Script to alert user ---->
                                        <script type="text/javascript">
                                            alert("No record found!!!");
                                        </script>
                                        <?php
                                  }
                              ?>
                            <?php
                            ?>
                    </table>
                </div>
        </body>
</html>
