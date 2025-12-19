<?php
ob_start();
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

    <title>Admin :: View Doctor</title>

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
					<h3 class="page-header"><i class="fa fa fa-bars"></i>View Appointment</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="fa fa-bars"></i>doctors</li>
						<li><i class="fa fa-square-o"></i>View all Doctors</li>
						<li><i class="fa fa-square-o"></i>View Doctor</li>
					</ol>
				</div>
			<div class="col-lg-12">
              <!-- page start-->
              
			<div class="box box-primary"  >
          
		<?php	
			$update_id=$_REQUEST['id'];
			$c_select = mysqli_query($conn,"SELECT * FROM appointment WHERE id='$update_id'");
			$data_row = mysqli_fetch_array($c_select);
					//$sql1="UPDATE doctor_list SET isread=1";
					//$sql11=mysqli_query($conn,$sql1);
			
				?>
				<div bgcolor="white"  style=" box-shadow:5px 3px 12px black;" >
				
				 <table id="example1" class="table table-bordered table-striped">
               			<caption> Appointment  Details </caption>	
	
                <tr>
                  <th>Doctor</th>	<td> <?php echo $data_row['doctoremail']; ?> </td>
				</tr>
				
				<tr>
                  <th>Patient</th>	<td> <?php echo $data_row['patientemail']; ?> </td>
				</tr>
				
				<tr>				  
                  <th>Fees</th><td> <?php echo $data_row['disease']; ?> </td>  			  
                </tr>
				<tr>
				  <th>Description</th> <td> <?php echo $data_row['description']; ?> </td> 
				</tr>
				<tr>
				  <th>Appointment Date</th> <td> <?php echo $data_row['appdate']; ?> </td> 
				</tr>
				<tr>
				  <th>Appointment Time</th> <td> <?php echo $data_row['apptime']; ?> </td> 
				</tr>
				<tr>
				  <th>Status</th> <td> <?php echo $data_row['status']; ?> </td> 
				</tr>
				
				<form method="post">
				<tr>
				  <th>Change Status</th> <td>
				  <select name="status" class="form-control">
				  <option value="Pending">Pending</option>
				  <option value="Accept">Accept</option>
				  <option value="Reject">Reject</option>
				  </select> 
				  </td> 
				</tr>
				
				
				 </table>
				 </div>
				
			  <div class="box-footer">
					 <a  href="./admin_Doctors.php" class="btn btn-danger"> << Back</a>
                     <input type = "submit" value="Submit" name="submit" class="btn btn-primary">
                  </div>
				  </form>
				</div>
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

$status = $_POST['status'];

$query = "update appointment set status='$status' where id=$update_id";
$n = my_iud($query);
if($n == 1)
{
echo '<script>alert("Status Changed Successfully")</script>' ;
header("Location:admin_doctor_app.php");
}
else
{
echo '<script>window.location = "admin_doctor_app.php";</script>' ;

}
}
?>

