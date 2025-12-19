<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
include "dbconfigure.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  
  <style>
    .doctor-row {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: center;
    }
    .doctor-card {
      flex: 1 1 calc(33.333% - 20px); /* 3 per row */
      max-width: calc(33.333% - 20px);
      border: 1px solid #ddd;
      border-radius: 10px;
      padding: 20px;
      background: #fff;
      transition: 0.3s;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      text-align: center;
    }
    .doctor-card:hover {
      box-shadow: 0 4px 15px rgba(0,0,0,0.2);
    }
    .doctor-card img {
      width: 150px;
      height: 150px;
      object-fit: cover;
      border-radius: 50%;
      margin: 0 auto 15px;
    }
    .doctor-card h4 {
      font-weight: bold;
      margin-bottom: 5px;
      text-transform: capitalize;
    }
    .doctor-card .btn {
      font-size: 13px;
      padding: 6px;
    }
    @media (max-width: 991px) {
      .doctor-card { 
        flex: 1 1 calc(50% - 20px);
        max-width: calc(50% - 20px);
      }
    }
    @media (max-width: 575px) {
      .doctor-card { 
        flex: 1 1 100%;
        max-width: 100%;
      }
    }
  </style>
</head>

<body>
<section id="container">
  <!--header start-->
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
          <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
            <li><i class="fa fa-laptop"></i>Dashboard</li>
          </ol>
        </div>
      </div>

      <div class="container">
        <h2 style="font-weight:bold;font-family:'Monotype Corsiva'; color:#E6120E; margin:20px 0;" align="center">All Doctors</h2>
        <div class="doctor-row">
          <?php 
          $query = "SELECT * FROM doctor_list";
          $rs = my_select($query);
          while($row = mysqli_fetch_array($rs)) {
              $path = "../".$row[2];
          ?>
          <div class="doctor-card">
            <div>
              <img src="<?= $path ?>" alt="Doctor Image">
              <h4><?= $row[1] ?></h4>
              <p><?= $row[3] ?></p>
              <p><?= $row[5] ?></p>
            </div>
            <div class="row mt-3">
              <div class="col-6">
                <a href="bookappointment.php?id=<?= $row[0] ?>" class="btn btn-primary w-100">Book</a>
              </div>
              <div class="col-6">
                <a href="viewdoctordetail.php?id=<?= $row[0] ?>" class="btn btn-info w-100">Details</a>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>

    </section>
  </section>
</section>

<!-- Scripts -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
