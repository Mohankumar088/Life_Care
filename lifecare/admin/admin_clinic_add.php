<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Admin :: add Clinic</title>

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
					<h3 class="page-header"><i class="fa fa fa-bars"></i> Add Clinic</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						
						<li><i class="fa fa-square-o"></i>Add Clinic</li>
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
                  <div class="pull-left">Add Clinic </div>
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
                                      <form class="form-horizontal" action="./model/admin_model_clinic_add_insert.php" method="post" enctype="multipart/form-data" >
                                          <!-- Title -->
										        
                                          <!--<div class="form-group">
                                            <label class="control-label col-lg-2" for="title"><b>Clinic Id</b></label>
                                            <div class="col-lg-10"> 
                                              <input type="text" class="form-control" name="clinic_id" id="title">
                                            </div>
                                          </div> --> 
                                        
                                            <!--<label class="control-label col-lg-2" for="title"><b>Doctors Id</b></label>-->
                                            
                                              <!--<input type="text" class="form-control" name="d_id" id="title" value="<?php// echo $_GET['cid']?>">-->
                                           
                                            										  
											<!-- Tags -->
											<?php
			                                     include('./comnpages/config.php');
			                                     $sql="SELECT * FROM  doctor_list";
			                                     $tableData=mysqli_query($conn,$sql);
			                                     $noOfRows=mysqli_num_rows($tableData);
			                                      $count=1;
			                                     if($noOfRows>0)
			                                       {
			                               while($row=mysqli_fetch_array($tableData))
			                                            {
				                                         ?> 
													<input type="hidden" value="<?php echo $row['did'];?>" name="did">
													
											<?php $count++;	} }  ?>
											
										<div class="form-group">
                                            <label class="control-label col-lg-2"><b>Doctor Name</b></label>
                                            <div class="col-lg-10">     
                                            
                                                											
                                                <select class="form-control" name="docname">
												
												  <?php
			                                     include('./comnpages/config.php');
			                                     $sql="SELECT * FROM  doctor_list";
			                                     $tableData=mysqli_query($conn,$sql);
			                                     $noOfRows=mysqli_num_rows($tableData);
			                                      $count=1;
			                                     if($noOfRows>0)
			                                       {
			                               while($row=mysqli_fetch_array($tableData))
			                                            {
				                                         ?> 
												  
                                               <option value="<?php echo $row['did'];?>">
												  
									              
									              <?php echo $row['name'];?>
												  </option>
                                                  
                                                  <?php $count++;	} }  ?>
                                                  
                                                </select>  
                                            </div>
                                          </div>	
                                          <div class="form-group">
                                            <label class="control-label col-lg-2" for="tags"><b>Clinic Name</b></label>
                                            <div class="col-lg-10">
											
                                              <input type="text" class="form-control" name="name" id="tags">
                                              
                                            </div>
                                          </div>	
                                          
                                          <div class="form-group">
                                            <label class="control-label col-lg-2" for="tags"><b>Address</b></label>
                                            <div class="col-lg-10">
                                              <input type="text" class="form-control" name="address" id="tags">
                                            </div>
                                          </div>
										  
										  <div class="form-group">
                                            <label class="control-label col-lg-2" for="tags"><b>Location(City)</b></label>
                                            <div class="col-lg-10">
                                              <input type="text" class="form-control" name="location" id="tags">
                                            </div>
                                          </div>

                                           <div class="form-group">
                                            <label class="control-label col-lg-2" for="tags"><b>Timing(Mon-Sat)</b></label>
                                            <div class="col-lg-10">
                                              <input type="text" class="form-control" name="time_mon_sat" id="tags">
                                            </div>
                                          </div>

										             
										<div class="form-group">
                                        <label class="control-label col-lg-2" for="tags"><b>Timing (Sun)</b></label>
										<div class="col-lg-10">
                                         <input type="text" class="form-control" name="time_sun" id="tags">
										</div>
										
                                    </div>
												 
                                <div class="form-group">
                                            <label class="control-label col-lg-2" for="tags"><b>Contact No</b></label>
                                            <div class="col-lg-10">
                                              <input type="text" class="form-control" name="con_no"  id="tags">
                                            </div>
											
								 		
											
											
											
                                          </div>
   <div class="form-group">
                                            <label class="control-label col-lg-2" for="tags"><b>Mobile No</b></label>
                                            <div class="col-lg-10">
                                              <input type="text" class="form-control" name="mob_no"  id="tags">
                                            </div>
											
								 		
											
											
											
                                          </div>										  
                                          <!-- Cateogry -->
                                          <!--<div class="form-group">
                                            <label class="control-label col-lg-2"><b>Status</b></label>
                                            <div class="col-lg-10">                               
                                                <select class="form-control" name="status">
                                                  <option value="1">Active</option>
                                                  <option value="0">Disabled</option>
                                                  
                                                </select>  
                                            </div>
                                          </div>-->              
                                          
                                          
                                          <!-- Buttons -->
                                          <div class="form-group">
                                             <!-- Buttons -->
											 <div class="col-lg-offset-2 col-lg-9">
												<button type="submit" class="btn btn-success" name="clinic_btn" >Add </button>			
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
