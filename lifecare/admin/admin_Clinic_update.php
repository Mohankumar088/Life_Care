<?php
require('./comnpages/config.php');
//$select_userRequest="SELECT * FROM doctor_list ";
//$data_sur=mysqli_query($conn,$select_userRequest);
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

    <title>Admin :: Update Clinic</title>

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
					<h3 class="page-header"><i class="fa fa fa-bars"></i>Update Clinic</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="fa fa-bars"></i>Clinic</li>
						<li><i class="fa fa-square-o"></i>Update Clinic</li>
					</ol>
				</div>
			</div>
              <!-- page start-->
              <?php	
			$update_id=$_REQUEST['xcid'];
			$c_select = mysqli_query($conn,"SELECT * FROM clinics WHERE clinic_id='$update_id'");
			$data_row = mysqli_fetch_array($c_select);
					$sql1="UPDATE clinic SET isread=1";
					$sql11=mysqli_query($conn,$sql1);
			
				?>
			 <?php	
			/*$update_id=$_REQUEST['xcid'];
			$sql="SELECT * FROM clinic WHERE clinic_id=$update_id";
			$select=mysqli_query($conn,$sql);
	        $data_row=mysqli_fetch_array($select);*/
			
			 ?>
	   
	   <form  action="model/admin_model_Clinic_update.php" method="post" >
			   
				
				<input type="hidden" value="<?php echo $data_row['clinic_id'];?>" name="did">
                 <b>Name:</b>
				  <input type="text" class="form-control" name="name" value="<?php echo $data_row['name']; ?>" hidden >
                   
				
				
				
			<!--<input type="hidden" name="image" class="form-control" value="<?php// echo $data_row['image']; ?>"><br>-->
			    <!--<b>old image:</b><br>
				<img src="../images/Doctors/<?php// echo $row['image'];?>" alt="image" width="100px"><br><br>-->
				<b>Address :</b>
				<input type="text" class="form-control" name="address" value="<?php echo $data_row['address']; ?>" hidden >	
                 				
						
					
						
					
					
				<b>Timing(Mon-Sat) :</b>
				<input type="text" name="timing_ms" class="form-control" value="<?php echo $data_row['timing_ms']; ?>">							
						
					
					
					
				<b>Timing(sun) :</b>
				<input type="text" name="timing_sun" class="form-control" value="<?php echo $data_row['timing_sun']; ?>">							
						
					
					
					
				<b>Contact No :</b>
				<input type="text" name="contact_no" class="form-control" value="<?php echo $data_row['contact_no']; ?>">	
                <b>Mobile No :</b>
				<input type="text" name="mobile_no" class="form-control" value="<?php echo $data_row['mobile_no']; ?>">					
						
			  <!-- /.box-body -->
			    <div class="box-footer">
					 <a  href="admin_Clinic.php" class="btn btn-danger"> << Back</a>
                     <button type="submit" class="btn btn-success">Update</button>
					
					<!--<a  href="admin_addclinic.php?cid=<?php //echo $data_row['did'];?>" class="btn btn-success">Add Clinic</a>-->
                  </div>
			   
			   </form>
	   
              
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
