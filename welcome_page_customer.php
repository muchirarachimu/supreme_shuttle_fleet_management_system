<?php require_once "controllerCustomerData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM  customertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code-customer.php');
            }
        }else{
            header('Location: user-otp-customer.php');
        }
    }
}else{
    header('Location: login-user-customer.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $fetch_info['name'] ?>Welcome Page Customer</title>
    <!--- LinkS to bootstrap online stylesheet ---->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!--- Link to external CSS stylesheet ---->
    <link rel="stylesheet" href="style2.css">

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
    <h2>Welcome <span>Customer &nbsp<?php echo $fetch_info['name'] ?></h2>
    <p style="color: blue;"> As Our Customer We Value You</p> 
    <p style="color: blue;">Thank You for Checking In !</p> 

    <!--<a href="view_driver.php" class="btn_proceed">Click here to Proceed</a>-->
<button class="btn_admin"> <a href="home_customer.php">Click here to Proceed</a> </button> 

    </center>
</body>
</html>