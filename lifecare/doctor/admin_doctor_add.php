<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Admin :: add Doctor name</title>

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
					<h3 class="page-header"><i class="fa fa fa-bars"></i> Add Doctor</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<!--<li><i class="fa fa-bars"></i>Employee</li>-->
						<li><i class="fa fa-square-o"></i>Add Doctore name</li>
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
						  
						  <div class="col-md-6 portlets">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="pull-left">Add Doctor </div>
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
                                      <form class="form-horizontal" action="./model/admin_model_doctorInsert.php" method="post" enctype="multipart/form-data" >
                                          <!-- Title -->
										        
                                          <div class="form-group">
                                            <label class="control-label col-lg-2" for="title"><b>Doctor Name</b></label>
                                            <div class="col-lg-10"> 
                                              <input type="text" class="form-control" name="name" id="title">
                                             
                                            </div>
                                          </div>      
											<!-- Tags -->
                                          <div class="form-group">
                                            <label class="control-label col-lg-2" for="tags"><b>Speciality</b></label>
                                            <div class="col-lg-10">
                                              <input type="text" class="form-control" name="speciality" id="tags">
                                            </div>
                                          </div>	
                                          
                                          <div class="form-group">
                                            <label class="control-label col-lg-2" for="tags"><b>Fees</b></label>
                                            <div class="col-lg-10">
                                              <input type="text" class="form-control" name="fees" id="tags">
                                            </div>
                                          </div>

                                           <div class="form-group">
                                            <label class="control-label col-lg-2" for="tags"><b>Description</b></label>
                                            <div class="col-lg-10">
                                              <input type="text" class="form-control" name="description" id="tags">
                                            </div>
                                          </div>

										             
										<div class="form-group">
                                        <label class="control-label col-lg-2" for="tags"><b>Image</b></label>
										<div class="col-lg-10">
                                        <input type="file" class="form-control"  name="image" placeholder="">
										</div>
                                    </div>
												 
                                <div class="form-group">
                                            <label class="control-label col-lg-2" for="tags"><b>Clinic Ids</b></label>
                                            <div class="col-lg-10">
                                              <input type="text" class="form-control" name="clinicid"  id="tags">
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
												<button type="submit" class="btn btn-success" name="btn" >Add </button>			
												<button type="reset" class="btn btn-default">Reset</button>
												
												
												
						
							
											 
                                          </div>
                                      
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
