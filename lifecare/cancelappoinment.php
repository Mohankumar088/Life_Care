
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<title>Cancel Appoinment</title>
	<meta charset="utf-8">
	<!-- <?php
($_GET);


	?> -->
     
     

	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/main.css" class="color-switcher-link">
	<link rel="stylesheet" href="css/shop.css">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>
	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<![endif]-->
</head>

<body>
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->
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
			<form method="get" class="searchform search-form form-inline" action="cancel.php">
				<div class="form-group bottommargin_0"> <input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input"> </div> <button type="submit" class="theme_button">Search</button> </form>
		</div>
	</div>
	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls with_padding">
			<!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
			<!--
		<ul class="list-unstyled">
			<li>Message To User</li>
		</ul>
		-->
		</div>
	</div>
	<!-- eof .modal -->
	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">
			
			<!-- Header Start -->
			<?php include('./comnpages/header.php'); ?>
			<!--Header End -->
			
			
			<section class="page_breadcrumbs ls ms section_padding_25 bg_image">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2 class="small">Cancel Appointment</h2>
						</div>
					</div>
					<ol class="breadcrumb bottom_breadcrumbs">
						<li> <a href="./">
						Home
						</a> </li>						 
						<li class="active">Cancel Appointment</li>
					</ol>
				</div>
			</section>
			 
			 
			<section class="ls columns_padding_25 section_padding_top_100 section_padding_bottom_100">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h3 class="module-header">Cancel Appoinment </h3>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8 to_animate" data-animation="scaleAppear">
							<form method="post" action="cancel.php">
								<div class="row">
									<div class="col-sm-6">
										<div style="border:1px solid #ddd;" > 
										<!--<label>Full Name</label>--> 
										&nbsp  
								      <input type="number" style="border:none;" size="30" name="phone" placeholder="Phone No.">											
								     </div>
									</div>
									
									<div class="col-sm-6">
										<div style="border:1px solid #ddd;">
										<!--<label for="email">Email address<span class="required">*</span></label>--> 
										&nbsp 
										<input type="number" style="border:none;" size="30"  name="id" placeholder="Ticket Id">											</div>
									</div>
									
									
									<div class="col-sm-12 bottommargin_0">
										<div>
											<!-- <input type="hidden" name="uid"   > -->
											<input type="hidden" name="cid" value="<?php echo $_GET['cid'] ?>" >
										<button type="submit" id="contact_form_submit" name="btn_reg" class="theme_button color2 wide_button margin_0">Cancel Appoinment </button> </div>
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
											<h5 class="media-heading grey">Postal Address:</h5> PO Box 97845 Some str. 567, Los Angeles, California, United States </div>
									</div>
								</li>
								<li>
									<div class="media">
										<div class="media-left"> <i class="rt-icon2-phone5 highlight2 fontsize_18"></i> </div>
										<div class="media-body">
											<h5 class="media-heading grey">Phone:</h5> 8(800) 123-12345 </div>
									</div>
								</li>
								<li>
									<div class="media">
										<div class="media-left"> <i class="rt-icon2-stack4 highlight2 fontsize_18"></i> </div>
										<div class="media-body">
											<h5 class="media-heading grey">Fax:</h5> 8(800) 123-12345 </div>
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
	<!-- Google Map Script -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTwYSMRGuTsmfl2z_zZDStYqMlKtrybxo"></script>
</body>



</html>
