<?php
if (isset($_POST['btn_reg'])) {
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$date=$_POST['date'];
	$apptime=$_POST['app_time'];
	$message=$_POST['message'];
    $cid=$_POST['cid'];
		require './comnpages/config.php';
     


		$appins="INSERT INTO appoinment(app_name,app_email,app_phone,app_doctor,app_date,app_time,app_msg) VALUES 
	('$name','$email','$phone','$cid','$date','$apptime','$message') ";


	
	$result=mysqli_query($conn,$appins);
	  
	$ticketno = mysqli_insert_id($conn);

	if($ticketno){


			echo '<script>alert("Your Appointment is booked \n  TICKET NO : '.$ticketno.' ");
		window.location="./appoinment.php"</script>';
		
	 }else{
	 	echo '<script>alert("Your Appointment Registration Is Failed Please Try Again.");
				window.location="./appoinment.php"</script>';

	 }
			
			 
				
 
}else{
	echo '<script>
				window.location="./index.php?error_invalid"</script>';

}


	
	?>