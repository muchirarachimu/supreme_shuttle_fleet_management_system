<?php require_once "controllerDriverData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password Driver Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
<a href="#.php"><img src="/images/supremeshuttlelogo.png"></a>
</div>

<h1 style="text-align:center;color:#192a56;"> Supreme Shuttle Fleet Management System </h1>
    <div class="banner"> </div>
    
    <center> 
        <div class="form">
                <form action="forgot-password-driver.php" method="POST" autocomplete="">
                    <h2 class="text-center">Forgot Password</h2>
                    <p class="text-center">Enter your email address</p>
                    <?php
                        if(count($errors) > 0){
                            ?>
                            <div class="alert alert-danger text-center">
                                <?php 
                                    foreach($errors as $error){
                                        echo $error;
                                    }
                                ?>
                            </div>
                            <?php
                        }
                    ?>
                        <input class="form-control" type="email" name="email" placeholder="Enter email address" required value="<?php echo $email ?>">
                        <input class="form-control button" type="submit" name="check-email" value="Continue">
                </form>
        </div>
        </center>
</body>
</html>