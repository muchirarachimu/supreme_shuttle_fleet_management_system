<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $fetch_info['name'] ?> Welcome Page Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>
        body {
        background-color:lightgrey;
        
    }
    .btn_admin {
        background-color: #0984e3;
        border-radius: 5px;
        font-size: 25px;
        border: none;
    }
    .btn_admin a{
       
        font-size: 25px;
        text-decoration: none;
        color: white;
        padding: 5px;
    }
    .btn_driver_accounts{
margin-right: 5px;

    }

    .btn_driver_accounts button{
border-radius: 5px;
background-color: red;

    }
    .btn_driver_accounts a{
margin-right: 5px;
text-decoration: none;
color: white;



    }
    </style>
</head>
<body>
 
<div class="header">
<a href="#.php"><img src="/images/supremeshuttlelogo.png"></a>
<div class="btn_driver_accounts">
<!--<button style="float:right; padding: 5px;"> <a href="driver_accounts_registration.php">Create driver Accounts</a> </button>--> 
    </div>
</div>
    <h1 style="text-align:center;color:#192a56;"> Supreme Shuttle Fleet Management System </h1>
    <div class="banner"> </div>
    <br><br>
    <!--<button type="button" class="btn btn-light"><a href="logout-user.php">Logout</a></button>
    </nav> -->
    <center>  
    <h2>Welcome <span>Admin &nbsp<?php echo $fetch_info['name'] ?></h2> 
    <!--<a href="view_driver.php" class="btn_proceed">Click here to Proceed</a>-->
    <button class="btn_admin"> <a href="dashboard_admin.php">Click here to Proceed</a> </button> 
    </center>
</body>
</html>