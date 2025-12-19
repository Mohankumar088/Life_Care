<?php
 



require('../comnpages/config.php');
            
	       


$cid=$_GET['cid'];

		 
			 
	      

$select_userRequest="SELECT * FROM doctor_list WHERE did= '$cid'  ";
$data_sur=mysqli_query($conn,$select_userRequest);



			$row = mysqli_fetch_array($data_sur);


      
 
$name=$row['name'];
$email=$row['did'];
$email="doctor.".$email."@gmail.com";
$pass="123";
$name=$row['name'];


	 
	  



echo $sql="INSERT INTO tbl_logindetails( did, user_name, user_email, user_pass,user_type, status) VALUES ('$cid','$name','$email','$pass',2,1)";


if (mysqli_query($conn, $sql)) {

	echo '<script type="text/javascript">                
              window.location = "../admin_Doctors.php" 
			 </script>';
 
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

 




   


?>