<?php 
ob_start();
?>
<!DOCTYPE html>

<html class="no-js">


<head>
	<title>Patient Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<!-- <?php



	?> -->
     
     

	
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/main.css" class="color-switcher-link">
	<link rel="stylesheet" href="css/shop.css">
	<link rel="stylesheet" type="text/css" href="./css/inbox.css">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>

	<style>
		
		.inpbox{
			 
			border:1px solid #ddd;

		}
	</style>
	
</head>

<body>
	
	<div class="preloader">
		<div class="preloader_image"></div>
	</div>
	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal"> 
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">
			<i class="rt-icon2-cross2"></i>
		</span>
	</button>
		<div class="widget widget_search">
			<form method="get" class="searchform search-form form-inline" action="./">
				<div class="form-group bottommargin_0"> <input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input"> </div> <button type="submit" class="theme_button">Search</button> </form>
		</div>
	</div>
	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls with_padding">
			
		</div>
	</div>
	
	<div id="canvas">
		<div id="box_wrapper">
			
			<!-- Header Start -->
			<?php include('./comnpages/header.php'); ?>
			<!--Header End -->
			
			
			<section class="page_breadcrumbs ls ms section_padding_25 bg_image">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2 class="small">Patient Login</h2>
						</div>
					</div>
					<ol class="breadcrumb bottom_breadcrumbs">
						<li> <a href="./">
						Home
						</a> </li>						 
						<li class="active">Patient Login</li>
					</ol>
				</div>
			</section>
			 
			 
			<section class="ls columns_padding_25 section_padding_top_100 section_padding_bottom_100">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h3 class="module-header">Login</h3>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8 to_animate" data-animation="scaleAppear">
							<form method="post" enctype="multipart/form-data">
								<div class="row">
									
									
									<div class="col-sm-12">
										<div    class="inpbox"  >
											<!--<label for="email">Email address<span class="required">*</span></label>--> 
											&nbsp <i class="fa fa-envelope highlight2" aria-hidden="true"></i> 
											<input type="email" style="border:none;"  name="emailid" placeholder="Email Address">											
									    </div>
									</div>
									
									
                                    <div class="col-sm-12">
										<div    class="inpbox"  >
											
											&nbsp <i class="fas fa-key highlight2" aria-hidden="true"></i> 
										<input type="password" size="30" style="border:none;" name="password" placeholder="Password">											
										</div>
									</div> 
									
									
									 
									
									
									

									
									
									

									
								 
									<div class="col-sm-6 bottommargin_0 ">
										<div >
											
											
											<button type="submit" id="contact_form_submit" name="submit" class="theme_button color2 wide_button margin_0">Login</button> </div>
										</div>
										
										
					<div class="col-sm-6 bottommargin_0 ">
										<div >
											
											
											<a href= "patientsignup.php" id="contact_form_submit"  class="theme_button color2 wide_button margin_0">SignUp</a> </div>
										</div>					
										
										
										
									</div>
							</form>
						</div>
						<div class="col-md-4 to_animate" data-animation="scaleAppear">
							<img src="images/patientlogin.jpg" style = "height : 300px">
						</div>
					</div>
				</div>
			</section>
			
			<!-- Start Footer -->
			<?php include('./comnpages/footer.php'); ?>			
			<!-- End Footer -->
			
			</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->
	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
	<!-- Google Map Script -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTwYSMRGuTsmfl2z_zZDStYqMlKtrybxo"></script>
</body>

</html>


<?php 
session_start();
include "dbconfigure.php";
if(isset($_POST['submit']))
{
$emailid = $_POST['emailid'];
$password = $_POST['password'];


$query = "select count(*) from patient where emailid='$emailid' and password='$password'";
$n = my_one($query);
if($n==1)
{
echo $_SESSION['semailid']=$emailid;
echo $_SESSION['spassword']=$password;

if(isset($_GET['id']))
{
/*echo '<script>
window.location="patient/patienthome.php";
</script>';*/
header("location:patient/bookappointment.php?id=".$_GET['id']);
}
else
{
header("location:patient/patienthome.php");
}
}
else
{
echo '<script>alert("Invalid Login Credentials.")</script>';
}
}
?>