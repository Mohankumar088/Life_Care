<?php
if(isset($_REQUEST['pcid']))
{
	 $id=$_REQUEST['pcid'];
	 include("./comnpages/config.php");
	 $sqli="DELETE FROM tbl_feedback WHERE fbid=$id";
	 mysqli_query($conn,$sqli);
	 
	header('Location:allcontact.php');
}
?>