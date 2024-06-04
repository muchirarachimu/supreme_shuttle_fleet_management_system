<?php require_once "controllerUserData.php"; ?>
<?php
if($_SESSION['info'] == false){
    header('Location: login-user.php');  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
<a href="#.php"><img src="/images/supremeshuttlelogo.png"></a>
<div class="btn_driver_accounts">
    </div>
</div>
<h1 style="text-align:center;color:blue;"> Supreme Shuttle Fleet Management System </h1>
    <div class="banner"> </div>
<center> 
        <div class="form">
            <?php 
            if(isset($_SESSION['info'])){
                ?>
                <div class="alert alert-success text-center">
                <?php echo $_SESSION['info']; ?>
                </div>
                <?php
            }
            ?>
                <form action="login-user.php" method="POST">
                        <input class="form-control button" type="submit" name="login-now" value="Login Now">
                </form>
            </div>
            </center>
</body>
</html>