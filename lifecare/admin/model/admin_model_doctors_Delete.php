<?php
if(isset($_REQUEST['pcid']))
{
	 $id=$_REQUEST['pcid'];
	 include("../comnpages/config.php");
	 echo $sqli="DELETE FROM doctor_list WHERE did=$id";
	 mysqli_query($conn,$sqli);
	 
	  header('Location:../admin_Doctors.php?Delete_Success');
}
?>