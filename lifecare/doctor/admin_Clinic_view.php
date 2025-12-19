<?php
require('./comnpages/config.php');
//$select_userRequest="SELECT * FROM tbl_subcategory ";
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

    <title>Admin :: View Clinic</title>

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
					<h3 class="page-header"><i class="fa fa fa-bars"></i>View Clinic</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="fa fa-bars"></i>Clinics</li>
						<li><i class="fa fa-square-o"></i>Clinic Details</li>
						<li><i class="fa fa-square-o"></i>View Clinic</li>
					</ol>
				</div>
			</div>
              <!-- page start-->
              
			<div class="box box-primary" >
          
						<?php	
			$update_id=$_REQUEST['cid'];
			$c_select = mysqli_query($conn,"SELECT * FROM clinics WHERE clinic_id='$update_id'");
			$data_row = mysqli_fetch_array($c_select);
					$sql1="UPDATE clinic SET isread=1";
					$sql11=mysqli_query($conn,$sql1);
			
				?>
				
				 <table id="example1" class="table table-bordered table-striped">
               				
	
                <tr>
                  <th> Clinic Name</th>	<td> <?php echo $data_row['name']; ?> </td>
				</tr>
				
				<tr>
                  <th>Address</th>	<td> <?php echo $data_row['address']; ?> </td>
				</tr>
				
				<tr>				  
                  <th>Timings (Mon-Sat)</th><td> <?php echo $data_row['timing_ms']; ?> </td>  			  
                </tr>
				<tr>
				  <th>Timings (Sunday)</th> <td> <?php echo $data_row['timing_sun']; ?> </td> 
				</tr>
				<tr>
				  <th>Contact No.</th> <td> <?php echo $data_row['contact_no']; ?> </td> 
				</tr>
				<tr>
				  <th>Mobile No.</th> <td> <?php echo $data_row['mobile_no']; ?> </td> 
				</tr>
				 </table>
				<?php
				$select = mysqli_query($conn,"SELECT * FROM clinics WHERE d_id=$update_id");
		                     $noofrows=mysqli_num_rows($select);
							 $count=0;
							 if($noofrows>0)
							 {
		                      while($row= mysqli_fetch_array($select))
		                          {
		                            $count++;
																			
							  ?>
			
		<!--	<div bgcolor="white" style="border:1px solid black;width:500px;margin:auto;background-color:#00dfdc;" >
			 <table align="center" >
			     <tr > <td><b>Clinic Id:</td><td></b><?php //echo $row['clinic_id']; ?></td></tr>
                 <tr> <td><b>Clinic Name:</b></td><td><?php //echo $row['name']; ?></td></tr>
                  <tr><td><b>Clinic Address:</b></td><td> <?php //echo $row['address'];?></td></tr>
			      <tr><td><b>Timings(Mon-Sat):</b></td><td><?php //echo $row['timing_ms'];?></td></tr> 
			     <tr><td> <b>Timings(Sunday):</b></td><td><?php //echo $row['timing_sun']; ?></td></tr>
           		 <tr> <td><b>Contact no.:</b></td><td><?php// echo $row['contact_no']; ?></td>	</tr>	  
                 <tr> <td><b>Mobile no.</b></td><td><?php// echo $row['mobile_no']; ?> </td></tr>
				</table>
			</div><br>-->
				<?php
							 }}?>
               
             
			  
			  <div class="box-footer">
					 <a  href="./admin_Clinic.php" class="btn btn-danger"> << Back</a>
                     
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
