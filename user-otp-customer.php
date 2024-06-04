<?php require_once "controllerCustomerData.php"; ?>
<?php 
$email = $_SESSION['email'];
if($email == false){
  header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Code Verification Customer Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<div class="header">
<a href="#.php"><img src="/images/supremeshuttlelogo.png"></a>
</div>

    <h1 style="text-align:center; color: #192a56;"> Supreme Shuttle Fleet Management System </h1>
    <div class="banner"> </div>
    <br><br>

    <center> 
    <div class="form">
                <form action="user-otp-customer.php" method="POST" autocomplete="off">
                    <h2>Code Verification</h2>

                    <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <?php echo $_SESSION['info']; ?>
                        
                        <?php
                    }
                    ?>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                        <input type="number" name="otp" placeholder="Enter verification code" required>
                    
                        <input type="submit" name="check" value="Submit">
                  
                </form>
            </div>
            </center>
    
</body>
</html>