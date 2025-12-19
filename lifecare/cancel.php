<?php
if (isset($_POST['btn_reg'])) {

	$phone=$_POST['phone'];
	$tid=$_POST['id'];
 
require 'config.php';


$select="SELECT app_id FROM appoinment  where app_id=$tid";

$r=mysqli_query($conn,$select);

if ($r>0) {

	

		$cancel="UPDATE appoinment SET status=1 WHERE app_id=$tid ";



		$r2=mysqli_query($conn,$cancel);
		if ($r2>0) {
			echo '<script>alert("your Appointment is cancelled");
		window.location="./appoinment.php"</script>';
		}

	
		
	 }




}


?>

