
<?php
include 'config.php'; // Database connection
// session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"content="width=device-width, initial-scale=1.0">
        <title> About Us Page Customer </title>
        <!--- custom cs file link---->
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<style>
body { background-color:lightgrey;}
.headings { 
  text-align:center;
  color:#192a56; 
}
.paragraph { 
  text-align:center;
}
.paragraph li { 
  text-align:center;
  list-style-type: none;
}
</style>
    </head>
    <body>
    <div class="header">
    <a href="home_driver.php"><img src="/images/supremeshuttlelogo.png"></a>
    </div>
        <div class="topnav" id="myTopnav">
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
  <a href="#.php">xxx</a>
  -->
</div>
    
<h2 class= "headings">About Us</h2>

<!---TWO EQUAL COLUMNS SECOND-->
<div class="rowequal">
                  <!----FIRST PART OF COLUMN ROW HERE---->
                    <div class="columnequal" style="background-color:none;">
                        <div class = "about_us">
                              <p> Supreme Shuttle Company is a transport company based in Murang’a town Kenya that provides reliable, comfortable, and affordable public transport services to travelers across the country. Established in 2003, Supreme Shuttle Company has grown to become one of the most trusted and preferred public transport operators in the region, serving hundreds of customers every day.
                            At Supreme Shuttle Company, we believe that traveling should be a enjoyable experience and hassle-free. That is why we strive to provide our customers with high-quality services that meet their needs and exceed their expectations. Whether you are traveling for business, leisure, or any other purpose, you can count on hassle-free to get you to your destination safely and comfortably.
                            Thank you for choosing Supreme Shuttle Company for your travel needs. We look forward to serving you soon! </p>
                        </div>
                    </div>
                  <!----SECOND PART OF COLUMN ROW HERE---->
                    <div class="columnequal" style="background-color:none;">
                        <img src="images/chevy.jpeg" alt="Paris" style="width:50%;">
                    </div>
</div>
<!----END OF TWO EQUAL COLUMNS SECOND---->
<h2 class= "headings">Our Services</h2>
<div class="rows">
              <div class="columns">
                    <div class="contents">
                        <img src="images/public-t.jpg" alt="#" style="width:100%;border-radius: 0%;">
                        <a href="#"><h6>Public Service Transport</h6></a>
                    </div>
              </div>
              <div class="columns">
                    <div class="contents">
                          <img src="images/vehiclehire.png" alt="#" style="width:100%;border-radius: 0%;">
                          <a href="vehicle-packages.php"><h6>Vehicle Hire</h6></a>
                    </div>
              </div>
              <div class="columns">
                    <div class="contents">
                          <img src="images/delivery.jpg" alt="#" style="width:100%;border-radius: 0%;">
                          <a href="#.html"><h6>Parcel Delivery</h6></a>
                    </div>
              </div>
              <div class="columns">
                      <div class="contents">
                          <img src="images/driving-school.png" alt="#" style="width:100%;border-radius: 0%;">
                          <a href="#.html"><h6> Driving School</h6></a>
                      </div>
              </div>
</div>
<!---MISSION STATEMENT-->
<h2 class= "headings" >Our Mission Statement</h2>
<p class="paragraph"> To provide safe, reliable, and efficient transportation services <br>that connect people and goods, delivering them to their destinations <br>with a commitment to excellence, sustainability, and customer satisfaction. </p>

<!---VISION STATEMENT-->
<h2 class= "headings">Our Vision Statement</h2>
<p class="paragraph"> To be the premier and most trusted transportation company in Kenya, <br>setting the industry standard for excellence, sustainability, and innovation.</p>

<!--- CORE VALUES-->
<h2 class= "headings">Our Major Core Values</h2>
<div class="paragraph"> 
<p>
<li> Integrity </li>
<li> Customer-Centric </li>
<li> Innovation </li>
<li> Teamwork </li>
<li> Accountability </li>
<li> Respect </li>
<li> Safety </li>
<li> Quality </li>
</p>
</div>
<!---OUR DESTINATIONS-->
<h2 class= "headings">Our Destinations</h2>
<div class="rows">
              <div class="columns">
                    <div class="contents">
                        <img src="images/Nairobi-from-KICC.jpg" alt="#" style="width:100%;border-radius: 0%;">
                        <h6>Nairobi</h6>
                    </div>
              </div>
              <div class="columns">
                    <div class="contents">
                          <img src="images/Thika town.jpeg" alt="#" style="width:100%;border-radius: 0%;">
                          <h6>Thika</h6>
                    </div>
              </div>
              <div class="columns">
                    <div class="contents">
                          <img src="images/Muranga town.jpeg" alt="#" style="width:100%;border-radius: 0%;">
                          <h6>Murang'a</h6>
                    </div>
              </div>
              <div class="columns">
                      <div class="contents">
                          <img src="images/Sagana town.jpg" alt="#" style="width:100%;border-radius: 0%;">
                          <h6>Sagana</h6>
                      </div>
              </div>
              <div class="columns">
                    <div class="contents">
                        <img src="images/kerugoya town.jpg" alt="#" style="width:100%;border-radius: 0%;">
                        <h6>Kerugoya</h6>
                    </div>
              </div>
              <div class="columns">
                    <div class="contents">
                          <img src="images/Embu town.jpg" alt="#" style="width:100%;border-radius: 0%;">
                          <h6>Embu</h6>
                    </div>
              </div>
              <div class="columns">
                    <div class="contents">
                          <img src="images/Nyeri town.jpg" alt="#" style="width:100%;border-radius: 0%;">
                          <h6>Nyeri</h6>
                    </div>
              </div>
              <div class="columns">
                      <div class="contents">
                          <img src="images/naivasha town.jpg " alt="#" style="width:100%;border-radius: 0%;">
                          <h6>Naivasha</h6>
                      </div>
              </div>
</div>

<!---WHY CHOOSE US-->
<h2 class= "headings" style="color:#192a56; text-align:center;">Why Choose Us</h2>
<div class="responsive">
          <div class="gallery">
                  <img src="images/professionalism.jpeg" alt="#" width="60" height="40">
              <div class="desc">
                  <h4>Work Ethics</h4>
              </div>
          </div>
</div>
<div class="responsive">
          <div class="gallery">
                  <img src="images/professionalism.jpg" alt="#" width="60" height="40">
              <div class="desc">
                  <h4>Professionalism</h4>
              </div>
          </div>
</div>
<div class="responsive">
          <div class="gallery">
                  <img src="images/customer focus.png" alt="#" width="60" height="40">
              <div class="desc">
                  <h4>Customer Oriented</h4>
              </div>
          </div>
</div>
<div class="responsive">
          <div class="gallery">
                  <img src="images/money.jpeg" alt="#" width="60" height="40">
              <div class="desc">
                  <h4>Pocket Friendly</h4>
              </div>
          </div>
</div>

<!---CLEAR TWO COLUMNS TO  GO BACK TO THE NORMAL ONE COLUMN-->
<div class="clearfix"></div>

    </body>
    </html>

