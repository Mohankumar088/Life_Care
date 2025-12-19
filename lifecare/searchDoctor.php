<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<title>LifeCare</title>
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
	<style>
p.p1{

color:skyblue;	
}</style>
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
			<?php include('./comnpages/header.php');

              require('./comnpages/config.php');?>
			<!--Header End -->
			
			
			<section class="page_breadcrumbs ls ms section_padding_25 bg_image">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2 class="small">Doctor Search </h2>
						</div>
					</div>
					<ol class="breadcrumb bottom_breadcrumbs">
						<li> <a href="./">
						Home
						</a> </li>						 
						<li class="active">Doctor List</li>
					</ol>
				</div>
			</section>
		
			<section  class="ls section_padding_top_130 section_padding_bottom_130 columns_padding_25">	
			<div  class="col-md-12" style="float:center;" >
			             <form action="./searchDoctor.php" method="get">
                              <div class="col-md-2 offset-md-1" class='left1'>					         
								      </div>
                              
								 <div class="col-md-3 offset-md-1" class='left1'>
								 
								          <input type="text" name="doc_name" placeholder="Enter Doctor Name">
								      </div>
			                           <div class="col-md-3 offset-md-1 left1" >
									   
									   <select name="speciality">
										<option >Select Speciality</option>
										<?php
										require('./comnpages/config.php');
										$select = mysqli_query($conn,"SELECT distinct (speciality) FROM doctor_list");
					                     $noofrows=mysqli_num_rows($select);
										$count1=0;
										 if($noofrows>0)
										 {
					                      while($row= mysqli_fetch_array($select))
					                          {
					                         $count1++;
																						
										  ?>
										   
									
											        <option value="<?php echo $row['speciality'];?>"><?php echo $row['speciality'];?></option>
											      
												   <?php
										 }}
										 ?>
							       </select>
		                     </div>          
			                      
			               <div class="col-md-2 offset-md-1 left1">
								<select name="area">
									<option  >Select Location</option>
										    <?php
												require('./comnpages/config.php');
												$select = mysqli_query($conn,"SELECT distinct (address ) FROM clinics");
							                     $noofrows=mysqli_num_rows($select);
												$count4=0;
												 if($noofrows>0)
												 {
							                      while($row= mysqli_fetch_array($select))
							                          {
							                         $count4++;
																								
												  ?>
									<option value="<?php echo $row['address'];?>"><?php echo $row['address'];?></option>
	                                          <?php
								                }}
								              ?>
								</select>
								         
					         </div>
	                             	
			                   <div class="col-md-2 offset-md-1" >
							  <input  type="submit" value="search" class="btn btn-block" name="doc_sec">
							   </div>
		<!-- 	<div class="col-md-2 offset-md-1" >	
			
		    </div> -->
			</form>
	</div>		
</section>
				
			
			
			
			
			
			<section class="ls section_padding_top_130 section_padding_bottom_130 columns_padding_25">
			<center>
				<div class="container">
					<div class="row">
					
	<?php
							
							require('./comnpages/config.php');
							 
							 if(isset($_GET['speciality'])&&isset($_GET['doc_name']))
							{$name=$_GET['doc_name'];
							$speciality=$_GET['speciality'];
							
							$sql="SELECT * FROM doctor_list where speciality='$speciality' AND name LIKE '%$name%'";
							
							$select = mysqli_query($conn,$sql);
		                   
						 //  var_dump($select);
						   
							 $noofrows=mysqli_num_rows($select);
							 $count3=0;
							 
							 if($noofrows>0)
							 {
		                      while($row= mysqli_fetch_array($select))
		                          {
		                         $count3++;
							 ?>	
					
						<div class="col-md-12">
							<article class="single-post vertical-item content-padding big-padding with_border rounded post">
								<!-- .item-content -->
							</article>
							<article class="author-meta side-item side-md content-padding with_border rounded">
								<div class="row">
									<div class="col-md-4">
									<div class="item-media top_rounded overflow_hidden">
									 <img src="<?php echo $row['image'];?>" alt="" class="img-circle  " height="150px" width="150px"></div>
									</div>
                                   

                                    
						<div class="col-md-8">
						<div class="item-content">
					<h4 class="bottommargin_0 text-white" style = "text-transform:capitalize"><?php echo $row['name'];?></h4><br>
											<p class="fontsize_14 highlight2 medium"><?php echo $row['speciality'];?></p>
                                            <p class="p1" class="fontsize_14 highlight2 medium " >Consultant Fees:&nbsp&nbsp&nbsp&nbsp<i class="fa fa-inr "></i><?php echo $row['fees'];?></p>
											
											<p><?php echo $row['description'];?></p>
											<!--
											<p>As communication barriers are declining with the advent of telecommunications,you can now consult them from whereever u are,usingyour smart phone or computer screen.
											</p>
											-->
											<div class="greylinks"> <a href="#" class="social-icon soc-facebook"></a> <a href="#" class="social-icon soc-twitter"></a> <a href="#" class="social-icon soc-linkedin"></a> <a href="#" class="social-icon soc-youtube"></a> 
											</div>
											<br><br><br>
											

												<a style="float:center;" href="patientlogin.php?id=<?php echo $row['did'] ?>" 
												class="theme_button color2 inverse min_width_button">Book Appoinment</a>
										</div>
									</div>
								</div>
							</article>
							</div>
							
							<?php
							}}}
						
							 
							 elseif(isset($_GET['speciality']))
							{
						$speciality=$_GET['speciality'];
						$sql="SELECT * FROM doctor_list where speciality='$speciality' AND name LIKE '%$name%'";
							$select = mysqli_query($conn,$sql);
		                     $noofrows=mysqli_num_rows($select);
							 $count=0;
							 if($noofrows>0)
							 {
		                      while($row= mysqli_fetch_array($select))
		                          {
		                         $count++;
																			
							  ?>
							
						<div class="col-md-12">
							<article class="single-post vertical-item content-padding big-padding with_border rounded post">
								<!-- .item-content -->
							</article>
							<article class="author-meta side-item side-md content-padding with_border rounded">
								<div class="row">
									<div class="col-md-4">
										<div class="item-media top_rounded overflow_hidden "> <img src="<?php echo $row['image'];?>" alt="" height="150px" width="150px" class="img-circle" ></div>
									</div>
                                   

                                    
									<div class="col-md-8">
										<div class="item-content">
											<h4 class="bottommargin_0"><?php echo $row['name'];?></h4><br>
											<p class="fontsize_14 highlight2 medium"><?php echo $row['speciality'];?></p>
                                            <p class="p1" class="fontsize_14 highlight2 medium " >Consultant Fees:&nbsp&nbsp&nbsp&nbsp<i class="fa fa-inr "></i><?php echo $row['fees'];?></p>
											
											<p><?php echo $row['description'];?></p>
											<!--
											<p>As communication barriers are declining with the advent of telecommunications,you can now consult them from whereever u are,usingyour smart phone or computer screen.
											</p>
											-->
											<div class="greylinks"> <a href="#" class="social-icon soc-facebook"></a> <a href="#" class="social-icon soc-twitter"></a> <a href="#" class="social-icon soc-linkedin"></a> <a href="#" class="social-icon soc-youtube"></a> 
											</div>
											<br><br><br>
											
												<a style="float:center;" href="patientlogin.php?id=<?php echo $row['did'] ?>" 
												class="theme_button color2 inverse min_width_button">Book Appoinment</a>
										</div>
									</div>
								</div>
							</article>
							</div>
							<?php
							}}}
						 ?>
							<?php	
					 if(isset($_GET['doc_name']) && $_GET['doc_name']!=NULL)
							{
						$name=$_GET['doc_name'];
							$select = mysqli_query($conn,"SELECT * FROM doctor_list where name LIKE '%$name%'");
		                     $noofrows=mysqli_num_rows($select);
							 $count=0;
							 if($noofrows>0)
							 {
		                      while($row= mysqli_fetch_array($select))
		                          {
		                         $count++;
																			
							  ?>
						
							
						<div class="col-md-12">
							<article class="single-post vertical-item content-padding big-padding with_border rounded post">
								<!-- .item-content -->
							</article>
							<article class="author-meta side-item side-md content-padding ">
								<div class="row">
									<div class="col-md-4">
										<div class="item-media top_rounded overflow_hidden"> <div 
									><img src="<?php echo $row['image'];?>" alt="" class="img-circle" height="150" width="150" style="margin: 10px;"></div></div>
									</div>
                                   

                                    
									<div class="col-md-8">
										<div class="item-content">
											<h4 class="bottommargin_0"><?php echo $row['name'];?></h4><br>
											<p class="fontsize_14 highlight2 medium"><?php echo $row['speciality'];?></p>
                                            <p class="p1" class="fontsize_14 highlight2 medium " >Consultant Fees:&nbsp&nbsp&nbsp&nbsp<i class="fa fa-inr "></i><?php echo $row['fees'];?></p>
											
											<p><?php echo $row['description'];?></p>
											<!--
											<p>As communication barriers are declining with the advent of telecommunications,you can now consult them from whereever u are,usingyour smart phone or computer screen.
											</p>
											-->
											<div class="greylinks"> <a href="#" class="social-icon soc-facebook"></a> <a href="#" class="social-icon soc-twitter"></a> <a href="#" class="social-icon soc-linkedin"></a> <a href="#" class="social-icon soc-youtube"></a> 
											</div>
											<br><br><br>
											
												<a style="float:center;" href="patientlogin.php?id=<?php echo $row['did'] ?>" 
												class="theme_button color2 inverse min_width_button">Book Appoinment</a>
										</div>
									</div>
								</div>
							</article>
							</div>		
							<?php
							}}}
							
							 
							 if(isset($_GET['area']))
							{
						$area=$_GET['area'];
					
						$sql="SELECT d.name,d.image,d.fees,d.speciality,d.description FROM doctor_list d,clinics c where d.did=c.d_id AND  c.address LIKE '%$area%'";
					
							$select = mysqli_query($conn,$sql);
							
		                     $noofrows=mysqli_num_rows($select);
							 $count=0;
							 if($noofrows>0)
							 {
		                      while($row= mysqli_fetch_array($select))
		                          {
		                         $count++;
																			
							  ?>
							
						<div class="col-md-12">
							<article class="single-post vertical-item content-padding big-padding with_border rounded post">
								<!-- .item-content -->
							</article>
							<article class="author-meta side-item side-md content-padding with_border rounded">
								<div class="row">
									<div class="col-md-4">
										<div class="item-media top_rounded overflow_hidden"> <img src="<?php echo $row['image'];?>" alt=""></div>
									</div>
                                   

                                    
									<div class="col-md-8">
										<div class="item-content">
											<h4 class="bottommargin_0"><?php echo $row['name'];?></h4><br>
											<p class="fontsize_14 highlight2 medium"><?php echo $row['speciality'];?></p>
                                            <p class="p1" class="fontsize_14 highlight2 medium " >Consultant Fees:&nbsp&nbsp&nbsp&nbsp<i class="fa fa-inr "></i><?php echo $row['fees'];?></p>
											
											<p><?php echo $row['description'];?></p>
											<!--
											<p>As communication barriers are declining with the advent of telecommunications,you can now consult them from whereever u are,usingyour smart phone or computer screen.
											</p>
											-->
											<div class="greylinks"> <a href="#" class="social-icon soc-facebook"></a> <a href="#" class="social-icon soc-twitter"></a> <a href="#" class="social-icon soc-linkedin"></a> <a href="#" class="social-icon soc-youtube"></a> 
											</div>
											<br><br><br>
											
								          <a style="float:center;" href="patientlogin.php?id=<?php echo $row['did'] ?>" 
												class="theme_button color2 inverse min_width_button">Book Appoinment</a>
										</div>
									</div>
								</div>
							</article>
							</div>
							<?php
							}}}
						
     if(!(isset($_GET['area']))&&!(isset($_GET['doc_name']))&&!(isset($_GET['speciality'])))
	 {        
							$select = mysqli_query($conn,"SELECT * FROM doctor_list");
		                     $noofrows=mysqli_num_rows($select);
							 $count=0;
							 if($noofrows>0)
							 {
		                      while($row= mysqli_fetch_array($select))
		                          {
		                         $count++;
																			
							  ?>
						
							
					<div class="col-md-12">
							<article class="single-post vertical-item content-padding big-padding with_border rounded post">
								<!-- .item-content -->
							</article>
							<article class="author-meta side-item side-md content-padding with_border rounded">
								<div class="row">
									<div class="col-md-4">
										<div class="item-media top_rounded overflow_hidden" style=" width: 80%; margin-top: 40px;"> <img src="<?php echo $row['image'];?>" alt=""></div>
									</div>
                                   

                                    
									<div class="col-md-8">
										<div class="item-content">
											<h4 class="bottommargin_0"><?php echo $row['name'];?></h4><br>
											<p class="fontsize_14 highlight2 medium"><?php echo $row['speciality'];?></p>
                                            <p class="p1" class="fontsize_14 highlight2 medium " >Consultant Fees:&nbsp&nbsp&nbsp&nbsp<i class="fa fa-inr "></i><?php echo $row['fees'];?></p>
											
											<p><?php echo $row['description'];?></p>
											<!--
											<p>As communication barriers are declining with the advent of telecommunications,you can now consult them from whereever u are,usingyour smart phone or computer screen.
											</p>
											-->
											<div class="greylinks"> <a href="#" class="social-icon soc-facebook"></a> <a href="#" class="social-icon soc-twitter"></a> <a href="#" class="social-icon soc-linkedin"></a> <a href="#" class="social-icon soc-youtube"></a> 
											</div>
											<br><br><br>
											

										<a style="float:center;" href="patientlogin.php?id=<?php echo $row['did'] ?>" 
												class="theme_button color2 inverse min_width_button">Book Appointment</a>
										</div>
									</div>
								</div>
							</article>
							</div>	
							<?php
							}}}
						
						?>
						 	 
										 
						<!--eof .col-sm-8 (main content)-->
						<!-- sidebar -->
				
						<!-- eof aside sidebar -->
					</div>
				</div>
				</center>
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