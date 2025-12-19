<?php
  session_start();
  // $id=$_SESSION['app_id'];

   
   $doctor_id=$_SESSION['doctor_id'];

  if($doctor_id>0)
  {



  
  $id=17;
  require('./comnpages/config.php');

  

  $sql="SELECT * FROM appoinment WHERE app_doctor='$doctor_id' AND status=1  ";






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

    <title>Admin :: Appoinment Details</title>

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
  <style>
  #para{
    float:right;
  }
  </style>

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
          <h3 class="page-header"><i class="fa fa fa-bars"></i>Appoinment Details</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
            <li><i class="fa fa-square-o"></i>Appoinment list</li>
          </ol>
        
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
                          
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                               
                                 <th><i class="icon_profile"></i>app_name</th>
                                 <th><i class="icon_calendar"></i>app_email</th>
                                <!-- <th><i class="icon_calendar"></i>Image</th>-->
                                 <th><i class="icon_mail_alt"></i>app_phone</th>
                                 <th><i class="icon_mail_alt"></i>app_date</th>
                                 
                                 <th><i class="icon_mobile"></i>app_time</th>
                                 
                                 
                              </tr>
                <?php
                   $result=mysqli_query($conn,$sql);
                   if($result){
                   if(mysqli_num_rows($result)>0){

                  while($user=mysqli_fetch_array($result))
                         {  

                            $c_id= $user['app_id'];
 
 

        ?>
                             <tr>
          <td><?=$user['app_name']?></td>
          <td><?=$user['app_email']?></td>
          <td><?=$user['app_phone']?></td>
          <td><?=$user['app_date']?></td>
          <td><?=$user['app_time']?></td>
          

        </tr>

          <?php 












        }
         }}  ?> 

         </table> 

        
    

                        
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
    
<script type="text/javascript"></script>
  </body>
</html>

<?php


}else{

  echo '<script type="text/javascript">
           window.location "../index.php?invadUser";
  </script>';

  
              

}

?>
