<?php
session_start();

if(isset($_POST['changepass_btn']))
{  
 
print_r($_SESSION);

 	
	
	 require('../comnpages/config.php');
	 
	$doctor_id = $_SESSION['doctor_id'];


	if($_POST['cpassword']!=$_POST['newpassword'])
	{
		 echo "<script type='text/javascript'>
											 
				 window.location = '../changePassword.php?New_Password_and Confirm_Password_do_no_match';
				  </script>";
						 	


	}else{


		$oldpassword=$_POST['oldpassword'];


		 $sql="SELECT  user_pass  FROM tbl_logindetails WHERE did= '$doctor_id' AND  user_pass = '$oldpassword' ";


						 $result = mysqli_query($conn, $sql);

					if (mysqli_num_rows($result) > 0) {

						$newpassword=$_POST['newpassword'];


						$sqlupdate="UPDATE `tbl_logindetails` SET  user_pass = $newpassword  WHERE did= '$doctor_id' ";

								if (mysqli_query($conn, $sqlupdate)) {

									 echo "<script type='text/javascript'>
											 
						                    window.location = '../index.php?Password_Update_Successfully';
						                   </script>";
						 	




								    
								} 				   
					   


					        
					    
					} else {
					             echo "<script type='text/javascript'>
											 
						                    window.location = '../changePassword.php?Old_Passqord_do_not_match';
						                   </script>";
						 	


					}

	}



print_r($_POST);
 



}
else
{
	  echo "<script type='text/javascript'>
											 
						                    window.location = '../../index?error_invalid_user';
						                   </script>";
						 	
}

    


?>