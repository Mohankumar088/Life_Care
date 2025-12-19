	<?php 
session_start();
include "dbconfigure.php";
if(verifyuser())
{
$emailid = $_SESSION['semailid'];
$query = "select * from doctor_list where emailid='$emailid'";
$rs = my_select($query);
if($row = mysqli_fetch_array($rs))
{
$doctorname = $row[1];
$image = $row[2];
$speciality = $row[3];
$fees = $row[4];
$address = $row[5];
$description = $row[6];
$contact = $row[8];

}
}
else
{
header("location:login.php");
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

    <title>Doctor :: Password Change</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
       <!--header Start-->
      <?php require('./comnpages/header.php'); ?>
	  <!--header end-->

      <!--sidebar start-->
	   <?php require('./comnpages/side.php'); ?>
      <!--sidebar end-->

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa fa-bars"></i> Change Password</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="fa fa-bars"></i>Change Password</li>
						
					</ol>
				</div>
			</div>
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                        <!-- 
						 <header class="panel-heading">
                              Advanced Table
                          </header>
						  -->
						  
						  <div class="col-md-12 portlets">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="pull-left">Change Password</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                  <div class="padd">
                    
                      <div class="form quick-post">
                                      <!-- Edit profile form (not working)-->
                                      <form class="form-horizontal" action="" method="post">
                                          <!-- Title -->
                                          <div class="form-group">
                                            <label class="control-label col-lg-2" for="title">Old Password</label>
                                            <div class="col-lg-10"> 
                                              <input type="password" class="form-control" name="oldpassword" id="title">
                                            </div>
                                          </div>      
											<!-- Tags -->
                                          <div class="form-group">
                                            <label class="control-label col-lg-2" for="tags">New Password</label>
                                            <div class="col-lg-10">
                                              <input type="password" class="form-control" name="newpassword" id="tags">
                                            </div>
                                          </div>                      
                                                        
                                          <div class="form-group">
                                            <label class="control-label col-lg-2" for="tags">Confirm Password</label>
                                            <div class="col-lg-10">
                                              <input type="password" class="form-control" name="cpassword" id="tags">
                                            </div>
                                          </div>                      
                                                        
                                          
                                          
                                          <!-- Buttons -->
                                          <div class="form-group">
                                             <!-- Buttons -->
											 <div class="col-lg-offset-2 col-lg-9">
												<button type="submit" name="submit" class="btn btn-success">Change Password</button>			
												<button type="reset" class="btn btn-default">Reset</button>
											 </div>
                                          </div>
                                      </form>
                                    </div>
                  

                  </div>
                  <div class="widget-foot">
                    <!-- Footer goes here -->
                  </div>
                </div>
              </div>
              
            </div>
                  
						</section>
                   </div>
              </div>
              
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
      <!-----Credit Start ------>
		  <?php include("./comnpages/credit.php");?>
          <!-----Credit End ------>
  </section>
  <!-- container section end -->
    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script><!--custome script for all page-->
    <script src="js/scripts.js"></script>


  </body>
</html>


<?php 
if(isset($_POST['submit']))
{
$oldpassword = $_POST['oldpassword'];
$newpassword = $_POST['newpassword'];
$cpassword = $_POST['cpassword'];

if($newpassword==$cpassword)
{

$query = "update doctor_list set password='$newpassword' where emailid='$emailid' and password='$oldpassword'";
$n = my_iud($query);
if($n ==1)
{
echo '<script>alert("Password Updated Successfully");
window.location = "login.php";
</script>';
}
else
{
echo '<script>alert("Something went wrong,Try Again!")</script>';
}	

}
else
{
echo '<script>alert("Password and Confirm Password Not Match");
</script>';
}


}
?>
