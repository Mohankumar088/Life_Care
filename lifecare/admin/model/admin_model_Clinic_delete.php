<?php
if(isset($_REQUEST['pcid']))
{
	 $id=$_REQUEST['pcid'];
	 include("../comnpages/config.php");
	 echo$sqli="DELETE FROM clinics WHERE clinic_id=$id";
	 mysqli_query($conn,$sqli);
	 
	  header('Location:../admin_Clinic.php?Delete=Success');
}
?>