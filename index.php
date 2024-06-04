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
        <title> Home Page </title>
        <!--- custom cs file link---->
        <link rel="stylesheet" href="style.css">
        <style>
        body { background-color:lightgrey; }
        </style>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <SCRIPT type="text/javascript">
   window.history.forward();
   function noBack() { window.history.forward(); }
</SCRIPT> 
    </head>
    <body onload="noBack();" 
   onpageshow="if (event.persisted) noBack();" onunload="">    <div class="header">
    <a href="#.php"><img src="/images/supremeshuttlelogo.png"></a>

    </div>
        <div class="topnav" id="myTopnav">
        <a href="login-user.php" style="color:white;font-size: 15px; text-decoration:none; width:10%; border-radius:5px;height:35px;" > Admin Login</a>
        <a href="landing_page_portals.php" style="color:white;font-size: 15px; text-decoration:none; width:10%; border-radius:5px;height:35px; float:right;" > Portals</a> 
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
  <!--<a href="#.php" style="float:right; background-color:green; width:7%; border-radius:5px;margin-right: 20px;">LOGIN</a>-->
</div>
<h1 style="text-align:center;color:#192a56;"> Supreme Shuttle Fleet Management System </h1>
 <!---slideshow-->

<div class="slider">
      <div class="slide active">
        <img src="images/bus2.jpg" alt="">
        <div class="info">
            <h2> Our Vision </h2>
          <p> To be the leading provider of safe, reliable and affordable transport solutions in Kenya.
           </p>
        
        </div>
      </div>
      <div class="slide">
     <!-- <img src="images/networking.jpg" alt="#" style="width:100%"> -->
        <img src="images/workers2.jpg" alt="">
        <div class="info">
    <h2>Our Mission</h2>
    <p> To provide convenient, efficient and comfortable travel experiences for our customers while maintaining the highest levels of safety and reliability.</p>
        </div>
      </div>
      <div class="slide">
        <img src="images/bannerimage3.jpg" alt="">
        <div class="info">
          <h2>Core Values</h2>
          <p>Integrity, Customer-Centric, Innovation, Teamwork, Accountability, Respect, Safety, and Quality  </p>
        </div>
      </div>
      <div class="slide">
        <img src="images/road4.jpg" alt="">
        <div class="info">
            <h2>Our Destinations</h2>
      <p> Nairobi, Thika, Murang'a, Sagana, Kerugoya, Embu, Nyeri, and Naivasha</p>
        </div>
      </div>
      
      <div class="navigation">
        <i class="fas fa-chevron-left prev-btn"></i>
        <i class="fas fa-chevron-right next-btn"></i>
      </div>
    </div>

    <script type="text/javascript">
        const slider = document.querySelector(".slider");
        const nextBtn = document.querySelector(".next-btn");
        const prevBtn = document.querySelector(".prev-btn");
        const slides = document.querySelectorAll(".slide");
        const slideIcons = document.querySelectorAll(".slide-icon");
        const numberOfSlides = slides.length;
        var slideNumber = 0;
    
        //image slider next button
        nextBtn.addEventListener("click", () => {
          slides.forEach((slide) => {
            slide.classList.remove("active");
          });
          slideIcons.forEach((slideIcon) => {
            slideIcon.classList.remove("active");
          });
    
          slideNumber++;
    
          if(slideNumber > (numberOfSlides - 1)){
            slideNumber = 0;
          }
    
          slides[slideNumber].classList.add("active");
          slideIcons[slideNumber].classList.add("active");
        });
    
        //image slider previous button
        prevBtn.addEventListener("click", () => {
          slides.forEach((slide) => {
            slide.classList.remove("active");
          });
          slideIcons.forEach((slideIcon) => {
            slideIcon.classList.remove("active");
          });
    
          slideNumber--;
    
          if(slideNumber < 0){
            slideNumber = numberOfSlides - 1;
          }
    
          slides[slideNumber].classList.add("active");
          slideIcons[slideNumber].classList.add("active");
        });
    
        //image slider autoplay
        var playSlider;
    
        var repeater = () => {
          playSlider = setInterval(function(){
            slides.forEach((slide) => {
              slide.classList.remove("active");
            });
            slideIcons.forEach((slideIcon) => {
              slideIcon.classList.remove("active");
            });
    
            slideNumber++;
    
            if(slideNumber > (numberOfSlides - 1)){
              slideNumber = 0;
            }
    
            slides[slideNumber].classList.add("active");
            slideIcons[slideNumber].classList.add("active");
          }, 4000);
        }
        repeater();
    
        //stop the image slider autoplay on mouseover
        slider.addEventListener("mouseover", () => {
          clearInterval(playSlider);
        });
    
        //start the image slider autoplay again on mouseout
        slider.addEventListener("mouseout", () => {
          repeater();
        });
        </script>

    </body>
    </html>

