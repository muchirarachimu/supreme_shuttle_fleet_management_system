<?php require_once "controllerUserData.php"; ?>
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
    <title>Code Verification Admin Page</title>
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
                <form action="reset-code.php" method="POST" autocomplete="off">
                    <h2 class="text-center">Code Verification</h2>
                    <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert alert-success text-center" style="padding: 0.4rem 0.4rem">
                            <?php echo $_SESSION['info']; ?>
                        </div>
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
                        <input class="form-control" type="number" name="otp" placeholder="Enter code" required> <br>
                        <input class="form-control button" type="submit" name="check-reset-otp" value="Submit">
                </form>
    </div>
    </center> 
</body>
</html>