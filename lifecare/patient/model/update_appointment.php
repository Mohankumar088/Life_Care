 <?php

  require('../comnpages/config.php');

 
  $id=$_GET['id'];
  $value=$_GET['value'];

    $sqlupdate="UPDATE `appoinment` SET status= '$value' WHERE app_id= '$id' ";



 

if (mysqli_query($conn, $sqlupdate)) {
    echo "Record updated successfully";


		header('Location:../admin_Doctor_app.php?Record_updated_successfully');

	}
	 
	


else{
		header('Location:../admin_Doctor_app.php?Record_do_not_updated');
	 
	}
	
  
 

 ?>