<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

	<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
	
    <title>Admin :: Add Post</title>

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
					<h3 class="page-header"><i class="fa fa fa-bars"></i> Add Post</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<!--<li><i class="fa fa-bars"></i>Employee</li>-->
						<li><i class="fa fa-square-o"></i>Add Post</li>
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
                  <div class="pull-left">Add Blog Post </div>
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
                                      <form class="form-horizontal" method="post" enctype="multipart/form-data" >
                                          <!-- Title -->
										        
                                          <div class="form-group">
                                            <label class="control-label col-lg-2" for="title"><b>Post Title</b></label>
                                            <div class="col-lg-10"> 
                                              <input type="text" class="form-control" name="posttitle" id="title">
                                             
                                            </div>
                                          </div>      
											<!-- Tags -->
                                          
                                          
                                          

                                           
										  
										  
										  
										  

										             
										<div class="form-group">
                                        <label class="control-label col-lg-2" for="tags"><b>Image</b></label>
										<div class="col-lg-10">
                                        <input type="file" class="form-control"  name="image" placeholder="">
										</div>
                                    </div>
											 
                                <div class="form-group">
                                            <label class="control-label col-lg-2" for="tags"><b>Post Details</b></label>
                                            <div class="col-lg-10">
                                              <textarea class="form-control" name="editor1"  id="tags"></textarea>
                                            </div>
                                          </div>	

<script>
                        CKEDITOR.replace( 'editor1' );
                </script>

   
                                          <!-- Buttons -->
                                          <div class="form-group">
                                             <!-- Buttons -->
											 <div class="col-lg-offset-2 col-lg-9">
												<button type="submit" class="btn btn-success" name="submit" >Add </button>			
												<button type="reset" class="btn btn-default">Reset</button>
												
						 <br><br><br><br><br><br>
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


<?php 
include "dbconfigure.php";
if(isset($_POST['submit']))
{
$posttitle = $_POST['posttitle'];

$postdetail = $_POST['editor1'];
$postdate = date("d-m-y");


move_uploaded_file($_FILES['image']['tmp_name'],"../images/Post/".$_FILES['image']['name']);

$image = "images/Post/".$_FILES['image']['name'];


$query = "insert into blogpost(posttitle,postdetail,image,postdate) values('$posttitle','$postdetail','$image','$postdate')";
$n = my_iud($query);
if($n==1)
{
echo '<script>alert("Record Added Successfully");
window.location="managepost.php";
</script>';
}
else
{
echo '<script>alert("Something went wrong,Try Again...")</script>';
}
}
?>

