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

    <title> Patient - Edit Profile 
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
    <h2 style="font-weight:bold;font-family : 'Monotype Corsiva' ; color : #E6120E ;margin-top:2%" align="center">Edit Profile</h2><hr></div>

<div class="container" style="">
    <form method="post" enctype="multipart/form-data">
  
    <div class="form-row">
    <div class="form-group col-md-6">
      <label>Name</label>
      <input type="text" class="form-control" value="<?=$patientname;?>" name="patientname" >
    </div>
    <div class="form-group col-md-6">
      <label>Contact</label>
      <input type="text" class="form-control" name="contact" value="<?=$contact?>" >
    </div>
  </div>
        <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Email ID</label>
      <input type="text" readonly class="form-control" name="emailid" value="<?=$emailid?>" id="inputEmail4">
    </div>
	
  </div>

 <div class="form-row">
    <div class="form-group col-md-12">
    <label for="exampleInputPassword1">Address</label>
    <textarea class="form-control" id="exampleInputPassword1" name="address"><?=$address ?></textarea>
  </div>
        </div>
        <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Image</label>
      <input type="file" class="form-control" name="image" id="inputEmail4">
    </div>
    <div class="form-group col-md-6">
	<?php $path = "../".$image;?>
      <img src="<?=$path?>" style="width:100px;height:110px">
    </div>
  </div>

        
        
        <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Gender</label><br>
        <div style="border:1px solid lightgrey;padding:5px;border-radius:6px">
      <div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline1" name="gender" class="custom-control-input" value="Male">
  <label class="custom-control-label" for="customRadioInline1">Male</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline2" name="gender" class="custom-control-input" value="Female">
  <label class="custom-control-label" for="customRadioInline2">Female</label>
</div>
            
        </div></div>
        <div class="form-group col-md-6">
      <label for="inputPassword4">Gender</label>
      <input type="text" readonly class="form-control" value="<?=$gender?>" id="inputPassword4">
    </div>
        </div>
        <button type="submit" name = "submit" class="btn btn-primary" style="margin-bottom:5%">Update</button>
    </form></div>
		
			
           
			
              
				
			
              
            
				

             
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
$patientname = $_POST['patientname'];
$contact = $_POST['contact'];

$address = $_POST['address'];

if(!empty($_FILES['image']['name']))
{
move_uploaded_file($_FILES['image']['tmp_name'],"../images/Patients/".$_FILES['image']['name']);

$image = "images/Patients/".$_FILES['image']['name'];
}
if(isset($_POST['gender']))
{
$gender = $_POST['gender'];
}


$query = "update patient set patientname='$patientname',contact='$contact',gender='$gender',address='$address',image='$image' where emailid='$emailid'";
$n = my_iud($query);
if($n ==1)
{
echo '<script>alert("Profile Updated Successfully");
window.location = "patient_profile_view.php";
</script>';
}
else
{
echo '<script>window.location = "patient_profile_view.php"</script>';
}	

}


?>