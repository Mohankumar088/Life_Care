<!DOCTYPE html>

<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<title>Life Care</title>
	<meta charset="utf-8">
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
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal"> <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
			
			
			<!-- Slider sections -->
			<section class="intro_section page_mainslider ds color">
				<div class="flexslider" data-dots="true" data-nav="false">
					<ul class="slides">
						<li> <img src="./images/slider/1.jpg" alt="">
							<div class="container">
								<div class="row">
									<div class="col-sm-12 text-center">
										<div class="slide_description_wrapper">
											<div class="slide_description">
												<div class="intro-layer with_corner_border with_padding huge-padding" data-animation="slideExpandUp">
												
													<h5 class="thin"> Our researchers are focused on </h5>
													<h2 class="highlight"> Developing Innovative<br> New Therapies... </h2>
													<p> Our mission is to build a healthier tomorrow for patients<br> with progressive non-viral liver diseases </p> <a href="searchDoctor.php" class="theme_button color2 inverse margin_0">
											Search Doctor
										</a> <span class="bottom_corners"></span> </div>
											</div>
											<!-- eof .slide_description -->
										</div>
										<!-- eof .slide_description_wrapper -->
									</div>
									<!-- eof .col-* -->
								</div>
								<!-- eof .row -->
							</div>
							<!-- eof .container -->
						</li>
						<li> <img src="./images/slider/2.jpg" alt="">
							<div class="container">
								<div class="row">
									<div class="col-sm-12 text-center">
										<div class="slide_description_wrapper">
											<div class="slide_description">
												<div class="intro-layer with_corner_border with_padding huge-padding" data-animation="slideExpandUp">
													<h5 class="thin"> We will Help You </h5>
													<h2 class="highlight"> To Live Healthy Life </h2>
													<p> Our mission is to build a healthier tomorrow for patients<br> with progressive non-viral liver diseases </p> <a href="searchDoctor.php" class="theme_button color2 inverse margin_0">
											Search Doctor
										</a> <span class="bottom_corners"></span> </div>
											</div>
											<!-- eof .slide_description -->
										</div>
										<!-- eof .slide_description_wrapper -->
									</div>
									<!-- eof .col-* -->
								</div>
								<!-- eof .row -->
							</div>
							<!-- eof .container -->
						</li>
						<li> <img src="./images/slider/3.jpg" alt="">
							<div class="container">
								<div class="row">
									<div class="col-sm-12 text-center">
										<div class="slide_description_wrapper">
											<div class="slide_description">
												<div class="intro-layer with_corner_border with_padding huge-padding" data-animation="slideExpandUp">
													<h5 class="thin"> We are dedicated to the </h5>
													<h2 class="highlight"> Discovery, Development &amp;<br> Commercialization </h2>
													<p> Of innovative therapies intended to significantly improve outcomes in patients<br> suffering from life-threatening diseases. </p> <a href="searchDoctor.php" class="theme_button color2 inverse margin_0">
										Search Doctor
										</a> <span class="bottom_corners"></span> </div>
											</div>
											<!-- eof .slide_description -->
										</div>
										<!-- eof .slide_description_wrapper -->
									</div>
									<!-- eof .col-* -->
								</div>
								<!-- eof .row -->
							</div>
							<!-- eof .container -->
						</li>
					</ul>
				</div>
				<!-- eof flexslider -->
			</section>
			
			<section>
				
			</section>
			
			<section id="features" class="ls section_padding_top_150 section_padding_bottom_130 columns_margin_bottom_30">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<h2 class="section_header">Why Choose Us?</h2> <a href="about.php" class="theme_button color2 inverse min_width_button">About Us</a> </div>
						<div class="col-md-4 col-sm-6">
							<div class="teaser media hover_icon">
								<div class="media-left">
									<div class="teaser_icon rounded main_bg_color size_small"> <i class="rt-icon2-diamond2"></i> </div>
								</div>
								<div class="media-body toppadding_10">
									<h5 class="hover-color2"><a href="#">Newest Technologies</a></h5>
									<p>Remote diagnosis, consultation, and monitoring using video calls and mobile apps..</p>
								</div>
							</div>
							<div class="teaser media hover_icon">
								<div class="media-left">
									<div class="teaser_icon rounded main_bg_color size_small"> <i class="rt-icon2-cloud"></i> </div>
								</div>
								<div class="media-body toppadding_10">
									<h5 class="hover-color2"><a href="#">Taking Care of Nature</a></h5>
									<p>We believe that a healthy environment is the foundation of healthy lives.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="teaser media hover_icon">
								<div class="media-left">
									<div class="teaser_icon rounded main_bg_color size_small"> <i class="rt-icon2-tag2"></i> </div>
								</div>
								<div class="media-body toppadding_10">
									<h5 class="hover-color2"><a href="#">Fair Prices</a></h5>
									<p>We are committed to providing quality healthcare that is accessible and affordable for everyone.</p>
								</div>
							</div>
							<div class="teaser media hover_icon">
								<div class="media-left">
									<div class="teaser_icon rounded main_bg_color size_small"> <i class="rt-icon2-cloud"></i> </div>
								</div>
								<div class="media-body toppadding_10">
									<h5 class="hover-color2"><a href="#">High Customer Satisfaction</a></h5>
									<p>Patient comfort and satisfaction are at the heart of everything we do.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="about" class="ls ">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2 class="section_header headd" style="color: #1589FF;"> Our Doctors </h2>
							
						</div>
					</div>
				</div>
			</section>
				
			
			<section class="cs gradient section_padding_top_50 section_padding_bottom_50">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-12">
							<div class="owl-carousel partners-carousel" data-responsive-lg="9" data-responsive-md="6" data-responsive-sm="4" data-responsive-xs="2" data-nav="false" data-dots="false" data-center="true" data-loop="true"> <a href="#">
						<img src="images/Doctors/rachna.jpg" alt="" style="width:150px;height:150px;" class="img-circle">
					</a> <a href="#">
						<img src="images/Doctors/sanjeev sach.jpg" alt="" style="width:150px;height:150px;" class="img-circle">
					</a> <a href="#">
						<img src="images/Doctors/nagpal.jpg" alt="" style="width:150px;height:150px;" class="img-circle">
					</a> <a href="#">
						<img src="images/Doctors/radha.jpg" alt="" style="width:150px;height:150px;" class="img-circle">
					</a> <a href="#">
						<img src="images/Doctors/sandeep.jpg" alt="" style="width:150px;height:150px;" class="img-circle">
					</a> <a href="#">
						<img src="images/Doctors/gaba.jpg" alt="" style="width:150px;height:150px;" class="img-circle">
					</a> <a href="#">
						<img src="images/Doctors/meenu.jpg" alt="" style="width:150px;height:150px;" class="img-circle">
					</a> <a href="#">
						<img src="images/Doctors/raj.jpg" alt="" style="width:150px;height:150px;" class="img-circle">
					</a> <a href="#">
						<img src="images/Doctors/sonia.jpg" alt="" style="width:150px;height:150px;" class="img-circle">
					</a> </div>
						</div>
					</div>
				</div>
			</section>
			<!-- Slick start-->
	<!-- 	<div class="container slick">
	<div class="row slicky">
		<div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
            <div class="MultiCarousel-inner">
                <div class="item">
                    <div class="pad15">
                       <img src="images/Doctors/deep.jpg" style="width:150px;height:150px;" class="img-circle">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                       <img src="images/Doctors/amitt.jpg" style="width:150px;height:150px;" class="img-circle">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                        <img src="images/Doctors/arora.jpg" style="width:150px;height:150px;" class="img-circle">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                       <img src="images/Doctors/daksh.jpg" style="width:150px;height:150px;" class="img-circle">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                        <img src="images/Doctors/dheeraj.jpg" style="width:150px;height:150px;" class="img-circle">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                       <img src="images/Doctors/dush.jpg" style="width:150px;height:150px;" class="img-circle">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                        <img src="images/Doctors/ganesh.jpg" style="width:150px;height:150px;" class="img-circle">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                      <img src="images/Doctors/kuldeepak.jpg" style="width:150px;height:150px;" class="img-circle">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                        <img src="images/Doctors/nagpal.jpg" style="width:150px;height:150px;" class="img-circle">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                      <img src="images/Doctors/pardeepkholi.jpg" style="width:150px;height:150px;" class="img-circle">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                        <img src="images/Doctors/mud.jpg" style="width:150px;height:150px;" class="img-circle">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                       <img src="images/Doctors/pnk.jpg" style="width:150px;height:150px;" class="img-circle">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                       <img src="images/Doctors/rachna.jpg" style="width:150px;height:150px;" class="img-circle">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                       <img src="images/Doctors/pnk.jpg" style="width:150px;height:150px;" class="img-circle">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                        <img src="images/Doctors/renu.jpg" style="width:150px;height:150px;" class="img-circle">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                        <img src="images/Doctors/sonia.jpg" style="width:150px;height:150px;" class="img-circle">
                    </div>
                </div>
            </div>
            <button class="btn btn-primary leftLst"><</button>
            <button class="btn btn-primary rightLst">></button>
        </div>
	</div>
</div> -->
			<!-- slick end-->
			
			
			
			
		<!-- 	<section class="cs gradient section_padding_top_50 section_padding_bottom_50">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-12">
							<div class="owl-carousel partners-carousel" data-responsive-lg="9" data-responsive-md="6" data-responsive-sm="4" data-responsive-xs="2" data-nav="false" data-dots="false" data-center="true" data-loop="true"> <a href="#">
						<img src="images/Doctors/rachna.jpg" alt="" style="width:150px;height:150px;" class="img-circle">
					</a> <a href="#">
						<img src="images/Doctors/rachna.jpg" alt="" style="width:150px;height:150px;" class="img-circle">
					</a> <a href="#">
						<img src="images/Doctors/rachna.jpg" alt="" style="width:150px;height:150px;" class="img-circle">
					</a> <a href="#">
						<img src="images/Doctors/rachna.jpg" alt="" style="width:150px;height:150px;" class="img-circle">
					</a> <a href="#">
						<img src="images/Doctors/rachna.jpg" alt="" style="width:150px;height:150px;" class="img-circle">
					</a> <a href="#">
						<img src="images/Doctors/rachna.jpg" alt="" style="width:150px;height:150px;" class="img-circle">
					</a> <a href="#">
						<img src="images/Doctors/rachna.jpg" alt="" style="width:150px;height:150px;" class="img-circle">
					</a> <a href="#">
						<img src="images/Doctors/rachna.jpg" alt="" style="width:150px;height:150px;" class="img-circle">
					</a> <a href="#">
						<img src="images/Doctors/rachna.jpg" alt="" style="width:150px;height:150px;" class="img-circle">
					</a> </div>
						</div>
					</div>
				</div>
			</section>
			 -->
			
			
			<!-- Start Footer -->
			<?php include('./comnpages/footer.php'); ?>			
			<!-- End Footer -->
			
			
		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->
	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>	
	<script type="text/javascript">
		$(document).ready(function () {
    var itemsMainDiv = ('.MultiCarousel');
    var itemsDiv = ('.MultiCarousel-inner');
    var itemWidth = "";

    $('.leftLst, .rightLst').click(function () {
        var condition = $(this).hasClass("leftLst");
        if (condition)
            click(0, this);
        else
            click(1, this)
    });

    ResCarouselSize();




    $(window).resize(function () {
        ResCarouselSize();
    });

    //this function define the size of the items
    function ResCarouselSize() {
        var incno = 0;
        var dataItems = ("data-items");
        var itemClass = ('.item');
        var id = 0;
        var btnParentSb = '';
        var itemsSplit = '';
        var sampwidth = $(itemsMainDiv).width();
        var bodyWidth = $('body').width();
        $(itemsDiv).each(function () {
            id = id + 1;
            var itemNumbers = $(this).find(itemClass).length;
            btnParentSb = $(this).parent().attr(dataItems);
            itemsSplit = btnParentSb.split(',');
            $(this).parent().attr("id", "MultiCarousel" + id);


            if (bodyWidth >= 1200) {
                incno = itemsSplit[3];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 992) {
                incno = itemsSplit[2];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 768) {
                incno = itemsSplit[1];
                itemWidth = sampwidth / incno;
            }
            else {
                incno = itemsSplit[0];
                itemWidth = sampwidth / incno;
            }
            $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
            $(this).find(itemClass).each(function () {
                $(this).outerWidth(itemWidth);
            });

            $(".leftLst").addClass("over");
            $(".rightLst").removeClass("over");

        });
    }


    //this function used to move the items
    function ResCarousel(e, el, s) {
        var leftBtn = ('.leftLst');
        var rightBtn = ('.rightLst');
        var translateXval = '';
        var divStyle = $(el + ' ' + itemsDiv).css('transform');
        var values = divStyle.match(/-?[\d\.]+/g);
        var xds = Math.abs(values[4]);
        if (e == 0) {
            translateXval = parseInt(xds) - parseInt(itemWidth * s);
            $(el + ' ' + rightBtn).removeClass("over");

            if (translateXval <= itemWidth / 2) {
                translateXval = 0;
                $(el + ' ' + leftBtn).addClass("over");
            }
        }
        else if (e == 1) {
            var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
            translateXval = parseInt(xds) + parseInt(itemWidth * s);
            $(el + ' ' + leftBtn).removeClass("over");

            if (translateXval >= itemsCondition - itemWidth / 2) {
                translateXval = itemsCondition;
                $(el + ' ' + rightBtn).addClass("over");
            }
        }
        $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
    }

    //It is used to get some elements from btn
    function click(ell, ee) {
        var Parent = "#" + $(ee).parent().attr("id");
        var slide = $(Parent).attr("data-slide");
        ResCarousel(ell, Parent, slide);
    }

});
	</script>
<!-- 	<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script> -->
  <script type="text/javascript">
  	 function sendEmail(){
  	 	console.log('sending....');
  	 	var name= $('#name');
  	 	var email= $('#email');
  	 	var phone= $('#phone');
  	 	var subject= $('#subject');
  	 	var message =$('#message');
  	 	if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(phone) && isNotEmpty(message) && isNotEmpty(subject)) {
        console.log('cnd....');
  	 	}
  	 }
  	 function isNotEmpty(caller){
     
     if(caller.val==""){
     	caller.CSS('border','1px solid red');
     	return false;
     }else{
     	caller.css('border','');
     	return true;
     }
  	 }
  </script>
	
</body>

</html>