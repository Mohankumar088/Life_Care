<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<title>Contact</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/main.css" class="color-switcher-link">
	<link rel="stylesheet" href="css/shop.css">
	<link rel="stylesheet" type="text/css" href="./css/inbox.css">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>
</head>

<body>
	<div class="preloader">
		<div class="preloader_image"></div>
	</div>

	<div id="canvas">
		<div id="box_wrapper">

			<!-- Header Start -->
			<?php include('./comnpages/header.php'); ?>
			<!-- Header End -->

			<section class="page_breadcrumbs ls ms section_padding_25 bg_image">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2 class="small">Contact US</h2>
						</div>
					</div>
					<ol class="breadcrumb bottom_breadcrumbs">
						<li><a href="./">Home</a></li>
						<li class="active">Contact US</li>
					</ol>
				</div>
			</section>

			<section class="ls columns_padding_25 section_padding_top_100 section_padding_bottom_100">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h3 class="module-header">Contact Form</h3>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8 to_animate" data-animation="scaleAppear">
							<form method="post" action="contactInsert.php" onsubmit="return validatePhone();">
								<div class="row">
									<div class="col-sm-6">
										<div class="inbox">
											&nbsp <i class="fa fa-user highlight2"></i>
											<input type="text" style="border:none;" size="30" name="name" placeholder="Full Name">
										</div>
									</div>

									<div class="col-sm-6">
										<div class="inbox">
											&nbsp <i class="fa fa-phone highlight2" aria-hidden="true"></i>
											<input type="text" style="border:none;" size="30" name="phone" id="phone"
												placeholder="Phone Number" maxlength="10"
												oninput="this.value=this.value.replace(/[^0-9]/g,'');" required>
											<small id="phoneError" style="color:red; display:none;">Phone number must be exactly 10 digits.</small>
										</div>
									</div>

									<div class="col-sm-6">
										<div class="inbox">
											&nbsp <i class="fa fa-envelope highlight2" aria-hidden="true"></i>
											<input type="email" style="border:none;" size="30" name="email" placeholder="Email Address">
										</div>
									</div>

									<div class="col-sm-6">
										<div style="border:1px solid #ddd;">
											&nbsp <i class="fa fa-flag highlight2" aria-hidden="true"></i>
											<input type="text" size="30" style="border:none;" name="subject" placeholder="Subject">
										</div>
									</div>

									<div class="col-sm-12">
										<div class="contact-form-message form-group bottommargin_0" style="border:1px solid #ddd;">
											<textarea rows="3" cols="45" style="width:100%;background:url(images.png)no-repeat;border:none;" name="message" placeholder="Message"></textarea>
										</div>
									</div>

									<div class="col-sm-12 bottommargin_0">
										<div>
											<button type="submit" id="contact_form_submit" name="btn_reg" class="theme_button color2 wide_button margin_0">Send message</button>
										</div>
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
											<h5 class="media-heading grey">Postal Address:</h5> CIT BENGALURU
										</div>
									</div>
								</li>
								<li>
									<div class="media">
										<div class="media-left"> <i class="rt-icon2-phone5 highlight2 fontsize_18"></i> </div>
										<div class="media-body">
											<h5 class="media-heading grey">Phone:</h5> +91 9353702439
										</div>
									</div>
								</li>
								<li>
									<div class="media">
										<div class="media-left"> <i class="rt-icon2-phone5 highlight2 fontsize_18"></i> </div>
										<div class="media-body">
											<h5 class="media-heading grey">Tell Phno:</h5> +91 6360668622
										</div>
									</div>
								</li>
								<li>
									<div class="media">
										<div class="media-left"> <i class="rt-icon2-mail highlight2 fontsize_18"></i> </div>
										<div class="media-body greylinks">
											<h5 class="media-heading grey">Email:</h5> <a href="mailto:your@mail.com">lifecareinfo@gmail.com</a>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</section>

			<!-- Footer Start -->
			<?php include('./comnpages/footer.php'); ?>
			<!-- Footer End -->

		</div>
	</div>

	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>

	<!-- ✅ Phone Number Validation Script -->
	<script>
		function validatePhone() {
			const phone = document.getElementById("phone").value.trim();
			const error = document.getElementById("phoneError");

			if (phone.length !== 10) {
				error.style.display = "block";
				return false;
			} else {
				error.style.display = "none";
				return true;
			}
		}
	</script>
</body>
</html>
