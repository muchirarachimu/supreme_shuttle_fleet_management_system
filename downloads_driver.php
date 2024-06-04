<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Driver Downloads Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <link rel="stylesheet" href="/style.css">
  <script>
    if(window.history.replaceState){
      window.history.replaceState(null,null,window.location.href);
    }
    </script>

<style> 
body {
background-image: url();
background-repeat: no-repeat;
}
</style>

</head>
<body>
<div class="header">
    <a href="home_driver.php"><img src="/images/supremeshuttlelogo.png"></a>
    </div>
        <div class="topnav" id="myTopnav">
    <!--<a href="index.php"><img src="images/supremeshuttlelogo.png"></a>-->
    <a href="home_driver.php"> HOME</a>
     <a href="appraisal_report.php">APPRAISAL REPORT</a>
      <a href="downloads_driver.php"> DOWNLOADS</a>
      <a href="notices.php"> NOTICES</a>
      <a href="send_message_driver.php"> SEND MESSAGE</a>
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
  <a href="#.php"></a>
  <a href="#.php"> </a>
  <a href="#.php"></a>
</div>
   
        <center>
  <br>
   <h3 style="color:#192a56; text-align:center; margin-top: 0px;"> Downloads</h3>
   

    <div class="table">
<table>
<thead>
    <th>ID</th>
    <th>Filename</th>
   <!-- <th>size</th> -->
    <!-- <th>Downloads</th> -->
    <th>Action</th>
</thead>
<tbody>
  <?php foreach ($files as $file): ?>
    <tr>
      <td><?php echo $file['id']; ?></td>
      <td><?php echo $file['name']; ?></td>
     <!-- <td><?php //echo floor($file['size'] / 1000) . ' KB'; ?></td>-->
      <!--<td><?php //echo $file['downloads']; ?></td>-->
      <td><a href="downloads_driver.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
    </tr>
  <?php endforeach;?>

</tbody>
</table>
</div>
</center>

</body>
</html>