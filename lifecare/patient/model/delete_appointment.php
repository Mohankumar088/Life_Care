<?php


require('../comnpages/config.php');

 

$id= $_GET['id'];


 
  $sql = "DELETE FROM appoinment WHERE app_id= '$id'  ";
  
if (mysqli_query($conn, $sql)){
   
		header('Location:../admin_Doctor_app.php?Record_Deleted_successfully');

	}
	 
	


else{
		header('Location:../admin_Doctor_app.php?Record_do_not_updated');
	 
	}
	
  


?>