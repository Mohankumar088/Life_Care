<?php
  session_start();
  $id=$_SESSION['app_id'];
  $id=20;
  require('./comnpages/config.php');
  $sql="SELECT * FROM appoinment WHERE app_id=&id";
  $result=mysqli_query($conn,$sql);
  if($result){
  	if(mysqli_num_rows($result>0)){

 while($user=mysqli_fetch_array($result));
  ?>

  
