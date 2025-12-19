<?php
	if(isset($_REQUEST['sucess']))
	{
		echo"<script> 
			alert('Your Password Change Success');
		
		</script>";
		
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Doctor Login</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-img3-body">

    <div class="container">

      <form class="login-form"  method="post" >  
		<input type="hidden"  name="ldtype" value='2'>    
        <div class="login-wrap">
            <p class="login-img">Doctor Login<i class="icon_lock_alt"></i></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" class="form-control" name="emailid" placeholder="Username" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <label class="checkbox">
                <input type="checkbox" name="rem" value="remember-me"> Remember me
                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label>
            <button class="btn btn-primary btn-lg btn-block" name="submit" type="submit">Login</button>
           <!-- <button class="btn btn-info btn-lg btn-block" type="submit">Signup</button> -->
        </div>
      </form>
    <div class="text-right">
            <div class="credits">
                
            </div>
        </div>
    </div>


  </body>
</html>

<?php 
session_start();
include "dbconfigure.php";
if(isset($_POST['submit']))
{
$emailid = $_POST['emailid'];
$password = $_POST['password'];


$query = "select count(*) from doctor_list where emailid='$emailid' and password='$password'";
$n = my_one($query);
if($n==1)
{
echo $_SESSION['semailid']=$emailid;
echo $_SESSION['spassword']=$password;


echo '<script>
window.location="index.php";
</script>';
}
else
{
echo '<script>alert("Invalid Login Credentials.")</script>';
}
}
?>
