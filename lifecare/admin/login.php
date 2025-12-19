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

    <title>Admin Login</title>

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

    
</head>

  <body class="login-img3-body">

    <div class="container">

      <form class="login-form" action="loginadmin.php" method="post" >  
		<input type="hidden"  name="ldtype" value='2'>    
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" class="form-control" name="email" placeholder="Username" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" name="pass" class="form-control" placeholder="Password">
            </div>
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <!-- <span class="pull-right"> <a href="#"> Forgot Password?</a></span> -->
            </label>
            <button class="btn btn-primary btn-lg btn-block" name="btn_login" type="submit">Login</button>
			<br>
           <center><a href="../index.php" class="text-center mt-2">Back To Home</a></center>
        </div>
      </form>
    <div class="text-right">
            <div class="credits">
              <!--   <a href="#">Designed And Developed </a> by <a href="#">LifeCare</a> -->
            </div>
        </div>
    </div>


  </body>
</html>
