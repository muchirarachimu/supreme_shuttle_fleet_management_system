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
    <title>Create New Password Admin</title>
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
                <form action="new-password.php" method="POST" autocomplete="off">
                    <h2 class="text-center">New Password</h2>
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
                        <input type="password" name="password" placeholder="Create new password" required> <br> <br>
                        <input type="password" name="cpassword" placeholder="Confirm your password" required><br>
                        <input type="submit" name="change-password" value="Change">
                </form>
    </div>
    </center>
</body>
</html>