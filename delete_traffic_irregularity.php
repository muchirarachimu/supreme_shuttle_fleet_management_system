<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Discplinary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">

  </head>
    <body>
        <?php
        include 'config.php';
        $id=$_GET['id'];
        $delete="DELETE FROM traffic_irregularity WHERE id='$id'";
        $delete_q=mysqli_query($con,$delete);
        header('location:view_traffic_irregularity.php');        
        ?>    
    </body>
</html>
