<!DOCTYPE html>

<html class="no-js">


<head>
	<title>Doctor SignUp</title>
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
							<h2 class="small">Doctor SignUp</h2>
						</div>
					</div>
					<ol class="breadcrumb bottom_breadcrumbs">
						<li> <a href="./">
						Home
						</a> </li>						 
						<li class="active">Doctor SignUp</li>
					</ol>
				</div>
			</section>
			 
			 
			<section class="ls columns_padding_25 section_padding_top_100 section_padding_bottom_100">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h3 class="module-header">Registration </h3>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8 to_animate" data-animation="scaleAppear">
							<form method="post" enctype="multipart/form-data">
								<div class="row">
									<div class="col-sm-12">
										<div   class="inpbox" > 
											
											&nbsp <i class="fa fa-user highlight2"></i> 
									      <input type="text" style="border:none"  size="30"	 name="name" placeholder="Full Name">											
									    </div>
									</div>
									<div class="col-sm-6">
										<div  class="inpbox" > 
										
											&nbsp <i class="fas fa-image highlight2" aria-hidden="true"></i>
											<input type="file" style="border:none;"    name="image" placeholder="Upload PIC">											
									    </div>
									</div>
									<div class="col-sm-6">
										<div    class="inpbox"  >
											<!--<label for="email">Email address<span class="required">*</span></label>--> 
											&nbsp <i class="fa fa-envelope highlight2" aria-hidden="true"></i> 
											<input type="email" style="border:none;"  name="emailid" placeholder="Email Address">											
									    </div>
									</div>
									<div class="col-sm-6">
										<div    class="inpbox"  >
											<!--<label for="subject">Subject<span class="required">*</span></label>-->
											&nbsp <i class="fa fa-phone highlight2" aria-hidden="true"></i> 
											<input type="text" size="30" style="border:none;" name="contact" placeholder="Contact Number">											
										</div>
									</div>
                                    <div class="col-sm-6">
										<div    class="inpbox"  >
											
											&nbsp <i class="fas fa-key highlight2" aria-hidden="true"></i> 
										<input type="password" size="30" style="border:none;" name="password" placeholder="Password">											
										</div>
									</div> 
									
									
									<div class="col-sm-6">
										<div    class="inpbox"  >
											
											&nbsp <i class="fas fa-user-tag highlight2" aria-hidden="true"></i> 
											<input type="text" size="30" style="border:none;" name="specialization" placeholder="Specialization">											
										</div>
									</div> 
									
									<div class="col-sm-6">
										<div    class="inpbox"  >
											
											&nbsp <i class="fas fa-comments-dollar highlight2" aria-hidden="true"></i> 
											<input type="text" size="30" style="border:none;" name="fees" placeholder="Fees">											
										</div>
									</div> 
									

	<div class="col-sm-12">
										 
	<div class="form-group bottommargin_0 inpbox"   > 
											
	<textarea  rows="3" cols="45" style="width:100%; background:url(images.png)no-repeat;border:none;" name="address"  placeholder="Address"></textarea> 
	</div>
	</div>								
									
									

									<div class="col-sm-12">
										 
											<div class="form-group bottommargin_0 inpbox"   > 
											
												<textarea  rows="2" cols="45" style="width:100%;background:url(images.png)no-repeat;border:none;" name="description"  placeholder="Description"></textarea> 
											</div>
									</div>
								 
									<div class="col-sm-12 bottommargin_0 ">
										<div >
											
											
											<button type="submit" id="contact_form_submit" name="submit" class="theme_button color2 wide_button margin_0">Submit</button> </div>
										</div>
									</div>
							</form>
						</div>
						<div class="col-md-4 to_animate" data-animation="scaleAppear">
							<ul class="list1 no-bullets no-top-border no-bottom-border">
								<li>
									<div class="media">
										<div class="media-left"> <i class="rt-icon2-shop highlight2 fontsize_18"></i> </div>
										<div class="media-body">
											<h5 class="media-heading grey">Postal Address:</h5> CIT Phase2 Bengaluru </div>
									</div>
								</li>
								<li>
									<div class="media">
										<div class="media-left"> <i class="rt-icon2-phone5 highlight2 fontsize_18"></i> </div>
										<div class="media-body">
											<h5 class="media-heading grey">Phone:</h5> (+91)6360668622 </div>
									</div>
								</li>
								<li>
									<div class="media">
										<div class="media-left"> <i class="rt-icon2-phone5 highlight2 fontsize_18"></i> </div>
										<div class="media-body">
											<h5 class="media-heading grey">Contact:</h5> (+91)6360668622</div>
									</div>
								</li>
								<li>
									<div class="media">
										<div class="media-left"> <i class="rt-icon2-mail highlight2 fontsize_18"></i> </div>
										<div class="media-body greylinks">
											<h5 class="media-heading grey">Email:</h5> <a href="mailto:your@mail.com">pharmacom@example.com</a> </div>
									</div>
								</li>
							</ul>
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
	
</body>

</html>


<?php 
include "dbconfigure.php";
if(isset($_POST['submit']))
{
$name = $_POST['name'];

$emailid = $_POST['emailid'];
$contact = $_POST['contact'];
$password = $_POST['password'];
$specialization = $_POST['specialization'];
$fees = $_POST['fees'];
$address = $_POST['address'];
$description = $_POST['description'];


move_uploaded_file($_FILES['image']['tmp_name'],"images/Doctors/".$_FILES['image']['name']);

$image = "images/Doctors/".$_FILES['image']['name'];


$query = "insert into doctor_list(name,image,speciality,fees,description,emailid,contact,password,address) values('$name','$image','$specialization','$fees','$description','$emailid','$contact','$password','$address')";
$n = my_iud($query);
if($n==1)
{
echo '<script>alert("Signup Successful");
window.location="doctor/doctorlogin.php";
</script>';
}
else
{
echo '<script>alert("Something went wrong,Try Again...")</script>';
}
}
?>
