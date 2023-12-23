

<?php
session_start();
include("db_connection.php");

?>
<!doctype html>
<html lang="en" dir="ltr">

<!-- soccer/project/login.html  07 Jan 2020 03:42:43 GMT -->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="icon" href="favicon.ico" type="image/x-icon"/>

<title> Login Form</title>

<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css" />

<!-- Core css -->
<link rel="stylesheet" href="assets/css/main.css"/>
<link rel="stylesheet" href="assets/css/theme1.css"/>

</head>
<body class="font-montserrat">

<div class="auth">
    <div class="auth_left">
        <div class="card">
            <div class="text-center mb-2">
                <a class="header-brand" href="index-2.html"></a>
            </div>
            <div class="card-body">
                <div class="card-title">Login to your account</div>
                <form action="" method="post">
                <div class="form-group">
                   <label for="" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>

                <div class="alert alert-success" id="error" style="display:none">
                Invalid Username or Password
                </div>

               
               
                
                <div class="form-footer">
                    <input type="submit" value="Login" name="submit1" class="form-control btn btn-primary" >
                </div>
                </form>
            </div>
            
        </div>        
    </div>
    
</div>

<script src="assets/bundles/lib.vendor.bundle.js"></script>
<script src="assets/js/core.js"></script>
</body>

<!-- soccer/project/login.html  07 Jan 2020 03:42:43 GMT -->
</html>

<?php
if(isset($_POST['submit1'])){
    $count=0;
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $res=mysqli_query($conn,"select * from user where email='$email' && password='$password' && role='User' ");
    $count=mysqli_num_rows($res);
    if($count>0){
        $_SESSION['User']=$email;
        ?>
        <script>
        window.location="dashboard.php";
        </script>
        <?php
    }else{
        ?>
        <script>
            document.getElementById("error").style.display="block";
        </script>
        <?php
    }
}



?>