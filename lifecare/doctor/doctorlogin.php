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
 <style type="text/css">
 	.login-img3-body {
    background: url('./img/dbg.jpg') no-repeat center center fixed;
}
 </style>
</head>

  <body class="login-img3-body">

    <div class="container">

      <form class="login-form" method="post" >  
		<input type="hidden"  name="ldtype" value='2'>    
        <div class="login-wrap">
            <p class="login-img">Doctor Login<br><i class="icon_lock_alt"></i></p>
            <div class="input-group">
              <span class="input-group-addon"> <i class="icon_profile"></i></span>
              <input type="text" class="form-control" name="emailid" placeholder="Email ID" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <label class="checkbox">
                <input type="checkbox" name="rem" value="remember-me"> Remember me
                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label>
            <button class="btn btn-primary btn-lg btn-block" name="login" type="submit"><b>Login</b></button>
          <a href="../doctorsignup.php" style = "color : white" class="btn btn-warning btn-lg btn-block"><b>Signup</b></a> 
		  <center><a href="../index.php"><b>Back To Home</b></a> </center>
        </div>
      </form>
     
    </div>


  </body>
</html>

<?php 
session_start();
include "dbconfigure.php";
if(isset($_POST['login']))
{
$emailid = $_POST['emailid'];
$password = $_POST['password'];
if(isset($_POST['rem']))
{
$remember = "yes";
}
else
{
$remember = "no";
}

$query = "select count(*) from doctor_list where emailid='$emailid' and password='$password'";
$n = my_one($query);
if($n==1)
{
$_SESSION['semailid']=$emailid;
$_SESSION['spassword']=$password;

if($remember=="yes")
{
setcookie('cemailid',$emailid,time()+60*60*24*7);
setcookie('cpassword',$password,time()+60*60*24*7);
}
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
