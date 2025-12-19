<?php 
session_start();
include "dbconfigure.php";
if(verifyuser())
{
$emailid = $_SESSION['semailid'];
$query = "select * from patient where emailid='$emailid'";
$rs = my_select($query);
if($row = mysqli_fetch_array($rs))
{
$patientname = $row[1];
$contact = $row[3];
$gender = $row[5];
$address = $row[6];
$image = $row[7];
}
}
else
{
header("location:index.php");
}

$id = $_GET['id'];
$query1 = "select * from doctor_list where did=$id";
$rs1 = my_select($query1);
if($row1 = mysqli_fetch_array($rs1))
{
$doctoremail = $row1[7];
$doctorname = $row1[1];

}	
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

    <title>Book Appointment 
	</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
	<link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
	<link rel="stylesheet" href="css/fullcalendar.css">
	<link href="css/widgets.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
	<link href="css/xcharts.min.css" rel=" stylesheet">	
	<link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
   
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
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="fa fa-laptop"></i>Dashboard</li>						  	
					</ol>
				</div>
			</div>
			              
            <div class="container">
    <h2 style="font-weight:bold;font-family : 'Monotype Corsiva' ; color : #E6120E ;margin-top:2%" align="center">Add My Appointment</h2><hr></div>
<div class="container">
<div class="container-fluid" style="">



    <form method="post" action="" enctype="multipart/form-data">
   
    <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Doctor Name</label>
      <input type="text" class="form-control" value='<?php echo "$doctorname [$doctoremail]"; ?>' name="doctorname" id="inputEmail4" readonly>
    </div>
  </div>
        <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Your Name</label>
      <input type="text" class="form-control" name="patientname" value="<?=$patientname?>" id="inputEmail4" readonly>
    </div>
  </div>
        <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Your Email Address</label>
      <input type="text" readonly class="form-control" name="email" value="<?=$emailid?>" id="inputEmail4">
    </div>
  </div>


            <div class="form-group col-md-12">
      <label for="inputPassword4">Disease</label>
      <input type="text" class="form-control" name="disease" placeholder="Enter Your Disease" id="inputPassword4">
    </div>
  </div>
        <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputPassword4">Write your Description</label>
        <textarea class="form-control" name="description" id="inputPassword4"></textarea>
    </div>
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputPassword4">Appointment Date</label>
        <input type="date" class="form-control" name="appdate" id="inputPassword4">
    </div>
	
	<div class="form-group col-md-6">
      <label for="inputPassword4">Appointment Time</label>
        <input type="time" class="form-control" name="apptime" id="inputPassword4">
    </div>
  </div>
  
  

        <button type="submit" class="btn btn-primary" style="margin-bottom:5%;width:100%" name="submit">Apply For Appointment</button>
    </form></div>
</div>


		
			
           
			
              
				
			
              
            
				

             
          </section>
          <!-----Credit Start ------>
		  <?php #include("./comnpages/credit.php");?>
          <!-----Credit End ------>
      </section>
      <!--main content end-->
  </section>
  <!-- container section start -->

    <!-- javascripts -->
    <script src="js/jquery.js"></script>
	<script src="js/jquery-ui-1.10.4.min.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <<script src="js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
	<script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
	<script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js" ></script>
	<script src="assets/chart-master/Chart.js"></script>
   
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
	<script src="js/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="js/jquery-jvectormap-world-mill-en.js"></script>
	<script src="js/xcharts.min.js"></script>
	<script src="js/jquery.autosize.min.js"></script>
	<script src="js/jquery.placeholder.min.js"></script>
	<script src="js/gdp-data.js"></script>	
	<script src="js/morris.min.js"></script>
	<script src="js/sparklines.js"></script>	
	<script src="js/charts.js"></script>
	<script src="js/jquery.slimscroll.min.js"></script>
  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
	  
	  /* ---------- Map ---------- */
	$(function(){
	  $('#map').vectorMap({
	    map: 'world_mill_en',
	    series: {
	      regions: [{
	        values: gdpData,
	        scale: ['#000', '#000'],
	        normalizeFunction: 'polynomial'
	      }]
	    },
		backgroundColor: '#eef3f7',
	    onLabelShow: function(e, el, code){
	      el.html(el.html()+' (GDP - '+gdpData[code]+')');
	    }
	  });
	});

  </script>

  </body>
</html>

<?php 
if(isset($_POST['submit']))
{

$disease = $_POST['disease'];
$description = $_POST['description'];
$apptime = $_POST['apptime'];
$appdate = $_POST['appdate'];
$status = "Pending";


$query = "insert into appointment(patientemail,doctoremail,disease,description,apptime,appdate,status) values('$emailid','$doctoremail','$disease','$description','$apptime','$appdate','$status')";

$n = my_iud($query);
if($n==1)
{
echo '<script>alert("Booked Successfully...! Check Status of booking using login credentials. after some time. ");
window.location = "patient_view_app.php";
</script>';
}
else
{
echo '<script>alert("Something went wrong,Try Again!")</script>';
}
}
?>

