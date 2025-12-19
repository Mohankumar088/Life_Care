<?php 
include("../comnpages/config.php");
     $id=$_POST['did'];
     $name=$_POST['name'];
     $address=$_POST['address'];
     
     $timing_sun=$_POST['timing_sun'];
     $timing_ms=$_POST['timing_ms'];
     $contact_no=$_POST['contact_no'];
     $mobile_no=$_POST['mobile_no'];
	
	
	$sql="UPDATE clinics SET name='$name',address='$address',timing_ms='$timing_ms',
 timing_sun='$timing_sun',contact_no='$contact_no',mobile_no='$mobile_no' WHERE clinic_id=$id";
	
	echo $sql;
	$data=mysqli_query($conn,$sql);
	
	header('Location:../admin_Clinic.php');
	
?>